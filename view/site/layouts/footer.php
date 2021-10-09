</div>
<!--Footer-->
<footer>
    <div class="footer_title col-md-12 marb30">Tải ứng dụng IVY moda</div>
    <div class="d-flex flex-row-center col-md-12 marb30">
        <a id="app_ios" style="margin-right: 10px" href="http://ios.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/appstore.jpg" width="140" class="img-fluid" alt="">'; ?> </a>
        <a id="app_android" style="margin-right: 10px" href="http://android.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/googleplay.jpg" width="140" class="img-fluid" alt="">'; ?> </a>
    </div>
    <div class="footer_title col-md-12">Nhận bản tin IVY moda</div>
    <div class="inputGroup_box col-md-12">
        <div class="inputGroup">
            <form enctype="application/x-www-form-urlencoded" action="https://ivymoda.com/page/subscribe" method="post" name="frm_subscribe" id="frm_subscribe">
                <input type="text" placeholder="Nhập email của bạn..." id="txt_subscribe_email" name="email" readonly/>
                <button type="button" id="but_subscribe"><i class="fa fa-long-arrow-left fa-lg" aria-hidden="true"></i></button>
            </form>
        </div>
        <div id="subscribe_error"></div>
    </div>

    <div class="clearfix"></div>
    <ul class="list-inline">
        <li><a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=36604" target="_blank"><?php echo '<img src="' . SCRIPT_ROOT . '/public/images/dathongbao.png">'; ?></a></li>
        <li><?php echo '<a href="' . SCRIPT_ROOT . '/lien-he">Liên hệ</a>'?></li>
        <li><a href="https://tuyendung.ivy.com.vn" target="_blank">Tuyển dụng</a></li>
        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/gioi-thieu">Giới thiệu</a>'?></li>
        <li>
            <ul class="list-inline">
                <li><a target="_blank" href="https://www.facebook.com/thoitrangivymoda/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/user/thoitrangivymoda"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
        </li>
    </ul>
    <div class="footer_bot">
        Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650
        <br />Địa chỉ đăng ký: Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam - 0243 205 2222
        <br>Đặt hàng online : <b>0246 662 3434 </b>.
        <p>
            ©Ivymoda All rights reserved
        </p>
    </div>

</footer>

<div class="modal_loading">
    <!-- Place at bottom of page -->
</div>
<a href="#" id="back-to-top" title="Về đầu trang"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!--Owl slide js-->
<!--<script src="https://pubcdn.ivymoda.com/js/owlcarousel/app.js" type="text/javascript"></script>-->
<!--<script src="https://pubcdn.ivymoda.com/js/owlcarousel/owl.carousel.min.js" type="text/javascript"></script>-->
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            items: 4,
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true,
            marginBottom: '-20px',
        });
    });
</script>
<?php
echo '
<script src="' . SCRIPT_ROOT . '/public/js/owl.carousel.js"></script>
<!--Owl slide js_END-->
<!--  lazy load -->
<script src="' . SCRIPT_ROOT . '/public/js/jquery.lazyload.min.js" type="text/javascript"></script>
';
?>
<!-- function -->
<script>
    (function($) {
        $.fn.format_number_price = function() {
            $(this).number(true, 0, ',', '.');
        };
    }(jQuery));
</script>
<?php
echo '<script src="' . SCRIPT_ROOT . '/public/js/kscript.js?v=129" type="text/javascript"></script>';
?>
<script>
    if ($('#back-to-top').length) {
        var scrollTrigger = 700, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show_top_ivy');
                } else {
                    $('#back-to-top').removeClass('show_top_ivy');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    };

    function ivytrack(link) {
        ga('send', 'event', {
            eventAction: 'click',
            eventCategory: 'View Sản phẩm',
            eventLabel: link
        });
    };

    if (navigator.userAgent.match(/Android/i)) {
        $('#app_ios').hide();
    } else if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i)) {
        $('#app_android').hide();
    }
</script>
<script type=text/javascript>
    function setScreenHWCookie() {
        Cookies.set('screen_ak', screen.width + 'x' + screen.height + ':' + guest_user, {
            expires: 365
        })
        return true;
    }
    setScreenHWCookie();
</script>

<!-- Start of widget script -->

<script type="text/javascript">
    // function loadJsAsync(t, e) {
    //     var n = document.createElement("script");
    //     n.type = "text/javascript", n.src = t, n.addEventListener("load", function(t) {
    //         e(null, t)
    //     }, !1);
    //     var a = document.getElementsByTagName("head")[0];
    //     a.appendChild(n)
    // }
    // window.addEventListener("DOMContentLoaded", function() {
    //     loadJsAsync("https://webchat.caresoft.vn:8090/js/CsChat.js?v=4.0", function() {
    //         var t = {
    //             domain: "Ivymoda",
    //             domainId: 6896,
    //             hide: 1
    //         };
    //         embedCsChat(t)
    //     })
    // }, !1);
</script>

<div class="box-show-support" id="box-show-support">
    <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/support_new1.png" style="vertical-align: middle" />'; ?>
</div>
<div class="box-support" id="box-support" style="display: none">
    <div class="box-show">
        <div class="box-icon box-icon-phone" id="box-icon-phone" title="Hotline">
            <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/support_new2.png" style="vertical-align: middle" />'; ?>
        </div>
        <div class="box-icon box-icon-phone" title="Chat với nhân viên hỗ trợ">
            <a href="javascript: openCsChatBox();">
                <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/support_new3.png" style="vertical-align: middle" />'; ?>
            </a>
        </div>
        <div class="box-icon box-icon-messenger" title="Chat facebook messenger">
            <a href="http://messenger.com/t/thoitrangivymoda" target="_blank">
                <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/support_new5.png" style="vertical-align: middle" />'; ?>
            </a>
        </div>
        <div class="box-icon box-icon-contact" title="Liên hệ">
            <a href="<?php echo SCRIPT_ROOT . '/lien-he'?>">
                <?php echo '<img src="' . SCRIPT_ROOT . '/public/images/support_new4.png" style="vertical-align: middle" />'; ?>
            </a>
        </div>
    </div>
</div>
<div id="modal_phone" class="modal fade" role="dialog" style="display: none">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="modal-title">IVY moda hỗ trợ</p>
            </div>
            <div class="modal-body">
                <p>HOTLINE: <span style="font-size: 16px">0246 662 3434</span></p>
            </div>
        </div>
    </div>
</div>
</body>

</html>