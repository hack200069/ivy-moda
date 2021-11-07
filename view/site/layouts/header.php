<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="description" content="IVY moda - Tuyên ngôn thời trang của bạn. IVY moda là thương hiệu thời trang Việt Nam với mong muốn đem lại vẻ đẹp hiện đại và sự tự tin cho khách hàng, thông qua các dòng sản phẩm thời trang thể hiện cá tính và xu hướng. Một trong những “tôn chỉ” về thiết kế của IVY moda chính là mong muốn khách hàng thể hiện được cá tính của chính mình." />
    <link rel="canonical" href="https://ivymoda.com/" />
    <meta property="og:url" content="https://ivymoda.com/" />
    <meta property="og:title" content="Trang chủ | IVY moda" />
    <meta property="og:description" content="IVY moda - Tuyên ngôn thời trang của bạn. IVY moda là thương hiệu thời trang Việt Nam với mong muốn đem lại vẻ đẹp hiện đại và sự tự tin cho khách hàng, thông qua các dòng sản phẩm thời trang thể hiện cá tính và xu hướng. Một trong những “tôn chỉ” về thiết kế của IVY moda chính là mong muốn khách hàng thể hiện được cá tính của chính mình." />
    <meta property="og:image" content="https://pubcdn.ivymoda.com/files/news/2021/10/05/fe0a56c78a947a5a57180c379899c1ed.jpg" />
    <!-- <link rel="manifest" href="https://ivymoda.com/manifest.json?gcm_sender_id=" /> -->
    <script type="text/javascript">
        var base_url = 'https://ivymoda.com/';
        var static_url = 'https://pubcdn.ivymoda.com/';
        var guest_user = 'guest:96d60cee65e62d12a2f9b004a286b864';
    </script>
    <?php
    echo '
    <link rel="icon" href="' . SCRIPT_ROOT . '/public/images/logo-icon.ico" type="image/png" sizes="16x16">
    <link href="' . SCRIPT_ROOT . '/public/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="' . SCRIPT_ROOT . '/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- jquery ui -->
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/jquery-ui.min.css">

    <!--Owl slide-->
    <!--<link href="https://pubcdn.ivymoda.com/js/owlcarousel/owl.carousel.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="https://pubcdn.ivymoda.com/js/owlcarousel/owl.theme.css" rel="stylesheet" type="text/css" />-->
    <!--<link href="https://pubcdn.ivymoda.com/js/owlcarousel/owl.transitions.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/owl.theme.default.min.css">
    <!--Owl slide_END-->
    <!--ZOOM-->
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/demo.css?v=1" />
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/imagezoom.css" />
    <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/css/es-cus.css" />
    <!-- end: ZOOM-->
    <link href="' . SCRIPT_ROOT . '/public/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="' . SCRIPT_ROOT . '/public/css/reponsive.css" rel="stylesheet" type="text/css" />
    <link href="' . SCRIPT_ROOT . '/public/css/styles_ts.css?v=125" rel="stylesheet" type="text/css" />
    <!-- smart menu -->
    <!-- SmartMenus core CSS (required) -->
    <!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
    <link href="' . SCRIPT_ROOT . '/public/css/sm-simple.css" rel="stylesheet" type="text/css" />

    <script src="' . SCRIPT_ROOT . '/public/js/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery UI -->
    <script src="' . SCRIPT_ROOT . '/public/js/jquery-ui.min.js"></script>

    <script src="' . SCRIPT_ROOT . '/public/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="' . SCRIPT_ROOT . '/public/js/jquery.number.js" type="text/javascript"></script>
    <script src="' . SCRIPT_ROOT . '/public/js/affix.js" type="text/javascript"></script>
    <script src="' . SCRIPT_ROOT . '/public/js/js.cookie.js" type="text/javascript"></script>

    <!-- smart menu -->
    <script src="' . SCRIPT_ROOT . '/public/js/jquery.smartmenus.js" type="text/javascript"></script>

    <!-- zoom -->
    <script type="text/javascript" src="' . SCRIPT_ROOT . '/public/js/jquery.imagezoom.min.js"></script>
    <script type="text/javascript" src="' . SCRIPT_ROOT . '/public/js/modernizr.custom.17475.js"></script>
    <script type="text/javascript" src="' . SCRIPT_ROOT . '/public/js/jquery.elastislide.js"></script>
    <!--ZOOM_END-->
    ';
    ?>
</head>

