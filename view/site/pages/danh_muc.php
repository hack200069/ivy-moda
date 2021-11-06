<form name="frm_cat" id="frm_cat" enctype="application/x-www-form-urlencoded" method="get" action="" data-slug="danh-muc/hang-nam-moi-ve">
    <div id="products" class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="dieuhuong">
                    <ul class="list-inline">
                        <li><a href="<?= SCRIPT_ROOT ?>">Trang chủ</a> <span>→</span></li>
                        <?php
                        $forObject = 'Sale';
                        if ($current_category['for_object'] == 1) {
                            $forObject = 'Nam';
                        } else if ($current_category['for_object'] == 2) {
                            $forObject = 'Nữ';
                        } else if ($current_category['for_object'] == 3) {
                            $forObject = 'Trẻ em';
                        }
                        ?>
                        <li><a href="javascript:void(0)" title="<?= $forObject ?>"><?= $forObject ?></a> <span>→</span></li>
                        <li><a href="javascript:void(0)" title="<?= $current_category['name'] ?>"><?= $current_category['name'] ?></a> <span>→</span></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 hidden-xs" id="">
                    <!--MENU_VER-->
                    <div class="nav-side-menu menu-cat-left">
                        <div class="brand1"><a href="#cat_col_name_1" data-toggle="collapse" aria-expanded="true" aria-controls="cat_col_name_1">Nữ</a></div>
                        <div class="menu-list collapse <?= $forObject == 'Nữ' ? 'in' : '' ?>" id="cat_col_name_1">
                            <ul id="menu-content" class="menu-content out">
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Áo +</b></a>
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Quần nữ +</b></a>
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Đầm nữ +</b></a>
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
                        </div>
                    </div>
                    <!--/MENU_VER-->
                    <div class="nav-side-menu menu-cat-left">
                        <div class="brand1"><a href="#cat_col_name_2" data-toggle="collapse" aria-expanded="true" aria-controls="cat_col_name_2">Nam</a></div>
                        <div class="menu-list collapse <?= $forObject == 'Nam' ? 'in' : '' ?>" id="cat_col_name_2">
                            <ul id="menu-content" class="menu-content out">
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Áo +</b></a>
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Quần nam +</b></a>
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
                        </div>
                    </div>
                    <!--/MENU_VER-->
                    <div class="nav-side-menu menu-cat-left">
                        <div class="brand1"><a href="#cat_col_name_3" data-toggle="collapse" aria-expanded="true" aria-controls="cat_col_name_3">Trẻ em</a></div>
                        <div class="menu-list collapse <?= $forObject == 'Trẻ em' ? 'in' : '' ?>" id="cat_col_name_3">
                            <ul id="menu-content" class="menu-content out">
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Bé gái +</b></a>
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
                                    <a href="javascript:void(0)" style="text-transform: uppercase; color: #000;"><b>Bé trai +</b></a>
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
                        </div>
                    </div>
                    <!--/MENU_VER-->
                    <div class="nav-side-menu menu-cat-left">
                        <div class="brand1"><a href="#cat_col_name_35" data-toggle="collapse" aria-expanded="true" aria-controls="cat_col_name_35">Sale 50%++</a></div>
                        <div class="menu-list collapse <?= $forObject == 'Sale' ? 'in' : '' ?>" id="cat_col_name_35">
                            <ul id="menu-content" class="menu-content out">
                                <li>
                                    <a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-nu">Nữ</a>
                                </li>
                                <li>
                                    <a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-nam">Nam</a>
                                </li>
                                <li>
                                    <a href="<?= SCRIPT_ROOT ?>/danh-muc/sale-tre-em">Trẻ em</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/MENU_VER-->

                </div>

                <div class="col-md-9 col-sm-9">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1 class="cat_h1"><?= $current_category['name'] ?></h1>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="row">
                                <?php
                                foreach ($products as $product) {
                                    if($product['discount_fifty_percent'] == 0){
                                        echo '<div class="col-md-3 col-sm-4 col-xs-6">';
                                        echo '<a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '"><img data-original="' . SCRIPT_ROOT . $imageModel->getImageList($product['id'])[0]['link'] . '" class="lazy " /></a>';
                                        echo '<div class="title_product"><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '">' . $product['name'] . '</a></div>';
                                        echo '<div class="price_product text-center">';
                                        echo '<span class="price_product_main">' . number_format($product['price']) . ' <sup>đ</sup></span>';
                                        echo '<span class="price_product_sale">' . number_format($product['price']/2) . ' <sup>đ</sup></span>';
                                        echo '</div><div class="new_product text-center"><span style="color: red;">' . number_format($product['price']/2) . ' đ</span>&nbsp;<span>&nbsp;</span></div>';
                                        echo '<div class="sale_products">Sale</div></div>';
                                    } else{
                                        echo '<div class="col-md-3 col-sm-4 col-xs-6">';
                                        echo '<a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '"><img data-original="' . SCRIPT_ROOT . $imageModel->getImageList($product['id'])[0]['link'] . '" class="lazy " /></a>';
                                        echo '<div class="title_product"><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '">' . $product['name'] . '</a></div>';
                                        echo '<div class="price_product text-center">';
                                        echo '<span class="price_product_sale">' . number_format($product['price']) . ' <sup>đ</sup></span>';
                                        echo '</div><div class="new_product text-center">&nbsp;<span>_new_&nbsp;</span></div></div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-12 last_products">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 hidden-xs">

                                </div>
                                <div id="phantrang" class="col-md-6 col-sm-6 text-right">
                                    <?php
                                    if ($total_pages > 1) {
                                        echo '<ul class="list-inline">';
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $current_category['slug'] . '?page_no=1">Trang đầu</a></li>';
                                        if ($page_no == 1) {
                                            echo ' <li><a href="javascript:void(0)">&laquo;</a></li>';
                                        } else {
                                            echo ' <li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $current_category['slug'] . '?page_no=' . ($page_no - 1) . '">&laquo;</a></li>';
                                        }
                                        for ($i = 1; $i <= $total_pages; $i++) {
                                            if($page_no == $i)
                                                echo '<li><a href="javascript:void(0)" id="products_active_ts">'.$i.'</a></li>';
                                            else
                                                echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $current_category['slug'] . '?page_no='.$i.'">'.$i.'</a></li>';
                                        }
                                        if ($page_no == $total_pages) {
                                            echo ' <li><a href="javascript:void(0)">&raquo;</a></li>';
                                        } else {
                                            echo ' <li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $current_category['slug'] . '?page_no=' . ($page_no + 1) . '">&raquo;</a></li>';
                                        }
                                        echo '<li><a href="' . SCRIPT_ROOT . '/danh-muc/' . $current_category['slug'] . '?page_no=' . $total_pages . '">Trang cuối</a></li>';
                                        echo '</ul>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = "<?= $current_category['name'] ?>" + " | IVY moda";
</script>