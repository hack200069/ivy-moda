<script src="https://pubcdn.ivymoda.com/js/qrcode.js" type="text/javascript"></script>
<script src="https://pubcdn.ivymoda.com/js/jquery-barcode.js" type="text/javascript"></script>
<meta notranslate name="robots" content="noindex,follow" />
<div id="product_detail" class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--demo4-->
                <div class="box cf">
                    <div class="left">
                        <span class="demowrap">
                            <img id="demo4" src="<?= SCRIPT_ROOT.$images[0]['link'] ?>" />
                        </span>

                        <ul id="demo4carousel" class="elastislide-list">
                            <?php
                                foreach($images as $img){
                                    echo '<li><a href="javascript:void(0)"><img src="'.SCRIPT_ROOT.$img['link'].'" data-largeimg="'.SCRIPT_ROOT.$img['link'].'" /></a></li>';
                                }
                            ?>
                        </ul>

                    </div>
                    <div class="right">
                        <h1 class="cat_h1"><?= $current_product['name'] ?></h1>
                        <p class="ID_productDetail">MSP: <?= substr($current_product['name'], strrpos($current_product['name']," ")) ?></p>
                        <p class="price_productDetail">
                            <span class="price_productDetail_main"><small id="display_price_org"><?= number_format($current_product['price']); ?></small><sup>đ</sup></span>
                            <br><span class="price_coupon_display"></span>
                        </p>
                        <form name="frm_product_sub" id="frm_product_sub" enctype="application/x-www-form-urlencoded" action="https://ivymoda.com/thanhtoan/giohang" method="post">
                            <p class="value_poductDetail">
                                <span>Số lượng: </span><input name="product_sub_quantity" type="text" value="1" size="1" />
                            </p>
                            <p class="hiddents_poductDetail">
                                <span class="vuilongchon"></span></span>
                            </p>
                            <p class="button_poductDetail">
                                <button style="display:none" type="button" id="but_choose_product_clear" class="" data-product-sub-id="" data-product-sub-status=""><i class="fa fa-shopping-basket" aria-hidden="true"></i> Hết hàng</button>
                                <button style="display:block" type="button" id="but_choose_product" class="" data-product-sub-id="" data-product-sub-status=""><i class="fa fa-shopping-basket" aria-hidden="true"></i> Mua hàng</button>
                            </p>
                            <input type="hidden" name="hid_link_sp" id="hid_link_sp" value="https://ivymoda.com/sanpham/quan-lung-vai-phoi-soi-tencel-ms-21e3001-29419">
                            <input type="hidden" value="" name="hid_product_sub_id" id="hid_product_sub_id">
                            <input type="hidden" value="21E3001" name="hid_product_key" id="hid_product_key">
                            <input type="hidden" value="" name="hid_size_text" id="hid_size_text">
                            <input type="hidden" value="" name="hid_color_text" id="hid_color_text">
                        </form>

                        <ul class="list-inline phone_chat_mail">
                            <li class="dropdown">
                                <a class="dropdown-toggle" type="button" data-toggle="dropdown" href="#"><i class="fa fa-phone" aria-hidden="true"></i> Hotline</a>
                                <ul class="dropdown-menu">
                                    <li><a href="tel:02466623434">024 6662 3434</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;" class="chat_fb"><i class="fa fa-comments-o fa-lg" aria-hidden="true"></i> Chat</a></li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal_mail">Mail</a>
                                <!-- sModal -->
                                <div id="myModal_mail" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Đặt hàng qua mail</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form id="frm_cart_mail" enctype="application/x-www-form-urlencoded" name="frm_cart_mail" action="" method="post">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">&nbsp;</div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <p id="p_cart_mail"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Tên: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <input name="cart_name" id="cart_name" type="text" value="" placeholder="Tên của bạn..." required />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Email: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <input name="cart_email" id="cart_email" type="email" value="" placeholder="Email của bạn..." required />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Điện thoại: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <input name="cart_phone" id="cart_phone" type="text" value="" placeholder="Điện thoại của bạn..." required />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Chủ đề: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <input name="cart_subject" id="cart_subject" type="text" value="" class="col-md-12" placeholder="Nhập các mã sản phẩm muốn mua..." required />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Nội dung: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <textarea name="cart_message" id="cart_message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3 text-right">Mã bảo mật: <span class="required">*</span></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <input name="captcha" id="captcha" type="text" required value="" style="vertical-align: top" />
                                                            <img src="https://ivymoda.com/ajax/captcha" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-3"></div>
                                                        <div class="col-md-8 col-sm-8 col-xs-9">
                                                            <button type="button" name="but_cart_send" id="but_cart_send">Gửi</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <!-- qrcode, barcode -->
                        <div class="bar_QA">
                            <!-- data-toggle="modal" data-target="#img_1" -->
                            <span style="margin-right: 15px;" id="box_qrcode">
                                <img title="click để lấy mã qr code" id="myImg" src="https://pubcdn.ivymoda.com/images/qrcode2.png" alt="Mã qrcode cho sản phẩm 21E3001" width="50">
                            </span>
                            <div class="modal fade" id="img_1" role="dialog">
                                <div class="modal-dialog" style="width: 350px">
                                    <div class="modal-content">
                                        <div class="modal-body text-center">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <div id="qrcode"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                        </div>
                        <!-- end:qrcode, barcode -->

                        <hr />
                        <p class="productDetail_buttonShow">
                            <i class="fa fa-angle-down productDetail_buttonShow_btn" aria-hidden="true"></i>
                        </p>
                        <div class="col-md-12 chitietsp_hide" style="display: block">
                            <div class="row">
                                <!-- Nav tabs -->
                                <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bảo quản</a></li>
                                        <li role="presentation"><a type="button" data-toggle="modal" data-target="#myModal" href="#">Tham khảo size</a></li>
                                        <!--<li role="presentation"><a href="#tab_barcode" aria-controls="tab_barcode" role="tab" data-toggle="tab">Barcode</a></li>-->
                                    </ul>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Bảng tư vấn size</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-responsive table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <h5><b>SIZE ÁO</b></h5>
                                                                </td>
                                                                <td class="hidden-xs" rowspan="85" width="300px;"><img src="https://ivymoda.com/assets/files/news/2017/07/21/7862a565a9224a59871f26feca1864d0.png" width="300"></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">STT</td>
                                                                <td rowspan="2">Tên gọi</td>
                                                                <td colspan="5">SIZE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S</td>
                                                                <td>M</td>
                                                                <td>L</td>
                                                                <td>XL</td>
                                                                <td>XXL</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Cổ</td>
                                                                <td>36</td>
                                                                <td>38</td>
                                                                <td>40</td>
                                                                <td>42</td>
                                                                <td>44</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Vai</td>
                                                                <td>44</td>
                                                                <td>45</td>
                                                                <td>46</td>
                                                                <td>47</td>
                                                                <td>48</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Ngực</td>
                                                                <td>90</td>
                                                                <td>94</td>
                                                                <td>98</td>
                                                                <td>102</td>
                                                                <td>106</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Eo</td>
                                                                <td>88</td>
                                                                <td>92</td>
                                                                <td>96</td>
                                                                <td>100</td>
                                                                <td>104</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <h5><b>SIZE QUẦN</b></h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">STT</td>
                                                                <td rowspan="2">Tên gọi</td>
                                                                <td colspan="5">SIZE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S(29)</td>
                                                                <td>M(30)</td>
                                                                <td>L(31)</td>
                                                                <td>XL(32)</td>
                                                                <td>XXL(33)</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Vòng Eo</td>
                                                                <td>76</td>
                                                                <td>80</td>
                                                                <td>84</td>
                                                                <td>86</td>
                                                                <td>90</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Vòng Mông</td>
                                                                <td>91</td>
                                                                <td>95</td>
                                                                <td>99</td>
                                                                <td>104</td>
                                                                <td>109</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Cân nặng (kg)</td>
                                                                <td>62 - 68</td>
                                                                <td>68 - 70</td>
                                                                <td>70 - 74</td>
                                                                <td>74 - 78</td>
                                                                <td>78 - 82</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Chiều Cao (cm)</td>
                                                                <td>162 - 168</td>
                                                                <td>168 - 172</td>
                                                                <td>172 - 176</td>
                                                                <td>176 - 180</td>
                                                                <td>180 - 184</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table table-responsive table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <h5><b>SIZE GIÀY DÉP</b></h5>
                                                                </td>
                                                                <td class="hidden-xs" rowspan="5" width="300px;"><img src="https://ivymoda.com/assets/files/news/2017/08/04/7ca90247ac04def9f527bf1579e8aaf0.jpg" width="300"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="abc_ts" colspan="7"><img src="https://ivymoda.com/assets/files/news/2017/08/04/7ca90247ac04def9f527bf1579e8aaf0.jpg" width="200"></td>
                                                            </tr>
                                                            <tr>
                                                                <td rowspan="2">Tên gọi</td>
                                                                <td colspan="6">SIZE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp; &nbsp; &nbsp; &nbsp; 39&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                                                <td>&nbsp; 40&nbsp; &nbsp;&nbsp;</td>
                                                                <td>&nbsp;41</td>
                                                                <td>&nbsp;42</td>
                                                                <td>43</td>
                                                                <td>44</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Chiều dài bàn chân</td>
                                                                <td>25,2</td>
                                                                <td>26</td>
                                                                <td>&nbsp;26,9&nbsp;&nbsp;</td>
                                                                <td>&nbsp; &nbsp;27,7</td>
                                                                <td>&nbsp; &nbsp;28,5</td>
                                                                <td>&nbsp; &nbsp; 29,4</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <?= $current_product['description'] ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">
                                            <p>Chi tiết bảo quản sản phẩm :&nbsp;</p>

                                            <p>* Vải dệt kim : sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn.</p>

                                            <p>* Vải voan , lụa , chiffon nên giặt bằng tay.</p>

                                            <p>* Vải thô , tuytsy , kaki không có phối hay trang trí đá cườm thì có thể giặt máy.</p>

                                            <p>* Vải thô&nbsp;, tuytsy, kaki có&nbsp;phối màu tường phản hay trang trí voan , lụa , đá cườm thì cần giặt tay.</p>

                                            <p>* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.Nếu giặt thì&nbsp;nên lộn trái sản phẩm khi giặt , đóng khuy , kéo khóa, không nên giặt chung cùng đồ sáng màu , tránh dính màu vào các sản phẩm khác.&nbsp;</p>

                                            <p>* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu , phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh , nên giặt cùng xà phòng pha loãng.</p>

                                            <p>* Các sản phẩm có thể&nbsp;giặt bằng máy thì chỉ nên để chế độ giặt nhẹ , vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.</p>

                                            <p>* Nên phơi sản phẩm tại chỗ thoáng mát , tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu , nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.</p>

                                            <p>* Những chất vải 100% cotton , không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải.</p>

                                            <p>* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng , mát và không bị cháy , giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải.&nbsp;</p>

                                        </div>
                                        <!--<div role="tabpanel" class="tab-pane" id="tab_barcode" style="width: 100%">
                                            <div style="width: 50%; margin: 0 auto" id="barcode"></div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $(".productDetail_buttonShow_btn").click(function() {
                                    $(".chitietsp_hide").slideToggle("");
                                });
                            });
                        </script>
                    </div>

                </div>
                <hr />
            </div>
        </div>
    </div>