<body>

    <!--TopBar-->
    <!----NAV PC---->
    <nav id="topBar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header col-md-2 col-sm-2">
                <a class="navbar-brand" href="<?php echo SCRIPT_ROOT ?>"><?php echo '<img src="' . SCRIPT_ROOT . '/public/images/logo.png" />'; ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar_center">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Nữ</a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach (CATEGORY as $c) {
                                if ($c['for_object'] == 2) {
                                    if ($c['parent_category'] == 5) {
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                    }
                                }
                            }
                            ?>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Áo</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 2) {
                                            if ($c['parent_category'] == 6) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Quần nữ</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 2) {
                                            if ($c['parent_category'] == 7) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Đầm nữ</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 2) {
                                            if ($c['parent_category'] == 8) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                            foreach (CATEGORY as $c) {
                                if ($c['for_object'] == 2) {
                                    if ($c['parent_category'] == 9) {
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- fixed cho sale -->
                        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Nam</a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach (CATEGORY as $c) {
                                if ($c['for_object'] == 1) {
                                    if ($c['parent_category'] == 1) {
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                    }
                                }
                            }
                            ?>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>&Aacute;o</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 1) {
                                            if ($c['parent_category'] == 2) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Quần nam</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 1) {
                                            if ($c['parent_category'] == 3) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                            foreach (CATEGORY as $c) {
                                if ($c['for_object'] == 1) {
                                    if ($c['parent_category'] == 4) {
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Trẻ em</a>
                        <ul class="dropdown-menu">
                            <?php
                            foreach (CATEGORY as $c) {
                                if ($c['for_object'] == 3) {
                                    if ($c['parent_category'] == 10) {
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                    }
                                }
                            }
                            ?>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Bé gái</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 3) {
                                            if ($c['parent_category'] == 11) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" style="text-transform: uppercase"><b>Bé trai</b></a>
                                <ul>
                                    <?php
                                    foreach (CATEGORY as $c) {
                                        if ($c['for_object'] == 3) {
                                            if ($c['parent_category'] == 12) {
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" style="color:red" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Sale 50%++</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= SCRIPT_ROOT ?>/sale/sale-nu">Nữ</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/sale/sale-nam">Nam</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/sale/sale-tre-em">Trẻ em</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <?php echo '<a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tin tức</a>' ?>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Thông tin</a>
                        <ul class="dropdown-menu">
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/tu-van-size">Tư vấn size</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinhsach-dieukhoan">Chính sách điều khoản</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/huong-dan-mua-hang">Hướng dẫn mua hàng</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-thanh-toan">Chinh sách thanh toán</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-doi-tra">Chính sách đổi trả</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-bao-hanh">Chính sách bảo hành </a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-giao-nhan-van-chuyen">Chính sách giao nhận vận chuyển</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/page/cuahang">Hệ thống cửa hàng</a>' ?></li>
                            <li><?php echo '<a href="' . SCRIPT_ROOT . '/lien-he">Liên hệ</a>' ?></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form action="<?= SCRIPT_ROOT ?>/tim-kiem" name="frm_search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Tìm kiếm" title="Tìm kiếm">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" title="Tìm kiếm"> <i class="fa fa-search" aria-hidden="true"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        echo '
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="' . SCRIPT_ROOT . '/customer/info" title="Cập nhật tài khoản">' . $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] . '</a>
                                <ul class="dropdown-menu" style="width: 180px">
                                    ';
                        if ($_SESSION['user']['role'] == ADMIN) {
                            echo '<li style="padding: 5px 5px 0px 5px;"><a href="' . SCRIPT_ROOT . '/admin">Quản lý website</a></li>';
                        }
                        echo '
                                    <li style="padding: 5px 5px 0px 5px;"><a href="' . SCRIPT_ROOT . '/customer/info">Tài khoản của tôi</a></li>
                                    <li style="padding: 5px 5px 0px 5px;"><a href="' . SCRIPT_ROOT . '/customer/order_list">Đơn mua</a></li>
                                    <li style="text-align: left; padding: 5px 5px 0px 5px;"><a href="' . SCRIPT_ROOT . '/customer/logout">Đăng xuất</a></li>
                                </ul>
                            </li>
                            ';
                        echo '<li class="dropdown">
                                    <a href="' . SCRIPT_ROOT . '/thanhtoan/giohang">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        <span>' . $_SESSION['cart_total_product'] . '</span>
                                    </a>';
                        if ($_SESSION['cart_total_product'] > 0) {
                            echo '  <ul class="dropdown-menu" style="display: none;">
                                        <h3 class="text-center"><a href="#" title="">Giỏ hàng</a></h3>';
                            foreach ($_SESSION['cart_product'] as $product) {
                                echo '<li>
                                <ul class="list-inline clearfix">
                                    <li class="col-md-3 col-sm-4"><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '"><img src="' . SCRIPT_ROOT;
                                foreach(IMAGE as $image){
                                    if($image['product_id'] == $product['id']){
                                        echo $image['link'];
                                        break;
                                    }
                                }
                                echo '"></a></li>
                                    <li class="col-md-9 col-sm-8">
                                        <div class="title_cartMain"><h5><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '">' . $product['name'] . '</a></h5></div>
                                        <div class="style_cartMain">
                                            <b>Số lượng:</b> ' . $product[3] . '                                    
                                        </div>
                                    </li>
                                </ul>
                            </li>';
                            }
                            echo            '<li>
                                            <a href="' . SCRIPT_ROOT . '/thanhtoan/giohang">...xem chi tiết</a>
                                        </li>
                                    </ul>';
                        }
                        echo '</li>';
                    } else {
                        echo '
                            <li>
                                <a href="' . SCRIPT_ROOT . '/customer/login"><i class="fa fa-user" aria-hidden="true"></i></a></a>
                            </li>
                            ';
                    }
                    ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--topBar scroll addClss-->
    <script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 1) {
                $("#topBar").addClass("darkHeader");
            } else {
                $("#topBar").removeClass("darkHeader");
            }
        });
    </script>
    <!--Hover fadeIn fadeOut subMenu-->
    <script type="text/javascript">
        $('ul.navbar-right li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
        $('ul.navbar_center li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(200);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(200);
        });
    </script>
    <!--Add data-toggle--->
    <script type="text/javascript">
        $(document).ready(function() {
            var $window = $(window);
            //Hàm check nếu kích thước màn hình nhỏ hơn 1024 thì thực hiện
            function checkWidth() {
                var windowsize = $window.width();
                if (windowsize < 1025) {
                    // '.check_data' là class thẻ mà muốn add data-toggle
                    $(".dropdown-toggle").attr("data-toggle", "dropdown");
                }
            }
            // Execute on load
            checkWidth();
            // Bind event listener
            $(window).resize(checkWidth);
        });
    </script>
    <!----/NAV PC---->

    <!------------------------------MOBILE------------------------------->
    <!--NAV_MOBILE---------->
    <div id="nav_mobile">
        <a href="<?php echo SCRIPT_ROOT ?>"><?php echo '<img src="' . SCRIPT_ROOT . '/public/images/logo.png" />'; ?></a>
        <div class="cart_mobile">
            <a href="<?= SCRIPT_ROOT ?>/thanhtoan/giohang"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span> </span></a>
        </div>
        <!--MENU_VER-->
        <div class="nav-side-menu">
            <div class="brand"><i class="fa fa-bars" aria-hidden="true"></i> Danh mục</div>
            <div class="menu-list">
                <div class="login_mobile">
                    <?php
                    if (isset($_SESSION['user'])) {
                        if ($_SESSION['user']['role'] == ADMIN) {
                            echo '<p style="padding: 5px"><a href="' . SCRIPT_ROOT . '/admin">Quản lý website</a></p>';
                        }
                        echo '
                            <p style="padding: 5px"><a href="' . SCRIPT_ROOT . '/customer/info">Tài khoản của tôi</a></p>
                            <p style="padding: 5px"><a href="' . SCRIPT_ROOT . '/customer/order_list">Đơn mua</a></p>
                            <p style="padding: 5px"><a href="' . SCRIPT_ROOT . '/customer/logout">Đăng xuất</a></p>
                            ';
                    } else {
                        echo '
                            <a href="' . SCRIPT_ROOT . '/customer/login">Đăng nhập <i class="fa fa-user" aria-hidden="true"></i></a>
                            ';
                    }
                    ?>
                </div>
                <ul id="menu-content" class="menu-content out">
                    <li data-toggle="collapse" data-target="#cat_1" class="collapsed">
                        <a>Nữ</a> <span class="arrow" data-toggle="collapse" data-target="#cat_1" class="collapsed"></span>
                    </li>
                    <ul class="sub-menu collapse" id="cat_1">
                        <?php
                        foreach (CATEGORY as $c) {
                            if ($c['for_object'] == 2) {
                                if ($c['parent_category'] == 5) {
                                    echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                }
                            }
                        }
                        ?>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Áo</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 2) {
                                        if ($c['parent_category'] == 6) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Quần nữ</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 2) {
                                        if ($c['parent_category'] == 7) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Đầm nữ</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 2) {
                                        if ($c['parent_category'] == 8) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                        foreach (CATEGORY as $c) {
                            if ($c['for_object'] == 2) {
                                if ($c['parent_category'] == 9) {
                                    echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                    <li data-toggle="collapse" data-target="#cat_2" class="collapsed">
                        <a>Nam</a> <span class="arrow" data-toggle="collapse" data-target="#cat_2" class="collapsed"></span>
                    </li>
                    <ul class="sub-menu collapse" id="cat_2">
                        <?php
                        foreach (CATEGORY as $c) {
                            if ($c['for_object'] == 1) {
                                if ($c['parent_category'] == 1) {
                                    echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                }
                            }
                        }
                        ?>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>&Aacute;o</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 1) {
                                        if ($c['parent_category'] == 2) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Quần nam</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 1) {
                                        if ($c['parent_category'] == 3) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                        foreach (CATEGORY as $c) {
                            if ($c['for_object'] == 1) {
                                if ($c['parent_category'] == 4) {
                                    echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                    <li data-toggle="collapse" data-target="#cat_3" class="collapsed">
                        <a>Trẻ em</a> <span class="arrow" data-toggle="collapse" data-target="#cat_3" class="collapsed"></span>
                    </li>
                    <ul class="sub-menu collapse" id="cat_3">
                        <?php
                        foreach (CATEGORY as $c) {
                            if ($c['for_object'] == 3) {
                                if ($c['parent_category'] == 10) {
                                    echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                }
                            }
                        }
                        ?>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Bé gái</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 3) {
                                        if ($c['parent_category'] == 11) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" style="text-transform: uppercase"><b>Bé trai</b></a>
                            <ul>
                                <?php
                                foreach (CATEGORY as $c) {
                                    if ($c['for_object'] == 3) {
                                        if ($c['parent_category'] == 12) {
                                            echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $c['slug'] . '">' . $c['name'] . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <li data-toggle="collapse" data-target="#cat_35" class="collapsed">
                        <a style="color:red !important;">Sale 50%++</a> <span class="arrow" data-toggle="collapse" data-target="#cat_35" class="collapsed"></span>
                    </li>
                    <ul class="sub-menu collapse" id="cat_35">
                        <li><a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-nu">Nữ</a></li>
                        <li><a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-nam">Nam</a></li>
                        <li><a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-tre-em">Trẻ em</a></li>
                    </ul>
                    <li data-toggle="collapse" data-target="#ivyLifeStyle" class="collapsed">
                        <?php echo '<a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh">Tin tức</a>' ?> <span class="arrow"></span>
                    </li>

                    <li data-toggle="collapse" data-target="#shopOnline" class="collapsed">
                        <a href="javascript:void(0);">Thông tin</a> <span class="arrow"></span>
                    </li>
                    <ul class="sub-menu collapse" id="shopOnline">
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/tu-van-size">Tư vấn size</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinhsach-dieukhoan">Chính sách điều khoản</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/huong-dan-mua-hang">Hướng dẫn mua hàng</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-thanh-toan">Chinh sách thanh toán</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-doi-tra">Chính sách đổi trả</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-bao-hanh">Chính sách bảo hành </a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/about/chinh-sach-giao-nhan-van-chuyen">Chính sách giao nhận vận chuyển</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/page/cuahang">Hệ thống cửa hàng</a>' ?></li>
                        <li><?php echo '<a href="' . SCRIPT_ROOT . '/lien-he">Liên hệ</a>' ?></li>
                    </ul>
                </ul>
            </div>
        </div>
        <!--/MENU_VER-->
    </div>
    <!--/NAV_MOBILE-->
    <script>
        $(document).ready(function() {
            $(".brand").click(function() {
                $(".menu-list").slideToggle("");
            });
        });
        /*$('.arrow').click(function() {
         $(this).toggleClass('hghghghg');
         });*/
    </script>

    <!--SEARCH_MOBLIE------------->
    <div id="search_mobile" class="col-md-12">
        <form action="<?= SCRIPT_ROOT ?>/tim-kiem" method="get">
            <input type="text" name="q" title="Tìm kiếm" />
            <button type="submit">Tìm kiếm</button>
        </form>
    </div>
    <!------------------------------MOBILE_END------------------------------->

    <!--/TopBar------------------------------------------------------------------>
    <div id="content" class="container-fluid">