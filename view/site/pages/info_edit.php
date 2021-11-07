<form name="frm_register" id="frm_register" method="post">
    <div id="infouser" class="row title_h3">
        <div class="container">
            <h3>Thông tin cá nhân</h3>
            <?php
        if (!empty($_SESSION['register_error'])) {
            echo '<div class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>';
            if (isset($_SESSION['register_error']['email'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['email'] . '<br>';
                unset($_SESSION['register_error']['email']);
            }
            if (isset($_SESSION['register_error']['password_old'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['password_old'] . '<br>';
                unset($_SESSION['register_error']['password_old']);
            }
            if (isset($_SESSION['register_error']['password'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['password'] . '<br>';
                unset($_SESSION['register_error']['password']);
            }
            if (isset($_SESSION['register_error']['password_length'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['password_length'] . '<br>';
                unset($_SESSION['register_error']['password_length']);
            }
            if (isset($_SESSION['register_error']['first_name'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['first_name'] . '<br>';
                unset($_SESSION['register_error']['first_name']);
            }
            if (isset($_SESSION['register_error']['last_name'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['last_name'] . '<br>';
                unset($_SESSION['register_error']['last_name']);
            }
            if (isset($_SESSION['register_error']['dob'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['dob'] . '<br>';
                unset($_SESSION['register_error']['dob']);
            }
            if (isset($_SESSION['register_error']['gender'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['gender'] . '<br>';
                unset($_SESSION['register_error']['gender']);
            }
            if (isset($_SESSION['register_error']['email_exist'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['email_exist'] . '<br>';
                unset($_SESSION['register_error']['email_exist']);
            }
            if (isset($_SESSION['register_error']['sthg_wrong'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['sthg_wrong'] . '<br>';
                unset($_SESSION['register_error']['sthg_wrong']);
            }
            unset($_SESSION['register_error']);
            echo '</div>';
        }
        ?>
            <div id="error-area" class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px; display: none;">
                <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                <div id="error-block">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tài khoản của tôi</div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="row">
                                        <ul class="nav" role="tablist">
                                            <li role="presentation" class="active"><a href="<?= SCRIPT_ROOT ?>/customer/info" aria-controls="bangthongtintaikhoan">Bảng thông tin tài khoản</a></li>
                                            <li role="presentation" class=""><a href="<?= SCRIPT_ROOT ?>/customer/address_list" aria-controls="sodiachi">Địa chỉ nhận hàng</a></li>
                                            <li role="presentation" class=""><a href="<?= SCRIPT_ROOT ?>/customer/order_list" aria-controls="quanlydonhang">Quản lý đơn hàng</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-9 col-xs-12 clearfix">
                    <ul class="list-style-type-none" style="padding-top: 10px">
                        <li>
                            <div class="form-group two-fields">
                                <label>Họ</label><em class="required">*</em>
                                <input type="text" value="<?=$_SESSION['user']['first_name'];?>" name="first_name" class="form-control" placeholder="Họ.." required>
                            </div>
                            <div class="form-group two-fields">
                                <label>Tên</label><em class="required">*</em>
                                <input type="text" value="<?= $_SESSION['user']['last_name'] ?>" name="last_name" class="form-control" placeholder="Tên.." required>
                            </div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Địa chỉ Email</label><em class="required">*</em><em>(Tài khoản đăng nhập)</em><br>
                                <small>Email dùng để đăng nhập</small>
                                <input type="email" name="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" placeholder="Email.." required>
                            </div>
                            <div class="form-group two-fields">
                                <label>Điện thoại</label><em class="required">*</em><br>
                                <small>Thay đổi ở mục địa chỉ nhận hàng</small>
                                <input type="text" disabled value="<?= $_SESSION['user']['phone'] ?>" class="form-control" placeholder="Điện thoại.." required>
                            </div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Ngày sinh</label><em class="required">*</em>
                                <input type="text" name="dob" value="<?= date('d/m/Y', strtotime($_SESSION['user']['dob'])) ?>" class="form-control datepicker" required>
                            </div>
                            <div class="form-group two-fields">
                                <label>Giới tính</label><em class="required">*</em>
                                <select class="form-control" name="gender" required>
                                    <option value="1" <?= $_SESSION['user']['gender'] == 1 ? 'selected' : '' ?>>Nam</option>
                                    <option value="2" <?= $_SESSION['user']['gender'] == 2 ? 'selected' : '' ?>>Nữ</option>
                                </select>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <hr>
                        <li>
                            <div class="form-group two-fields">
                                <label>Mật khẩu hiện tại</label><em class="required">*</em>
                                <input type="password" name="pass_old" value="" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Mật khẩu mới</label><em class="required">*</em>
                                <input type="password" id="pass_new1" name="pass_new1" value="" class="form-control" required>
                            </div>
                            <div class="form-group two-fields">
                                <label>Nhập lại mật khẩu mới</label><em class="required">*</em>
                                <input type="password" id="pass_new2" name="pass_new2" value="" class="form-control" required>
                            </div>
                        </li>
                    </ul>
                    <div class="divider"></div>
                    <div>
                        <button type="submit" class="but_pay_cart">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = 'Cập nhật Thông tin tài khoản | IVY moda';
</script>
<script>
    const formElement = document.querySelector('#frm_register');
    const errorAreaElement = document.querySelector('#error-area');
    const errorBlockElement = document.querySelector('#error-block');
    const password = document.querySelector('#pass_new1');
    const confirm_password = document.querySelector('#pass_new2');
    formElement.onsubmit = function(e) {
        e.preventDefault();
        var htmls = '';
        if (password.value !== confirm_password.value) {
            errorAreaElement.style.display = 'block';
            htmls += '<strong>Lỗi!</strong> Mật khẩu và nhập lại mật khẩu không giống nhau<br>';
        } else if (password.value.length < 6 || password.value.length > 32) {
            errorAreaElement.style.display = 'block';
            htmls += '<strong>Lỗi!</strong> Vui lòng nhập mật khẩu độ dài từ 6 tới 32 ký tự<br>';
        }
        if (htmls === '') {
            formElement.submit();
        } else {
            errorBlockElement.innerHTML = htmls;
        }
    }
</script>