<form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
    <div id="infouser" class="row title_h3">
        <div class="container">
            <h3>Thông tin cá nhân</h3>
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
                                <input type="text" value="<?= $_SESSION['user']['first_name'] ?>" name="first_name" class="form-control" placeholder="Họ">
                            </div>
                            <div class="form-group two-fields">
                                <label>Tên</label><em class="required">*</em>
                                <input type="text" value="<?= $_SESSION['user']['last_name'] ?>" name="last_name" class="form-control" placeholder="Tên">
                            </div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Địa chỉ Email</label><em class="required">*</em><em>(Tài khoản đăng nhập)</em><br>
                                <small>Email dùng để đăng nhập</small>
                                <input type="text" name="email" value="<?= $_SESSION['user']['email'] ?>" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group two-fields">
                                <label>Điện thoại</label><em class="required">*</em><br>
                                <small>Điện thoại để xác thực tài khoản của bạn</small>
                                <input type="text" disabled value="<?= $_SESSION['user']['phone'] ?>" name="phone" class="form-control" placeholder="Điện thoại">
                            </div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Ngày sinh</label><em class="required">*</em>
                                <input type="text" name="birthday" value="<?= date('d/m/Y', strtotime($_SESSION['user']['dob'])) ?>" class="form-control datepicker">
                            </div>
                            <div class="form-group two-fields">
                                <label>Giới tính</label><em class="required">*</em>
                                <select class="form-control" name="sex">
                                    <option value="0" <?= $_SESSION['user']['gender'] == 0 ? 'selected' : '' ?>>Nữ</option>
                                    <option value="1" <?= $_SESSION['user']['gender'] == 1 ? 'selected' : '' ?>>Nam</option>
                                </select>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <hr>
                        <li>
                            <div class="form-group two-fields">
                                <label>Mật khẩu hiện tại</label><em class="required">*</em>
                                <input type="password" name="pass_old" value="" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label>Mật khẩu mới</label><em class="required">*</em>
                                <input type="password" name="pass_new1" value="" class="form-control">
                            </div>
                            <div class="form-group two-fields">
                                <label>Nhập lại mật khẩu mới</label><em class="required">*</em>
                                <input type="password" name="pass_new2" value="" class="form-control">
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