<div id="register" class="row title_h3">
    <div class="container">
        <h3>Đăng ký</h3>
        <div class="row">
            <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Thông tin khách hàng</h4>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Họ:<span>*</span></b></p>
                            <input type="text" value="" name="customer_firstname" placeholder="Họ..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Tên:<span>*</span></b></p>
                            <input type="text" value="" name="customer_display_name" placeholder="Tên..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Email:<span>*</span></b></p>
                            <input type="email" name="customer_email" value="" placeholder="Email..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Điện thoại:<span>*</span></b></p>
                            <input type="text" value="" name="customer_phone" placeholder="Điện thoại..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Ngày sinh:<span>*</span></b></p>
                            <input type="text" class="datepicker" name="customer_birthday" value="" placeholder="Ngày sinh..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Giới tính:<span>*</span></b></p>
                            <select name="customer_sex">
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Tỉnh/TP:<span>*</span></b></p>
                            <select name="register_region_id" id="register_region_id">
                                <option value="-1">Chọn Tỉnh/Tp</option>
                                <option value="511">Hà Nội</option>
                                <option value="507">Hồ Chí Minh</option>
                                <option value="512">Hải Phòng</option>
                                <option value="499">Đà Nẵng</option>
                                <option value="485">An Giang</option>
                                <option value="486">Bình Dương</option>
                                <option value="487">Bắc Giang</option>
                                <option value="488">Bình Định</option>
                                <option value="489">Bắc Cạn</option>
                                <option value="490">Bạc Liêu</option>
                                <option value="491">Bắc Ninh</option>
                                <option value="492">Bình Phước</option>
                                <option value="493">Bà Rịa Vũng Tàu</option>
                                <option value="494">Bình Thuận</option>
                                <option value="495">Bến Tre</option>
                                <option value="496">Cao Bằng</option>
                                <option value="497">Cà Mau</option>
                                <option value="498">Cần Thơ</option>
                                <option value="500">Điện Biên</option>
                                <option value="501">Đắc Lắc</option>
                                <option value="502">Đồng Nai</option>
                                <option value="503">Đắc Nông</option>
                                <option value="504">Đồng Tháp</option>
                                <option value="505">Gia Lai</option>
                                <option value="506">Hòa Bình</option>
                                <option value="508">Hải Dương</option>
                                <option value="509">Hà Giang</option>
                                <option value="510">Hà Nam</option>
                                <option value="513">Hà Tĩnh</option>
                                <option value="514">Hậu Giang</option>
                                <option value="515">Hưng Yên</option>
                                <option value="516">Kiên Giang</option>
                                <option value="517">Khánh Hòa</option>
                                <option value="518">Kon Tum</option>
                                <option value="519">Long An</option>
                                <option value="520">Lâm Đồng</option>
                                <option value="521">Lai Châu</option>
                                <option value="522">Lào Cai</option>
                                <option value="523">Lạng Sơn</option>
                                <option value="524">Nghệ An</option>
                                <option value="525">Ninh Bình</option>
                                <option value="526">Nam Định</option>
                                <option value="527">Ninh Thuận</option>
                                <option value="528">Phú Thọ</option>
                                <option value="529">Phú Yên</option>
                                <option value="530">Quảng Bình</option>
                                <option value="531">Quảng Ngãi</option>
                                <option value="532">Quảng Nam</option>
                                <option value="533">Quảng Ninh</option>
                                <option value="534">Quảng Trị</option>
                                <option value="535">Sơn La</option>
                                <option value="536">Sóc Trăng</option>
                                <option value="537">Thái Bình</option>
                                <option value="538">Tiền Giang</option>
                                <option value="539">Thanh Hóa</option>
                                <option value="540">Tây Ninh</option>
                                <option value="541">Tuyên Quang</option>
                                <option value="542">Huế</option>
                                <option value="543">Trà Vinh</option>
                                <option value="544">Thái Nguyên</option>
                                <option value="545">Vĩnh Long</option>
                                <option value="546">Vĩnh Phúc</option>
                                <option value="547">Yên Bái</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Quận/Huyện:<span>*</span></b></p>
                            <select name="register_city_id" id="register_city_id">
                                <option value="-1">Chọn Quận/Huyện</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Phường/Xã:<span>*</span></b></p>
                            <select name="vnward_id" id="vnward_id">
                                <option value="-1">Chọn Phường/Xã</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Địa chỉ:<span>*</span></b></p>
                            <textarea name="address"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Thông tin mật khẩu</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Mật khẩu:<span>*</span></b></p>
                            <input type="password" value="" name="customer_pass1" placeholder="Mật khẩu..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Nhập lại mật khẩu:<span>*</span></b></p>
                            <input type="password" value="" name="customer_pass2" placeholder="Nhập lại mật khẩu..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Mời nhập các ký tự trong hình vào ô sau:<span>*</span></b></p>
                            <input type="text" name="captcha" required />
                            <p class="img_capcha"><img src="https://ivymoda.com/ajax/captcha" border="0" class="img-responsive" /></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="checkbox" id="checkboxRegister_1" name="customer_agree" value="1" style="width: 15px; height: 17px; vertical-align: sub" /> Tôi đồng ý với các <a href="https://ivymoda.com/about/chinh-sach-bao-hanh" target="_blank">điều khoản của Ivy</a><em class="required">*</em></label>
                            <p><input type="checkbox" id="checkboxRegister_2" value="1" name="customer_subscribe" style="width: 15px; height: 17px; vertical-align: sub" /> Đăng ký nhận bản tin</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="submit">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.title = "Đăng ký tài khoản  | IVY moda";
</script>