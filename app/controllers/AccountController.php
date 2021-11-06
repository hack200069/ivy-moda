<?php

namespace App\Controllers;

use App\Models\Model_User;
use App\Models\Entity_User;

class AccountController
{
    public function __construct()
    {
    }

    public function login()
    {
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/login.php');
        include_once('view/site/layouts/footer.php');
    }

    public function logout()
    {
        unset($_SESSION['user']);
        return header('Location: ' . SCRIPT_ROOT . '/');
    }

    public function register()
    {
        include_once('view/site/layouts/header.php');
        include_once('view/site/pages/register.php');
        include_once('view/site/layouts/footer.php');
    }

    public function info()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/info.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function info_edit()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/info_edit.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function address_list()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/address_list.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function address_edit()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/address_edit.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function order_list()
    {
        if (isset($_SESSION['user'])) {
            include_once('view/site/layouts/header.php');
            include_once('view/site/pages/order_list.php');
            include_once('view/site/layouts/footer.php');
            return;
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function customer()
    {
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $url_components = parse_url($actual_link);
                if (isset($url_components['query'])) {
                    parse_str($url_components['query'], $params);
                }
                $userModel = new Model_User();
                $page_no = 1;
                if (isset($params['page_no'])) {
                    $page_no = $params['page_no'];
                }
                $q = '';
                if (isset($params['q'])) {
                    $q = $params['q'];
                }
                $total_pages = $userModel->getTotalPage(10, $q);
                $customers = $userModel->getListCustomer($page_no, 10, $q);
                include_once('view/admin/layouts/header.php');
                include_once('view/admin/pages/customer/index.php');
                include_once('view/admin/layouts/footer.php');
                return;
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function blockCustomer($id){
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $userModel = new Model_User();
                $result = $userModel->blockCustomer($id);
                if ($result) {
                    $_SESSION['block_customer_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/customer');
                }
                $_SESSION['block_customer_error'] = 'error';
                return header('Location: ' . SCRIPT_ROOT . '/admin/customer');
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function unlockCustomer($id){
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['role'] == ADMIN) {
                $userModel = new Model_User();
                $result = $userModel->unlockCustomer($id);
                if ($result) {
                    $_SESSION['unlock_customer_success'] = 'success';
                    return header('Location: ' . SCRIPT_ROOT . '/admin/customer');
                }
                $_SESSION['unlock_customer_error'] = 'error';
                return header('Location: ' . SCRIPT_ROOT . '/admin/customer');
            } else {
                return header('Location: ' . SCRIPT_ROOT . '/');
            }
        } else {
            return header('Location: ' . SCRIPT_ROOT . '/customer/login');
        }
    }

    public function submitLogin()
    {
        $userModel = new Model_User();
        $userEntity = new Entity_User(
            $id = null,
            $email = null,
            $password = null,
            $first_name = null,
            $last_name = null,
            $phone = null,
            $dob = null,
            $gender = null,
            $city = null,
            $district = null,
            $ward = null,
            $address = null,
            $role = null,
            $active = null
        );

        $error = array();
        $error['email'] = $error['password'] = $error['sthg_wrong'] = NULL;
        $flag = true;
        if (empty($_POST['email'])) {
            $error['email'] = 'Hãy nhập email';
            $flag = false;
        } else {
            $userEntity->email = $_POST['email'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'Hãy nhập mật khẩu';
            $flag = false;
        }
        if ($flag) {
            $result = $userModel->authorize($userEntity);
            if ($result->num_rows > 0) {
                $data = $result->fetch_array();
                if (password_verify($_POST['password'], $data['password'])) {
                    $_SESSION['user'] = $data;
                    return header('Location: ' . SCRIPT_ROOT . '/');
                } else {
                    $error['sthg_wrong'] = "Sai mật khẩu hoặc tên đăng nhập";
                }
            } else {
                $error['sthg_wrong'] = "Sai mật khẩu hoặc tên đăng nhập";
            }
        }
        $_SESSION['login_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/customer/login');
    }

    public function submitRegister()
    {
        $userModel = new Model_User();
        $userEntity = new Entity_User(
            $id = null,
            $email = null,
            $password = null,
            $first_name = null,
            $last_name = null,
            $phone = null,
            $dob = null,
            $gender = null,
            $city = null,
            $district = null,
            $ward = null,
            $address = null,
            $role = null,
            $active = null
        );

        $error = array();
        $error['email'] = $error['password'] = $error['password_length'] = $error['first_name'] = $error['last_name'] = $error['phone'] = $error['dob'] = $error['gender']
            = $error['city'] = $error['district'] = $error['ward'] = $error['address'] = $error['email_exist'] = $error['phone_exist'] = $error['sthg_wrong'] = NULL;

        $flag = true;

        if (empty($_POST['email'])) {
            $error['email'] = 'Hãy nhập email';
            $flag = false;
        } else {
            $userEntity->email = $_POST['email'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'Hãy nhập mật khẩu';
            $flag = false;
        } else {
            if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
                $error['password_length'] = 'Vui lòng nhập mật khẩu độ dài từ 6 tới 32 ký tự';
                $flag = false;
            } else {
                $userEntity->password = $_POST['password'];
            }
        }
        if (empty($_POST['first_name'])) {
            $error['first_name'] = 'Hãy nhập họ';
            $flag = false;
        } else {
            $userEntity->first_name = $_POST['first_name'];
        }
        if (empty($_POST['last_name'])) {
            $error['last_name'] = 'Hãy nhập tên';
            $flag = false;
        } else {
            $userEntity->last_name = $_POST['last_name'];
        }
        if (empty($_POST['phone'])) {
            $error['phone'] = 'Hãy nhập số điện thoại';
            $flag = false;
        } else {
            $userEntity->phone = $_POST['phone'];
        }
        if (empty($_POST['dob'])) {
            $error['dob'] = 'Hãy nhập ngày sinh';
            $flag = false;
        } else {
            $userEntity->dob = $_POST['dob'];
        }
        if (empty($_POST['gender'])) {
            $error['gender'] = 'Hãy chọn giới tính';
            $flag = false;
        } else {
            $userEntity->gender = $_POST['gender'];
        }
        if (empty($_POST['city'])) {
            $error['city'] = 'Hãy chọn thành phố';
            $flag = false;
        } else {
            $userEntity->city = $_POST['city'];
        }
        if (empty($_POST['district'])) {
            $error['district'] = 'Hãy chọn quận/huyện';
            $flag = false;
        } else {
            $userEntity->district = $_POST['district'];
        }
        if (empty($_POST['ward'])) {
            $error['ward'] = 'Hãy chọn phường/xã';
            $flag = false;
        } else {
            $userEntity->ward = $_POST['ward'];
        }
        if (empty($_POST['address'])) {
            $error['address'] = 'Hãy nhập địa chỉ';
            $flag = false;
        } else {
            $userEntity->address = $_POST['address'];
        }
        if ($userModel->checkExistEmail($userEntity->email)->num_rows > 0) {
            $error['email_exist'] = 'Email đã có người sử dụng rồi';
            $flag = false;
        }
        if ($userModel->checkExistPhone($userEntity->phone)->num_rows > 0) {
            $error['phone_exist'] = 'Số điện thoại đã có người sử dụng rồi';
            $flag = false;
        }
        if ($flag) {
            $result = $userModel->saveUser($userEntity);
            if ($result == 1) {
                $_SESSION['register_success'] = 'success';
                if (isset($_SESSION['register_input'])) {
                    unset($_SESSION['register_input']);
                }
                return header('Location: ' . SCRIPT_ROOT . '/customer/login');
            } else {
                $error['sthg_wrong'] = "Có lỗi, vui lòng thử lại sau!";
            }
        }
        $_SESSION['register_input'] = (array)$userEntity;
        $_SESSION['register_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/customer/register');
    }
}
