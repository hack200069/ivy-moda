<form action="" id="frm_step2" name="frm_step2" enctype="application/x-www-form-urlencoded" method="post">
    <div class="row" style="padding-bottom: 30px">
    <div class="container">
        <div class="progress_new">
            <div class="pbarcart">
                <div class="text">Giỏ hàng</div>
                <div class="bar"></div>
                <div class="circle "><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            </div>
            <div class="pbarcart">
                <div class="text">Địa chỉ giao hàng</div>
                <div class="bar"></div>
                <div class="circle "><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            </div>
            <div class="pbarcart">
                <div class="text">Thanh toán</div>
                <div class="bar"></div>
                <div class="circle active"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
    <div id="pay_2" class="row title_h3 pay">
    <div class="container">
        <!--<h3>Tiến hành thanh toán</h3>-->
                <div class="row">
            <div class="col-md-5 col-sm-5 pull-right col-xs-12">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <p class="" id="p_coupon" style="padding-top: 5px; display: none; text-align: center"></p>

                        <div class="panel-body"  style="padding: 10px">
                            <input type="text" name="coupon_code_text" class="col-md-4" placeholder="Mã giảm giá / Quà tặng" id="coupon_code_text" value="">
                            <button type="button" id="but_coupon_code"><i class="fa fa-check" aria-hidden="true"></i></button>
                            <button type="button" id="but_coupon_delete" style="display:none">Xóa</button>
                        </div>
                        <div class="panel-body" style="padding: 10px">
                            <input type="text" class="col-md-4" name="order_ctv" placeholder="Mã cộng tác viên" id="order_ctv"  value="">
                            <button type="button" id="but_order_ctv"><i class="fa fa-check" aria-hidden="true"></i></button>
                            <button type="button" id="but_order_ctv_delete" style="display:none">Xóa</button>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!--<select  data-type="order_cuahang" name="order_cuahang" id="order_cuahang"class="col-md-5 sol-sm-5 form-control" style="overflow: hidden; border-radius: 0">-->
                                    <!--<option value="">Chọn cửa hàng giao hàng (Mặc định: Online giao hàng)</option>-->
                                    <!---->
                                    <!---->
                                    <!--<option value="" > - </option>-->
                                    <!---->
                                    <!--<option value="D32" >3 tháng 2 - 147 - 149 Đường 3 tháng 2, phường 11, quận 10, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="AG1" >An Giang - L1 – 04 +05A Vincom Long Xuyên, 1242 Trần Hưng Đạo, P. Mỹ Bình, Tp. Long Xuyên, Long Xuyên, An Giang</option>-->
                                    <!---->
                                    <!--<option value="BT1" >Bà Triệu - 34 Bà Triệu, Hoàn Kiếm, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="BG1" >Bắc Giang - 52 - 54 - 56 Đường Hoàng Văn Thụ, Phường Hoàng Văn Thụ, Bắc Giang</option>-->
                                    <!---->
                                    <!--<option value="BN1" >Bắc Ninh - 352 Đường Ngô Gia Tự, P.Tiền An, Bắc Ninh</option>-->
                                    <!---->
                                    <!--<option value="BI1" >Biên Hòa - (BI1) Tầng L2-10-11, Vincom Plaza Biên Hòa, 1096, Phạm Văn Thuận, P. Tân Mai, Thành phố Biên Hòa, T. Đồng Nai</option>-->
                                    <!---->
                                    <!--<option value="BI3" >Biên Hòa 3 - (BI3) 46 Võ Thị Sáu, Khu phố 7, Phường. Thống Nhất, TP. Biên Hòa, Đồng Nai</option>-->
                                    <!---->
                                    <!--<option value="BD1" >Bình Dương 1 - 315 Đại lộ Bình Dương, Ph. Chánh Nghĩa,  TP. Thủ Dầu 1, Bình Dương</option>-->
                                    <!---->
                                    <!--<option value="BP1" >Bình Phước - 1083 Phú Riềng Đỏ, P. Tân Thiện, Đồng Xoài, Bình Phước</option>-->
                                    <!---->
                                    <!--<option value="MT2" >Buôn Ma Thuột  - 26-28-30 Phan Chu Trinh - P.Thắng Lợi - TP Buôn Ma Thuột - Đắk Lắk</option>-->
                                    <!---->
                                    <!--<option value="CM1" >Cà Mau - Số 20 Trần Hưng Đạo, Phường 5, TP. Cà Mau</option>-->
                                    <!---->
                                    <!--<option value="CM8" >Cách Mạng Tháng 8 - 44 - 46 Cách Mạng Tháng Tám, Phường 6, Quận 3, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="CT1" >Cần Thơ - 126 Đường 30 Tháng 4, Hưng Lợi, Ninh Kiều, Cần Thơ</option>-->
                                    <!---->
                                    <!--<option value="CT2" >Cần Thơ 2 - 54C1 Đường 3 tháng 2, Phường. Xuân Khánh, Quận. Ninh Kiều, Cần Thơ</option>-->
                                    <!---->
                                    <!--<option value="CG1" >Cầu Giấy - 243 Cầu Giấy, Cầu Giấy, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="DN2" >DBP - Đà Nẵng - 164 Điện Biên Phủ, Q. Thanh Khê, Đà Nẵng</option>-->
                                    <!---->
                                    <!--<option value="DN1" >Đà Nẵng - 180 - 182 Nguyễn Văn Linh, Thanh Khê, Đà Nẵng</option>-->
                                    <!---->
                                    <!--<option value="DN3" >Đà Nẵng 3 - L3 - 07 Tầng 3, TTTM Vincom Đà Nẵng, 910A Ngô Quyền, An Hải Bắc, Sơn Trà, Đà Nẵng</option>-->
                                    <!---->
                                    <!--<option value="DB1" >Điện Biên - 707 Võ Nguyên Giáp, T8, P. Tân Thanh, TP. Điện Biên</option>-->
                                    <!---->
                                    <!--<option value="DT1" >Đồng Tháp - L1 - 09 Vincom Cao Lãnh, 30/4 Phường 1, TP.Cao Lãnh, Đồng Tháp</option>-->
                                    <!---->
                                    <!--<option value="HT1" >Hà Tĩnh - 27 Phan Đình Phùng, P. Bắc Hà, TP. Hà Tĩnh</option>-->
                                    <!---->
                                    <!--<option value="HD1" >Hải Dương - 34 Trần Hưng Đạo, TP. Hải Dương</option>-->
                                    <!---->
                                    <!--<option value="HP2" >Hải Phòng - IVY moda 40 Điện Biên Phủ, Hồng Bàng, Hải Phòng</option>-->
                                    <!---->
                                    <!--<option value="AE3" >Hải Phòng - T2-60, TTTM Aeon Lê Chân Hải Phòng, Số 10 Đường Võ Nguyên Giáp, P. Kênh Dương, Q. Lê Chân, TP. Hải Phòng</option>-->
                                    <!---->
                                    <!--<option value="HP1" >Hải Phòng - 66 Lạch Tray, P. Lạch Tray, Q. Ngô Quyền, TP. Hải Phòng</option>-->
                                    <!---->
                                    <!--<option value="HP3" >Hải Phòng 3 - 63a Trần Nguyên Hãn , Lê Chân, Hải Phòng</option>-->
                                    <!---->
                                    <!--<option value="HTM" >Hồ Tùng Mậu - 248 - 250 Hồ Tùng Mậu, Phường Phú Diễn, Quận Bắc Từ Liêm, Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="HQV" >Hoàng Quốc Việt - 391 Hoàng Quốc Việt, Cầu Giấy, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="HA1" >Hội An - 177 Lý Thường Kiệt, P. Cẩm Phô, TP Hội An, Quảng Nam</option>-->
                                    <!---->
                                    <!--<option value="KP1" >K-PARK Hà Đông - SH 28,29, Tòa nhà The K-Park, KĐT mới Văn Phú, Đường Lê Trọng Tấn, phường Phú La, Quận Hà  Đông, Tp. Hà Nội.</option>-->
                                    <!---->
                                    <!--<option value="KG1" >Kiên Giang - 338 - 340 Nguyễn Trung Trực, P. Vĩnh Lạc, TP. Rạch Giá, Kiên Giang</option>-->
                                    <!---->
                                    <!--<option value="KD1" >Kim Đồng - 31 Kim Đồng Mới, Hoàng Mai, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="LLQ" >Lạc Long Quân - 5/447 Lạc Long Quân, Tây Hồ, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="LS1" >Lạng Sơn - 75 Trần Đăng Ninh, P. Tam Thanh, TP. Lạng Sơn</option>-->
                                    <!---->
                                    <!--<option value="LC1" >Lào Cai - 213 Hoàng Liên, Phường Cốc Lếu , Thành phố Lào Cai, Lào Cai</option>-->
                                    <!---->
                                    <!--<option value="LVL" >Lê Văn lương - Tầng 1,2 - tòa nhà The Golden Palm, 21 Lê Văn Lương</option>-->
                                    <!---->
                                    <!--<option value="LVV" >Lê Văn Việt - TTTM Vincom Plaza, 50 Lê Văn Việt, Phường Hiệp Phú, Quận 9, Da Kao, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="BLD" >Linh Đàm - Ô 18 BT 2 Linh Đàm, phường Hoàng Liệt, quận Hoàng Mai, Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="LBB" >Lũy Bán Bích - 718 - 718A Lũy Bán Bích, Q. Tân Phú, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="ND1" >Nam Định - 114 - 116 Trần Hưng Đạo, Nam Định, Nam Định</option>-->
                                    <!---->
                                    <!--<option value="NCT" >Nguyễn Chí Thanh - Tầng 3 - L3 - 01, TTTM Vincom Nguyễn Chí Thanh</option>-->
                                    <!---->
                                    <!--<option value="NTT" >Nguyễn Thị Thập - 436A Nguyễn Thị Thập, p. Tân Quy, Quận 7, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="NT1" >Nha Trang - 156 - 158 Thống Nhất, P. Phương Sài, TP Nha Trang, Khánh Hòa</option>-->
                                    <!---->
                                    <!--<option value="NT2" >Nha Trang - 46 - 48 Lý Thánh Tôn, P. Phương Sài, TP. Nha Trang, Khánh Hòa</option>-->
                                    <!---->
                                    <!--<option value="NB1" >Ninh Bình - Số 7 đường Lê Hồng Phong, Phường Vân Giang, TP Ninh Bình, Tỉnh Ninh Bình</option>-->
                                    <!---->
                                    <!--<option value="BTL" >Phạm Văn Đồng - TTTM Vincom - 234 Phạm Văn Đồng, Bắc Từ Liêm, - B1-29+30 TTTM Vincom Bắc Từ Liêm</option>-->
                                    <!---->
                                    <!--<option value="PDL" >Phan Đăng Lưu - 172A Phan Đăng Lưu, Phường 03, Quận Phú Nhuận, TP. HCM</option>-->
                                    <!---->
                                    <!--<option value="PY1" >Phú Yên - L1 06 - 08 Tầng 1, TTTM Vincom Plaza Tuy Hòa, Đường Hùng Vương, Phường 7, Thành Phố Tuy Hòa, Tỉnh Phú Yên</option>-->
                                    <!---->
                                    <!--<option value="PLK" >Pleiku - 199 - 201 Hùng Vương, Phường Hội Thương, TP Pleiku, tỉnh Gia Lai, Việt Nam </option>-->
                                    <!---->
                                    <!--<option value="QG1" >Quảng Ngãi - số 35 Hùng Vương, Phường Trần Hưng Đạo, TP Quảng Ngãi, Quảng Ngãi </option>-->
                                    <!---->
                                    <!--<option value="QN2" >Quảng Ninh - SH18 Trần Hưng Đạo Plaza, TP Hạ Long, Quảng Ninh</option>-->
                                    <!---->
                                    <!--<option value="QT2" >Quang Trung 2 - 50 Quang Trung P10 Quận Gò Vấp, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="QY1" >Quy Nhơn - 455 - 457 Trần Hưng Đạo, TP. Quy Nhơn, Tỉnh Bình Định</option>-->
                                    <!---->
                                    <!--<option value="RY1" >Royal City - B2-R6-09+10 TTTM Vincom Royal City, 72A Nguyễn Trãi, Thanh Xuân</option>-->
                                    <!---->
                                    <!--<option value="SVC" >Savico - Tầng 1, 7 - 9 Savico Mall Long Biên, 7-9 Nguyễn Văn Linh, Long Biên, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="VIV" >SC Vivo City - Tầng 2 (Lầu 2) TTTM SC Vivo City - 1058 Nguyễn Văn Linh - P Tân Phong - Quận 7 - TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="ST1" >Sóc Trăng - 189 Hùng Vương phường 6 TP Sóc Trăng </option>-->
                                    <!---->
                                    <!--<option value="SO1" >Sơn La - 97 Trường Chinh, P. Quyết Thắng, TP. Sơn La</option>-->
                                    <!---->
                                    <!--<option value="STA" >Sơn Tây - 474 Chùa Thông, Sơn Lộc, Tx. Sơn Tây.</option>-->
                                    <!---->
                                    <!--<option value="TNI" >Tây Ninh - 724 Cách Mạng Tháng Tám, Phường 3, Thành Phố Tây Ninh, Tỉnh Tây Ninh, Tây Ninh</option>-->
                                    <!---->
                                    <!--<option value="TB2" >Thái Bình 2 - 404 Lý Bôn (gần bến xe Thái Bình),P.Trần Hưng Đạo,TP.Thái Bình, Thái Bình</option>-->
                                    <!---->
                                    <!--<option value="TH2" >Thái Hà 2 - 47 Thái Hà, Đống Đa, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="TN1" >Thái Nguyên - 319 Hoàng Văn Thụ, P. Đồng Quang, TP. Thái Nguyên</option>-->
                                    <!---->
                                    <!--<option value="HO1" >Thanh Hóa - 36 Quang Trung P. Ngọc Trạo, Thành phố Thanh Hóa, Thanh Hoá.</option>-->
                                    <!---->
                                    <!--<option value="HO2" >Thanh Hóa - Lô A28-A29 Vincom Shophouse  Thanh Hóa, Đường Lê Hoàn, Phường Điện Biên, TP Thanh Hóa.</option>-->
                                    <!---->
                                    <!--<option value="VVN" >Thủ Đức - 222 Võ Văn Ngân, Phường Bình Thọ, TP. Thủ Đức, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="TC1" >Time City - TD-42 & TN-39, TTTM Vincom Times City   458 Minh Khai, Hai Bà Trưng, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="TV1" >Trà Vinh - L1-04+05 TTTM Vincom Trà Vinh, Khóm 2, Phường 2, TP. Trà Vinh, Trà Vinh</option>-->
                                    <!---->
                                    <!--<option value="TP1" >Trần Phú - 143 Trần Phú, Hà Đông, TP. Hà Nội</option>-->
                                    <!---->
                                    <!--<option value="TQ1" >Tuyên Quang - 225 đường Quang Trung , phường Tân Quang , TP. Tuyên Quang ( Ngã Tư đèn xanh đèn đỏ - DỐC DƯỢC )</option>-->
                                    <!---->
                                    <!--<option value="VI1" >Vinh - 147 Lê Lợi , phường Lê Lợi , Tthành phố Vinh , tỉnh Nghệ An</option>-->
                                    <!---->
                                    <!--<option value="VY1" >Vĩnh Yên - 189 Mê Linh, P. Liên Bảo, TP. Vĩnh Yên, Vĩnh Phúc</option>-->
                                    <!---->
                                    <!--<option value="VTS" >Võ Thị Sáu - 142 Võ Thị Sáu, Quận 3, TP.HCM</option>-->
                                    <!---->
                                    <!--<option value="VT1" >Vũng Tàu - 244 Đường Ba Cu, Phường 3, TP. Vũng Tàu </option>-->
                                    <!---->
                                    <!--<option value="YB1" >Yên Bái - 642 Điện Biên (Km3), TP. Yên Bái</option>-->
                                    <!---->
                                    <!---->
                                <!--</select>-->
                                <!--<select   data-type="account_code_add" name="order_account_code" id="order_account_code"class="col-md-5 sol-sm-5 form-control pull-right" style="margin-top: 10px; border-radius: 0">-->
                                <select data-type="account_code_add" name="order_account_code" id="order_account_code"class="col-md-5 sol-sm-5 form-control pull-right" style="margin-top: 10px; border-radius: 0">
                                    <option value="">Chọn mã nhân viên thân thiết</option>
                                                                                                                                                <option value="b139">b139</option>
                                                                                                                                                <option value="g512">g512</option>
                                                                                                                                                <option value="d020">d020</option>
                                                                                                                                                <option value="p470">p470</option>
                                                                                                                                                <option value="t260">t260</option>
                                                                                                                                                <option value="bt03">bt03</option>
                                                                                                                                                <option value="kn75">kn75</option>
                                                                                                                                                <option value="m969">m969</option>
                                                                                                                                                <option value="l581">l581</option>
                                                                                                                                                <option value="c094">c094</option>
                                                                                                                                                <option value="s010">s010</option>
                                                                                                                                                <option value="k801">k801</option>
                                                                                                                                                <option value="q684">q684</option>
                                                                                                                                                <option value="l581">l581</option>
                                                                                                                                                <option value="s010">s010</option>
                                                                                                                                                <option value="tr42">tr42</option>
                                                                                                                                                <option value="v873">v873</option>
                                                                                                                                                <option value="lt41">lt41</option>
                                                                                                                                                <option value="tt95">tt95</option>
                                                                                                                                                <option value="hn95">hn95</option>
                                                                                                                                                <option value="mt67">mt67</option>
                                                                                                                                                <option value="nt65">nt65</option>
                                                                                                                                                <option value="la67">la67</option>
                                                                                                                                                <option value="z103">z103</option>
                                                                                                                                                <option value="ng99">ng99</option>
                                                                                                                                                <option value="s0581">s0581</option>
                                                                                                                                                <option value="i975">i975</option>
                                                                                                                                                <option value="du97">du97</option>
                                                                                                                                                <option value="th99">th99</option>
                                                                                                                                                <option value="lo56">lo56</option>
                                                                                                                                                <option value="ht56">ht56</option>
                                                                                                                                                <option value="hy82">hy82</option>
                                                                                                                                                <option value="pa95">pa95</option>
                                                                                                                                                <option value="ta97">ta97</option>
                                                                                                                                                <option value="t10">t10</option>
                                                                                                                                                <option value="qu47">qu47</option>
                                                                                                                                                <option value="ty86">ty86</option>
                                                                                                                                                <option value="tr89">tr89</option>
                                                                                                                                                <option value="ta05">ta05</option>
                                                                                                                                                <option value="pl28">pl28</option>
                                                                                                                                                <option value="hn95">hn95</option>
                                                                                                                                                <option value="va55">va55</option>
                                                                                                                                                <option value="a817">a817</option>
                                                                                                                                                <option value="q321">q321</option>
                                                                                                                                                <option value="r600">r600</option>
                                                                                                                                                <option value="k719">k719</option>
                                                                                                                                                <option value="o775">o775</option>
                                                                                                                                                <option value="g316">g316</option>
                                                                                                                                                <option value="b269">b269</option>
                                                                                                                                                <option value="g667">g667</option>
                                                                                                                                                <option value="o464">o464</option>
                                                                                                                                                <option value="b874">b874</option>
                                                                                                                                                <option value="a284">a284</option>
                                                                                                                                                <option value="p390">p390</option>
                                                                                                                                                <option value="q410">q410</option>
                                                                                                                                                <option value="s419">s419</option>
                                                                                                                                                <option value="j469">j469</option>
                                                                                                                                                <option value="m414">m414</option>
                                                                                                                                                <option value="p439">p439</option>
                                                                                                                                                <option value="j879">j879</option>
                                                                                                                                                <option value="b648">b648</option>
                                                                                                                                                <option value="l565">l565</option>
                                                                                                                                                <option value="f374">f374</option>
                                                                                                                                                <option value="l676">l676</option>
                                                                                                                                                <option value="n647">n647</option>
                                                                                                                                                <option value="j666">j666</option>
                                                                                                                                                <option value="c742">c742</option>
                                                                                                                                                <option value="s337">s337</option>
                                                                                                                                                <option value="u289">u289</option>
                                                                                                                                                <option value="u543">u543</option>
                                                                                                                                                <option value="a667">a667</option>
                                                                                                                                                <option value="g386">g386</option>
                                                                                                                                                <option value="p802">p802</option>
                                                                                                                                                <option value="t720">t720</option>
                                                                                                                                                <option value="r674">r674</option>
                                                                                                                                                <option value="j648">j648</option>
                                                                                                                                                <option value="o609">o609</option>
                                                                                                                                                <option value="u323">u323</option>
                                                                                                                                                <option value="d587">d587</option>
                                                                                                                                                <option value="c248">c248</option>
                                                                                                                                                <option value="n235">n235</option>
                                                                                                                                                <option value="u578">u578</option>
                                                                                                                                                <option value="s232">s232</option>
                                                                                                                                                <option value="c413">c413</option>
                                                                                                                                                <option value="f206">f206</option>
                                                                                                                                                <option value="m608">m608</option>
                                                                                                                                                <option value="n836">n836</option>
                                                                                                                                                <option value="b265">b265</option>
                                                                                                                                                <option value="h347">h347</option>
                                                                                                                                                <option value="n238">n238</option>
                                                                                                                                                <option value="f821">f821</option>
                                                                                                                                                <option value="r330">r330</option>
                                                                                                                                                <option value="o483">o483</option>
                                                                                                                                                <option value="q695">q695</option>
                                                                                                                                                <option value="k712">k712</option>
                                                                                                                                                <option value="c434">c434</option>
                                                                                                                                                <option value="u437">u437</option>
                                                                                                                                                <option value="s402">s402</option>
                                                                                                                                                <option value="a336">a336</option>
                                                                                                                                                <option value="o401">o401</option>
                                                                                                                                                <option value="u737">u737</option>
                                                                                                                                                <option value="m585">m585</option>
                                                                                                                                                <option value="n216">n216</option>
                                                                                                                                                <option value="f757">f757</option>
                                                                                                                                                <option value="i505">i505</option>
                                                                                                                                                <option value="p368">p368</option>
                                                                                                                                                <option value="c880">c880</option>
                                                                                                                                                <option value="m625">m625</option>
                                                                                                                                                <option value="b268">b268</option>
                                                                                                                                                <option value="u278">u278</option>
                                                                                                                                                <option value="d750">d750</option>
                                                                                                                                                <option value="j532">j532</option>
                                                                                                                                                <option value="o551">o551</option>
                                                                                                                                                <option value="d839">d839</option>
                                                                                                                                                <option value="l351">l351</option>
                                                                                                                                                <option value="n302">n302</option>
                                                                                                                                                <option value="a479">a479</option>
                                                                                                                                                <option value="u475">u475</option>
                                                                                                                                                <option value="a210">a210</option>
                                                                                                                                                <option value="q460">q460</option>
                                                                                                                                                <option value="r576">r576</option>
                                                                                                                                                <option value="d412">d412</option>
                                                                                                                                                <option value="g852">g852</option>
                                                                                                                                                <option value="p833">p833</option>
                                                                                                                                                <option value="r667">r667</option>
                                                                                                                                                <option value="l474">l474</option>
                                                                                                                                                <option value="e700">e700</option>
                                                                                                                                                <option value="e542">e542</option>
                                                                                                                                                <option value="q578">q578</option>
                                                                                                                                                <option value="q488">q488</option>
                                                                                                                                                <option value="j280">j280</option>
                                                                                                                                                <option value="t816">t816</option>
                                                                                                                                                <option value="j834">j834</option>
                                                                                                                                                <option value="o277">o277</option>
                                                                                                                                                <option value="p818">p818</option>
                                                                                                                                                <option value="o777">o777</option>
                                                                                                                                                <option value="m559">m559</option>
                                                                                                                                                <option value="a367">a367</option>
                                                                                                                                                <option value="s737">s737</option>
                                                                                                                                                <option value="f251">f251</option>
                                                                                                                                                <option value="t278">t278</option>
                                                                                                                                                <option value="k583">k583</option>
                                                                                                                                            </select>
                            </div>
                        </div>
                    </div>
                                        <table width="100%">
                        <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th class="text-center">Giảm giá</th>
                            <th class="text-center">SL</th>
                            <th class="text-right">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody id="box_product_sub">
                        <tr>
    <td>
        <p>Áo sơ mi nam họa tiết MS 16E3107 </p>
        <p class="first_letter_upper">xxl / Đen </p>
        <p>16E3107 / <b>1.090.000<sup>đ</sup></b></p>
    </td>
    <td class="text-center">
    </td>
    <td class="text-center">1</td>
    <td class="text-right">1.090.000<sup>đ</sup></td>
