<?php

namespace App\Controllers;

use App\Models\Model_User;
use App\Models\Entity_User;
use App\Models\Model_Cart;
use App\Models\Model_CartProducts;
use App\Models\Model_Order;

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

    public function blockCustomer($id)
    {
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

    public function unlockCustomer($id)
    {
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

    public function info_edit_submit()
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
        $error['email'] = $error['password_old'] = $error['password'] = $error['password_length'] = $error['first_name'] = $error['last_name'] = $error['dob'] = $error['gender']
            = $error['email_exist'] = $error['sthg_wrong'] = NULL;

        $flag = true;
        if (empty($_POST['email'])) {
            $error['email'] = 'H??y nh???p email';
            $flag = false;
        } else {
            if ($_POST['email'] != $_SESSION['user']['email']) {
                if ($userModel->checkExistEmail($_POST['email'])->num_rows > 0) {
                    $error['email_exist'] = 'Email ???? c?? ng?????i s??? d???ng r???i';
                    $flag = false;
                }
            }
            $userEntity->email = $_POST['email'];
        }
        if (empty($_POST['pass_old'])) {
            $error['password_old'] = 'H??y nh???p m???t kh???u hi???n t???i';
            $flag = false;
        } else {
            if (!password_verify($_POST['pass_old'], $_SESSION['user']['password'])) {
                $error['password_old'] = 'M???t kh???u hi???n t???i kh??ng ????ng';
                $flag = false;
            }
            if (empty($_POST['pass_new1'])) {
                $error['password'] = 'H??y nh???p m???t kh???u m???i';
                $flag = false;
            } else {
                if (strlen($_POST['pass_new1']) < 6 || strlen($_POST['pass_new1']) > 32) {
                    $error['password_length'] = 'Vui l??ng nh???p m???t kh???u ????? d??i t??? 6 t???i 32 k?? t???';
                    $flag = false;
                } else {
                    $userEntity->password = $_POST['pass_new1'];
                }
            }
        }
        if (empty($_POST['first_name'])) {
            $error['first_name'] = 'H??y nh???p h???';
            $flag = false;
        } else {
            $userEntity->first_name = $_POST['first_name'];
        }
        if (empty($_POST['last_name'])) {
            $error['last_name'] = 'H??y nh???p t??n';
            $flag = false;
        } else {
            $userEntity->last_name = $_POST['last_name'];
        }
        if (empty($_POST['dob'])) {
            $error['dob'] = 'H??y nh???p ng??y sinh';
            $flag = false;
        } else {
            $userEntity->dob = $_POST['dob'];
        }
        if (empty($_POST['gender'])) {
            $error['gender'] = 'H??y ch???n gi???i t??nh';
            $flag = false;
        } else {
            $userEntity->gender = $_POST['gender'];
        }
        if ($flag) {
            $result = $userModel->updateInfoUser($userEntity);
            if ($result == 1) {
                $_SESSION['register_success'] = 'success';
                $result = $userModel->authorize($userEntity);
                $_SESSION['user'] = $result->fetch_array();
                return header('Location: ' . SCRIPT_ROOT . '/customer/info');
            } else {
                $error['sthg_wrong'] = "C?? l???i, vui l??ng th??? l???i sau!";
            }
        }
        $_SESSION['register_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/customer/info_edit');
    }

    public function address_edit_submit()
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
        $error['phone'] = $error['phone_exist'] = $error['city'] = $error['district'] = $error['ward'] = $error['address'] = $error['sthg_wrong'] = NULL;

        $flag = true;
        if (empty($_POST['phone'])) {
            $error['phone'] = 'H??y nh???p s??? ??i???n tho???i';
            $flag = false;
        } else {
            if ($_POST['phone'] != $_SESSION['user']['phone']) {
                if ($userModel->checkExistPhone($_POST['phone'])->num_rows > 0) {
                    $error['phone_exist'] = 'S??? ??i???n tho???i ???? c?? ng?????i s??? d???ng r???i';
                    $flag = false;
                }
            }
            $userEntity->phone = $_POST['phone'];
        }
        if (empty($_POST['city'])) {
            $error['city'] = 'H??y ch???n th??nh ph???';
            $flag = false;
        } else {
            $userEntity->city = $_POST['city'];
        }
        if (empty($_POST['district'])) {
            $error['district'] = 'H??y ch???n qu???n/huy???n';
            $flag = false;
        } else {
            $userEntity->district = $_POST['district'];
        }
        if (empty($_POST['ward'])) {
            $error['ward'] = 'H??y ch???n ph?????ng/x??';
            $flag = false;
        } else {
            $userEntity->ward = $_POST['ward'];
        }
        if (empty($_POST['address'])) {
            $error['address'] = 'H??y nh???p ?????a ch???';
            $flag = false;
        } else {
            $userEntity->address = $_POST['address'];
        }
        if ($flag) {
            $result = $userModel->updateAddressUser($userEntity);
            if ($result == 1) {
                $_SESSION['register_success'] = 'success';
                $userEntity->email = $_SESSION['user']['email'];
                $result = $userModel->authorize($userEntity);
                $_SESSION['user'] = $result->fetch_array();
                return header('Location: ' . SCRIPT_ROOT . '/customer/address_list');
            } else {
                $error['sthg_wrong'] = "C?? l???i, vui l??ng th??? l???i sau!";
            }
        }
        $_SESSION['register_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/customer/address_edit');
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
            $error['email'] = 'H??y nh???p email';
            $flag = false;
        } else {
            $userEntity->email = $_POST['email'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'H??y nh???p m???t kh???u';
            $flag = false;
        }
        if ($flag) {
            $result = $userModel->authorize($userEntity);
            if ($result->num_rows > 0) {
                $data = $result->fetch_array();
                if (password_verify($_POST['password'], $data['password'])) {
                    $_SESSION['user'] = $data;
                    if($_SESSION['user']['role'] == 2){
                        $orderModel = new Model_Order();
                        $_SESSION['total_non_confirm_order'] = $orderModel->getTotalNonConfirmOrder(); 
                    }
                    $cartProductModel = new Model_CartProducts(); 
                    $_SESSION['cart_total_product'] = $cartProductModel->getCountProductInCart()->fetch_array()['count_product'];
                    $cartModel = new Model_Cart();
                    if ($cartModel->checkExistCart($_SESSION['user']['id'])->num_rows > 0) {
                        $cart_id = $cartModel->checkExistCart($_SESSION['user']['id'])->fetch_array()['id'];
                    }else{
                        $cart_id = $cartModel->createCart($_SESSION['user']['id']);
                    }
                    $_SESSION['cart_product'] = $cartModel->getProductInCart($cart_id);
                    return header('Location: ' . SCRIPT_ROOT . '/');
                } else {
                    $error['sthg_wrong'] = "Sai m???t kh???u ho???c t??n ????ng nh???p";
                }
            } else {
                $error['sthg_wrong'] = "Sai m???t kh???u ho???c t??n ????ng nh???p";
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
            $error['email'] = 'H??y nh???p email';
            $flag = false;
        } else {
            $userEntity->email = $_POST['email'];
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'H??y nh???p m???t kh???u';
            $flag = false;
        } else {
            if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
                $error['password_length'] = 'Vui l??ng nh???p m???t kh???u ????? d??i t??? 6 t???i 32 k?? t???';
                $flag = false;
            } else {
                $userEntity->password = $_POST['password'];
            }
        }
        if (empty($_POST['first_name'])) {
            $error['first_name'] = 'H??y nh???p h???';
            $flag = false;
        } else {
            $userEntity->first_name = $_POST['first_name'];
        }
        if (empty($_POST['last_name'])) {
            $error['last_name'] = 'H??y nh???p t??n';
            $flag = false;
        } else {
            $userEntity->last_name = $_POST['last_name'];
        }
        if (empty($_POST['phone'])) {
            $error['phone'] = 'H??y nh???p s??? ??i???n tho???i';
            $flag = false;
        } else {
            $userEntity->phone = $_POST['phone'];
        }
        if (empty($_POST['dob'])) {
            $error['dob'] = 'H??y nh???p ng??y sinh';
            $flag = false;
        } else {
            $userEntity->dob = $_POST['dob'];
        }
        if (empty($_POST['gender'])) {
            $error['gender'] = 'H??y ch???n gi???i t??nh';
            $flag = false;
        } else {
            $userEntity->gender = $_POST['gender'];
        }
        if (empty($_POST['city'])) {
            $error['city'] = 'H??y ch???n th??nh ph???';
            $flag = false;
        } else {
            $userEntity->city = $_POST['city'];
        }
        if (empty($_POST['district'])) {
            $error['district'] = 'H??y ch???n qu???n/huy???n';
            $flag = false;
        } else {
            $userEntity->district = $_POST['district'];
        }
        if (empty($_POST['ward'])) {
            $error['ward'] = 'H??y ch???n ph?????ng/x??';
            $flag = false;
        } else {
            $userEntity->ward = $_POST['ward'];
        }
        if (empty($_POST['address'])) {
            $error['address'] = 'H??y nh???p ?????a ch???';
            $flag = false;
        } else {
            $userEntity->address = $_POST['address'];
        }
        if ($userModel->checkExistEmail($userEntity->email)->num_rows > 0) {
            $error['email_exist'] = 'Email ???? c?? ng?????i s??? d???ng r???i';
            $flag = false;
        }
        if ($userModel->checkExistPhone($userEntity->phone)->num_rows > 0) {
            $error['phone_exist'] = 'S??? ??i???n tho???i ???? c?? ng?????i s??? d???ng r???i';
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
                $error['sthg_wrong'] = "C?? l???i, vui l??ng th??? l???i sau!";
            }
        }
        $_SESSION['register_input'] = (array)$userEntity;
        $_SESSION['register_error'] = $error;
        return header('Location: ' . SCRIPT_ROOT . '/customer/register');
    }
}
