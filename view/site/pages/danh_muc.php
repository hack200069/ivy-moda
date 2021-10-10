<form name="frm_cat" id="frm_cat" enctype="application/x-www-form-urlencoded" method="get" action="" data-slug="danh-muc/hang-nam-moi-ve">
    <input type="hidden" name="hid_size" value="" id="hid_size">
    <input type="hidden" name="hid_color" value="" id="hid_color">
    <input type="hidden" name="hid_row" value="4" id="hid_row">
    <input type="hidden" name="hid_status" value="" id="hid_status">
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
                        }else if ($current_category['for_object'] == 2) {
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
                        <div class="menu-list collapse <?= $forObject == 'Nữ' ? 'in' : '' ?>" id="cat_col_name_1" >
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
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 filter_show">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select size="1" id="sel_order" name="sel_order">
                                        <option value="">Sắp xếp</option>
                                        <option value="price_desc">Giá: cao đến thấp</option>
                                        <option value="price_asc">Giá: thấp đến cao</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <a href="#"><img data-original="https://pubcdn.ivymoda.com/files/product/thumab/400/2021/09/11/977bebc9e514e1ed17a2399dcf2f391a.JPG" class="lazy " /></a>
                                    <div class="title_product"><a href="#">Quần lửng vải phối sợi Tencel MS 21E3001</a></div>
                                    <div class="price_product text-center">
                                        <span class="price_product_sale">690.000 <sup>đ</sup></span>
                                    </div>
                                    <div class="new_product text-center">
                                        &nbsp;<span>_new_&nbsp;
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <a href="#"><img data-original="https://pubcdn.ivymoda.com/files/product/thumab/400/2021/09/11/0ade958448b978646d867be4a4cfde63.JPG" class="lazy " /></a>
                                    <div class="title_product"><a href="#">Quần lửng khaki dáng Regular MS 21E3016</a></div>
                                    <div class="price_product text-center">
                                        <span class="price_product_sale">990.000 <sup>đ</sup></span>
                                    </div>
                                    <div class="new_product text-center">
                                        &nbsp;<span>_new_&nbsp;
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <a href="#"><img data-original="https://pubcdn.ivymoda.com/files/product/thumab/400/2021/09/11/8e5d495f91f562e48d76ae9b904c9b81.JPG" class="lazy " /></a>
                                    <div class="title_product"><a href="#">Quần lửng nam khaki MS 21E3000</a></div>
                                    <div class="price_product text-center">
                                        <span class="price_product_sale">890.000 <sup>đ</sup></span>
                                    </div>
                                    <div class="new_product text-center">
                                        &nbsp;<span>_new_&nbsp;
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <a href="#"><img data-original="https://pubcdn.ivymoda.com/files/product/thumab/400/2021/09/10/719e39d99508e40510a35d405c16d8d4.JPG" class="lazy " /></a>
                                    <div class="title_product"><a href="#">Quần lửng nam khaki MS 21E3000</a></div>
                                    <div class="price_product text-center">
                                        <span class="price_product_sale">890.000 <sup>đ</sup></span>
                                    </div>
                                    <div class="new_product text-center">
                                        &nbsp;<span>_new_&nbsp;
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 last_products">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 hidden-xs">

                                </div>
                                <div id="phantrang" class="col-md-6 col-sm-6 text-right">
                                    <ul class="list-inline">
                                        <li><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve/3?hid_row=4&amp;dong_sp=&amp;nhom_sp=">Trang đầu</a></li>
                                        <li><a href="javascript:void(0)">&laquo;</a></li>
                                        <li><a href="javascript:void(0)" id="products_active_ts">1</a></li>
                                        <li><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve/2?hid_row=4&amp;dong_sp=&amp;nhom_sp=">2</a></li>
                                        <li><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve/3?hid_row=4&amp;dong_sp=&amp;nhom_sp=">3</a></li>
                                        <li><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve/2?hid_row=4&amp;dong_sp=&amp;nhom_sp=">&raquo;</a></li>
                                        <li><a href="https://ivymoda.com/danh-muc/hang-nam-moi-ve/3?hid_row=4&amp;dong_sp=&amp;nhom_sp=">Trang cuối</a></li>
                                    </ul>

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