</tr>

                        </tbody>
                        <tfoot id="box_product_total">
                                <tr>
        <td colspan="3">Tổng tiền hàng <b>(1.090.000<sup>đ</sup>)</b></td>
        <td class="text-right"></td>
    </tr>
        <tr>
        <td colspan="3">Tạm tính</td>
        <td class="text-right">1.090.000<sup>đ</sup></td>
    </tr>
            <tr>
        <td colspan="3">Giao hàng chuyển phát nhanh - Chuyển phát nhanh</td>
        <td class="text-right">0<sup>đ</sup></td>
    </tr>
                <tr>
        <td colspan="3" ><b>Tiền thanh toán</b></td>
        <td class="text-right" id="product_sub_total_end" data-total-end="1090000"><b>1.090.000<sup>đ</sup></b></td>
    </tr>
    
                        </tfoot>
                    </table>
                                    </div>
            </div>
            <div class="col-md-7 col-sm-7 pull-left col-xs-12">
                <h5>Phương thức giao hàng</h5>
                    <ul class="list-unstyled" id="box_shipping_method">
                                                                        <li>
                            <input id="shipping_method_1" type="radio" checked name="shipping_method" value="1" checked/> <label>Giao hàng chuyển phát nhanh </label>
                            <br><small>Chuyển hàng tới địa chỉ khách hàng.</small>
                        </li>
                                                                    </ul>
                    <h5>Phương thức thanh toán</h5>
                                        <p class="pay_text_ts">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                                        <ul class="list-unstyled" style="margin-bottom: 30px">
                        <!---->
                                                                                                <li style="clear: both; padding-bottom: 5px">
                                                                                    <input id="payment_method_9" disabled type="radio" name="payment_method" value="9" /> <label> Thanh toán bằng Ví IVY</label>
                            (chỉ còn 0 <sup>đ</sup>, <strong><a href="https://ivymoda.com/customer/wallet_add">click đây để nạp tiền vào Ví IVY)</a></strong>
                                                                                                                                        </li>
                                                                                                <li style="clear: both; padding-bottom: 5px">
                                                        <input id="payment_method_1" type="radio" name="payment_method" value="1" /> <label> Thanh toán bằng thẻ tín dụng(OnePay)</label>
                                                                                    <div>
                                <img src="https://pubcdn.ivymoda.com/images/1.png" class="">
                                                            </div>
                                                                                </li>
                                                                                                <li style="clear: both; padding-bottom: 5px">
                                                        <input id="payment_method_2" type="radio" name="payment_method" value="2" /> <label> Thanh toán bằng thẻ ATM(OnePay)</label>
                                                                                    <div>
                                <img src="https://pubcdn.ivymoda.com/images/2.png" class="">
                                                                Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam.
                                                            </div>
                                                                                </li>
                                                                                                <li style="clear: both; padding-bottom: 5px">
                                                        <input id="payment_method_5" type="radio" name="payment_method" value="5" /> <label> Thanh toán Momo</label>
                                                                                    <div>
                                <img src="https://pubcdn.ivymoda.com/images/5.png" class="">
                                                            </div>
                                                                                </li>
                                                                                                                                                <li style="clear: both; padding-bottom: 5px">
                                                        <input id="payment_method_3" type="radio" name="payment_method" value="3" checked/> <label> Thu tiền tận nơi</label>
                                                                                                            </li>
                                                                                            </ul>
                    <div id="box_div_order">
                    
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 box-order-complete">
                            <a id="but-cancel-step1" href="https://ivymoda.com/thanhtoan/dathang_step1" class="">&#60;&#60; Quay lại</a>
                            <div class="pull-right">
                                <button type="button" class="pull-right but-complete" id="but_step2">
                                                                        Hoàn thành
                                                                    </button>
                                <!--<input type="submit" name="but-tach-don" value="Xử lý" class="but-common-white but-tach-don" style="padding: 8px 20px; margin-top: 15px;"/>&nbsp;-->
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
</form>
<script>
    document.title = "Đặt hàng Bước 2 | IVY moda";
</script>