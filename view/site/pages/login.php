<div id="login" class="row title_h3">
    <div class="container">
        <h3>Đăng nhập</h3>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <form name="frm_customer_account_email" enctype="application/x-www-form-urlencoded" method="post" action=""  autocomplete="off">
                <h4>Đăng nhập bằng tài khoản thường:</h4>
                    <p>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
                                        <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">Email(hoặc điện thoại) của bạn:</div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><input type="text" placeholder="Email của bạn..." name="customer_account" /></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">Mật khẩu:</div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><input type="password" placeholder="Mật khẩu của bạn..." name="customer_password" /></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-xs"></div>
                        <div class="col-md-4 col-sm-4 col-xs-12"><input type="checkbox" value="1" name="customer_remember" style="width: 15px; height: 17px; vertical-align: sub"> Ghi nhớ đăng nhập?</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 hidden-xs"></div>
                        <div class="col-md-8 col-sm-8 col-xs-12"><?php echo '<a href="' . SCRIPT_ROOT . '/customer/forgotpass">Quên mật khẩu?</a>'?></div>
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
                <?php echo '<a href="' . SCRIPT_ROOT . '/customer/register">Đăng ký</a>'?>
            </div>
        </div>
    </div>
</div>