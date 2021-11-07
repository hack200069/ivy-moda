<style>
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }
</style>
<div id="infouser" class="row title_h3">
    <div class="container">
        <h3>Quản lý đơn hàng</h3>
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tài khoản của tôi</div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="row">
                                    <ul class="nav" role="tablist">
                                        <li role="presentation" class="active"><a href="<?= SCRIPT_ROOT ?>/customer/info" aria-controls="bangthongtintaikhoan">Bảng thông tin tài khoản</a></li>
                                        <li role="presentation" class=""><a href="<?= SCRIPT_ROOT ?>/customer/address_list" aria-controls="sodiachi">Địa chỉ nhận hàng</a></li>
                                        <li role="presentation" class=""><a href="<?= SCRIPT_ROOT ?>/customer/order_list" aria-controls="quanlydonhang">Quản lý đơn hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-12 clearfix">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#dang_xu_ly">Đang xử lý (<?= $total_non_confirm ?>)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_xac_nhan">Đã xác nhận (<?= $total_confirm ?>)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_nhan_hang">Đã nhận hàng (<?= $total_complete ?>)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_huy">Đã hủy (<?= $total_cancel ?>)</a></li>
                </ul>
                <div class="tab-content">
                    <div id="dang_xu_ly" class="tab-pane fade in ">
                        <?php if ($total_non_confirm > 0) : ?>
                            <div class="row" style="padding-top: 10px">
                                <div class="col-md-12">
                                    <table class="table table-hover table-condensed" id="my-orders-table">
                                        <thead>
                                            <tr class="first last">
                                                <th>Mã đơn: </th>
                                                <th><span class="nobr">Tổng cộng</span></th>
                                                <th><span class="nobr">Trạng thái</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="font12">
                                            <?php
                                            foreach ($list_non_confirm as $order) {
                                                echo '<tr class="first last odd">';
                                                echo '<td>'.$order[0].'</td>';
                                                echo '<td><span class="price">'.number_format($order['total']).' ₫</span></td>';
                                                echo '<td class="last"><b>Đơn đang xử lý</b><br>';
                                                echo '<em><a href="'.SCRIPT_ROOT.'/customer/order_cancel/'.$order[0].'" class="cancelOrder" style="text-decoration: underline">Hủy đơn</a> </em>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div id="da_xac_nhan" class="tab-pane fade in ">
                        <?php if ($total_confirm > 0) : ?>
                            <div class="row" style="padding-top: 10px">
                                <div class="col-md-12">
                                    <table class="table table-hover table-condensed" id="my-orders-table">
                                        <thead>
                                            <tr class="first last">
                                                <th>Mã đơn: </th>
                                                <th><span class="nobr">Tổng cộng</span></th>
                                                <th><span class="nobr">Trạng thái</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="font12">
                                            <?php
                                            foreach ($list_confirm as $order) {
                                                echo '<tr class="first last odd">';
                                                echo '<td>'.$order[0].'</td>';
                                                echo '<td><span class="price">'.number_format($order['total']).' ₫</span></td>';
                                                echo '<td class="last"><b>Đơn đang đang gửi đến bạn</b><br>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div id="da_nhan_hang" class="tab-pane fade in ">
                        <?php if ($total_complete > 0) : ?>
                            <div class="row" style="padding-top: 10px">
                                <div class="col-md-12">
                                    <table class="table table-hover table-condensed" id="my-orders-table">
                                        <thead>
                                            <tr class="first last">
                                                <th>Mã đơn: </th>
                                                <th><span class="nobr">Tổng cộng</span></th>
                                                <th><span class="nobr">Trạng thái</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="font12">
                                            <?php
                                            foreach ($list_complete as $order) {
                                                echo '<tr class="first last odd">';
                                                echo '<td>'.$order[0].'</td>';
                                                echo '<td><span class="price">'.number_format($order['total']).' ₫</span></td>';
                                                echo '<td class="last"><b>Đơn hàng đã gửi đến bạn</b><br>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                    <div id="da_huy" class="tab-pane fade in ">
                        <?php if ($total_cancel > 0) : ?>
                            <div class="row" style="padding-top: 10px">
                                <div class="col-md-12">
                                    <table class="table table-hover table-condensed" id="my-orders-table">
                                        <thead>
                                            <tr class="first last">
                                                <th>Mã đơn: </th>
                                                <th><span class="nobr">Tổng cộng</span></th>
                                                <th><span class="nobr">Trạng thái</span></th>
                                            </tr>
                                        </thead>
                                        <tbody class="font12">
                                            <?php
                                            foreach ($list_cancel as $order) {
                                                echo '<tr class="first last odd">';
                                                echo '<td>'.$order[0].'</td>';
                                                echo '<td><span class="price">'.number_format($order['total']).' ₫</span></td>';
                                                echo '<td class="last"><b>Đơn hàng đã hủy</b><br>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.title = "Danh sách đơn hàng | IVY moda";
</script>
<script>
    var cancelElements = document.querySelectorAll('.cancelOrder');
    for (var i = 0; i < cancelElements.length; i++) {
        cancelElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn hủy đơn hàng này?")) {
                e.preventDefault();
            }
        });
    }
</script>