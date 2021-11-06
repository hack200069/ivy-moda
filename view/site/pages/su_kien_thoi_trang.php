<div id="news" class="row title_h3">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="dieuhuong">
                <ul class="list-inline">
                    <li><a href="<?= SCRIPT_ROOT ?>">Trang chủ</a> <span>→</span></li>
                    <li><a href="javascript:void(0)" title="Tin tức">Tin tức</a> <span>→</span></li>
                </ul>
            </div>
        </div>

        <h3>Tin tức</h3>
        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <h4>Những tin tức nổi bật</h4>
                <ul class="list-unstyled">
                    <?php 
                        foreach($list_main_news as $news){
                            echo '<li><ul class="list-inline">';
                            echo '<li class="col-md-3 col-sm-4 col-xs-12"><a href="'.SCRIPT_ROOT.'/tin-tuc/bai-viet/'.$news['slug'].'"><img src="'.SCRIPT_ROOT.$news['image'].'" /></a></li>';
                            echo '<li class="col-md-9 col-sm-8 col-xs-12"><h5><a href="'.SCRIPT_ROOT.'/tin-tuc/bai-viet/'.$news['slug'].'">'.$news['title'].'</a></h5>';
                            echo '<div class="news_detail">Những năm gần đây, họa tiết hoa cúc đã trở nên quen thuộc trên các trang phục thời trang. Nàng đã sắm cho mình những mẫu váy hoa cúc cực đẹp này chưa? Nếu chưa hãy ngắm ngay những mẫu đầm hoa các mà IVY moda giới thiệu ngay sau đây nhé!</div></li>';
                            echo '</ul><div class="clearfix"></div></li>';
                        }
                    ?>
                </ul>
                <div id="phantrang" class="col-md-6 col-sm-6 text-right pull-right">
                    <?php
                    if ($total_pages > 1) {
                        echo '<ul class="list-inline">';
                        echo '<li><a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh?page_no=1">Trang đầu</a></li>';
                        if ($page_no == 1) {
                            echo ' <li><a href="javascript:void(0)">&laquo;</a></li>';
                        } else {
                            echo ' <li><a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh?page_no=' . ($page_no - 1) . '">&laquo;</a></li>';
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if ($page_no == $i)
                                echo '<li><a href="javascript:void(0)" id="products_active_ts">' . $i . '</a></li>';
                            else
                                echo '<li><a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh?page_no=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($page_no == $total_pages) {
                            echo ' <li><a href="javascript:void(0)">&raquo;</a></li>';
                        } else {
                            echo ' <li><a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh?page_no=' . ($page_no + 1) . '">&raquo;</a></li>';
                        }
                        echo '<li><a href="' . SCRIPT_ROOT . '/tin-tuc/tin-chinh?page_no=' . $total_pages . '">Trang cuối</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Danh mục
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/su-kien-thoi-trang">Sự kiện thời trang</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/blog">Blog chia sẻ</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/tin-noi-bo">Tin nội bộ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Tin mới nhất
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php
                            foreach ($ten_lastest_news as $news) {
                                echo '<li><a href="' . SCRIPT_ROOT . '/tin-tuc/bai-viet/' . $news['slug'] . '">' . $news['title'] . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Liên hệ
                    </div>
                    <div class="panel-body">
                        <b>Địa chỉ:</b>
                        <p>Tầng 14, Hapulico, 85 Vũ Trọng Phụng, Thanh Xuân, Hà Nội</p>
                        <b>Email:</b>
                        <p>saleadmin@ivy.com.vn</p>
                        <b>Hotline:</b>
                        <p>024 6662 3434</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.title = "Sự kiện thời trang | IVY moda";
</script>