</div>
<script>
    $(window).on('load', function() {
        //$('#modal_sale').modal('show');
    });
</script>

<script type="text/javascript">
    var product_key = '21E3001';
    var color_like = '';
</script>


<script type="text/javascript">
    $(window).scroll(function() {
        if ($(window).scrollTop() >= 65) {
            $('.zm-viewer').addClass('fixed-header');
        } else {
            $('.zm-viewer').removeClass('fixed-header');
        }
    });

    $('#box_qrcode').click(function() {
        var link_sp = $('#hid_link_sp').val();
        var hid_color_text = $('#hid_color_text').val();
        var hid_size_text = $('#hid_size_text').val();
        if (hid_color_text != '') link_sp = link_sp + '#mau:' + hid_color_text;
        if (hid_size_text != '') link_sp = link_sp + '#size:' + hid_size_text;

        //console.log(link_sp);
        var qrcode = new QRCode("qrcode", {
            text: link_sp,
            width: 300,
            height: 300,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });

        $('#img_1').modal('show');
    });

    $("#img_1").on("hidden.bs.modal", function() {
        $("#qrcode").html("");
    });

    $(document).ready(function() {
        $("#barcode").barcode(product_key, "code39", {
            barWidth: 1,
            barHeight: 40,
            showHRI: true,
            moduleSize: 9
        });

        $('#demo4carousel li').click(function() {
            var el = $(this);
            $('#demo4carousel li').removeClass('active');
            el.addClass('active');
            var demo4obj = $('#demo4').data('imagezoom');
            demo4obj.changeImage(el.find('img').attr('src'), el.find('img').data('largeimg'));
        });

        //auto click if only a product
        var count_color = $('.poductDetail_js_img li').length;
        if (count_color == 1) {
            //tu dong chon màu sắc nếu chỉ có 1 màu
            window.setTimeout(function() {
                $(".poductDetail_js_img li").click();
            }, 2000);
        } else {
            if (color_like != '') {
                //chon mau theo so thich vung mien
                $(".show-product-color").each(function() {
                    var color_current = $(this).data('color-current');
                    var check_color = color_like.indexOf(color_current);
                    if (check_color != -1) {
                        window.setTimeout(function() {
                            $('#product_color_' + color_current).click();
                            console.log(color_current);
                        }, 2000);

                        return false;
                    }
                });

            }

        }

    });

    $(function() {

        //demo4   standard mode
        var carsousel = $('#demo4carousel').elastislide({
            start: 0,
            minItems: 4,

            /*onClick:function( el, pos, evt ) {
             el.siblings().removeClass("active");
             el.addClass("active");
             carsousel.setCurrent( pos );
             evt.preventDefault();
             // for imagezoom to change image
             var demo4obj = $('#demo4').data('imagezoom');
             demo4obj.changeImage(el.find('img').attr('src'),el.find('img').data('largeimg'));
             },
             */

            onReady: function() {
                var img_zoom_df = $('#demo4').attr('src');
                //init imagezoom with many options
                $('#demo4').ImageZoom({
                    type: 'standard',
                    zoomSize: [480, 300],
                    bigImageSrc: img_zoom_df,
                    offset: [10, -4],
                    zoomViewerClass: 'standardViewer',
                    onShow: function(obj) {
                        obj.$viewer.hide().fadeIn(100);
                    },
                    onHide: function(obj) {
                        obj.$viewer.show().fadeOut(100);
                    }
                });
                $('#demo4carousel li:eq(0)').addClass('active');

                if (navigator.userAgent.match(/Android/i) ||
                    navigator.userAgent.match(/webOS/i) ||
                    navigator.userAgent.match(/iPhone/i) ||
                    navigator.userAgent.match(/iPad/i) ||
                    navigator.userAgent.match(/iPod/i) ||
                    navigator.userAgent.match(/BlackBerry/i) ||
                    navigator.userAgent.match(/Windows Phone/i)
                ) {
                    //disable tooltip, add style = none
                    var demo4obj = $('#demo4').data('imagezoom');
                    demo4obj.changeZoomSize(0, 0);
                }

                // change zoomview size when window resize
                $(window).resize(function() {

                    winWidth = $(window).width();
                    if (winWidth > 900) {
                        var demo4obj = $('#demo4').data('imagezoom');
                        demo4obj.changeZoomSize(480, 300);
                    } else {

                        if (navigator.userAgent.match(/Android/i) ||
                            navigator.userAgent.match(/webOS/i) ||
                            navigator.userAgent.match(/iPhone/i) ||
                            navigator.userAgent.match(/iPad/i) ||
                            navigator.userAgent.match(/iPod/i) ||
                            navigator.userAgent.match(/BlackBerry/i) ||
                            navigator.userAgent.match(/Windows Phone/i)
                        ) {
                            //disable tooltip, add style = none
                            var demo4obj = $('#demo4').data('imagezoom');
                            demo4obj.changeZoomSize(0, 0);

                        } else {
                            var demo4obj = $('#demo4').data('imagezoom');
                            demo4obj.changeZoomSize(winWidth * 0.4, winWidth * 0.4 * 0.625);
                        }
                    }
                });

            }
        });


    });
</script>
<script>
    document.title = "<?= $current_product['name'] ?> | IVY moda";
</script>