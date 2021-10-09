<div id="login" class="row title_h3">
    <div class="container">
        <h3>Đăng nhập</h3>
        <?php
        if (isset($_SESSION['register_success'])) {
            echo '<div class="alert alert-success alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Đăng ký thành công!</strong> Bạn vui lòng nhập tài khoản và mật khẩu để đăng nhập<br>
            </div>';
            unset($_SESSION['register_success']);
        } else if (isset($_SESSION['login_error']['email']) || isset($_SESSION['login_error']['password']) || isset($_SESSION['login_error']['sthg_wrong'])) {
            echo '<div class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>';
            if (isset($_SESSION['login_error']['email'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['login_error']['email'] . '<br>';
                unset($_SESSION['login_error']['email']);
            }
            if (isset($_SESSION['login_error']['password'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['login_error']['password'] . '<br>';
                unset($_SESSION['login_error']['password']);
            }
            if (isset($_SESSION['login_error']['sthg_wrong'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['login_error']['sthg_wrong'] . '<br>';
                unset($_SESSION['login_error']['sthg_wrong']);
            }
            unset($_SESSION['login_error']);
            echo '</div>';
        }
        ?>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form name="frm_customer_account_email" method="post" action="" autocomplete="off">
                    <h4>Đăng nhập bằng tài khoản thường:</h4>
                    <p>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">Email(hoặc điện thoại) của bạn:</div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><input type="text" placeholder="Email của bạn..." name="email" required/></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">Mật khẩu:</div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><input type="password" placeholder="Mật khẩu của bạn..." name="password" value="" required /></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-xs"></div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><button type="submit" id="but_login_email" name="but_login_email">Đăng nhập</button></div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h4>Khách hàng mới của IVY moda</h4>
                <p>Nếu bạn chưa có tài khoản trên ivymoda.com, hãy sử dụng tùy chọn này để truy cập biểu mẫu đăng ký.</p>
                <p>Bằng cách cung cấp cho IVY moda thông tin chi tiết của bạn, quá trình mua hàng trên ivymoda.com sẽ là một
                    trải nghiệm thú vị và nhanh chóng hơn!</p>
                <br />
                <?php echo '<a href="' . SCRIPT_ROOT . '/customer/register">Đăng ký</a>' ?>
            </div>
        </div>
    </div>
</div>
<script>
    document.title = "Đăng nhập | IVY moda";
</script>