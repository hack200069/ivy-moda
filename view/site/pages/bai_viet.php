<style>
    p .img-responsive {
        display: contents !important;
    }
</style>
<div id="news" class="row title_h3">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="dieuhuong">
                <ul class="list-inline">
                    <li><a href="<?= SCRIPT_ROOT ?>">Trang chủ</a> <span>→</span></li>
                    <li><a href="javascript:void(0)" title="Tin tức">Tin tức</a> <span>→</span></li>
                    <li><a href="javascript:void(0)" title="<?= $current_news['title'] ?>"><?= $current_news['title'] ?></a> <span>→</span></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
                <h1 class="art_h1"><?= $current_news['title'] ?></h1>
                <?= $current_news['detail'] ?>
            </div>
            <div class="col-md-3 col-sm-4 hidden-xs">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        Danh mục
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/su-kien-thoi-trang/1">Sự kiện thời trang</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/blog/1">Blog chia sẻ</a></li>
                            <li><a href="<?= SCRIPT_ROOT ?>/tin-tuc/danh-muc/tin-noi-bo/1">Tin nội bộ</a></li>
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
                                foreach($ten_lastest_news as $news){
                                    echo '<li><a href="'.SCRIPT_ROOT.'/tin-tuc/bai-viet/'.$news['slug'].'">'.$news['title'].'</a></li>';
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
    document.title = "<?= $current_news['title'] ?>" + " | IVY moda";
</script>