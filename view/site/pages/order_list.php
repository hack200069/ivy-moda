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
                    <li class="active"><a data-toggle="tab" href="#tao_don_hang">Đặt hàng thành công (0)</a></li>
                    <li class=""><a data-toggle="tab" href="#dang_xu_ly">Đang xử lý (1)</a></li>
                    <li class=""><a data-toggle="tab" href="#cho_giao_van">Chờ giao vận (0)</a></li>
                    <li class=""><a data-toggle="tab" href="#dang_van_chuyen">Đã gửi (0)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_nhan_hang">Đã nhận hàng (0)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_huy">Đã hủy (0)</a></li>
                    <li class=""><a data-toggle="tab" href="#da_tra_hang">Trả hàng (0)</a></li>
                    <!--<li><a data-toggle="tab" href="#tab_ch">Đơn hàng mua tại cửa hàng</a></li>-->
                </ul>
                <div class="tab-content">
                    <div id="tao_don_hang" class="tab-pane fade in active">
                    </div>
                    <div id="dang_xu_ly" class="tab-pane fade in ">
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <table class="table table-hover table-condensed" id="my-orders-table">
                                    <colgroup>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th>Mã đơn: </th>
                                            <th>Ngày</th>
                                            <th>Giao hàng tới</th>
                                            <th><span class="nobr">Tổng cộng</span></th>
                                            <th><span class="nobr">Trạng thái</span></th>
                                        </tr>
                                    </thead>
                                    <tbody class="font12">
                                        <tr class="first last odd">
                                            <td><a href="https://ivymoda.com/customer/order_detail/ivm4219215" style="text-decoration: underline">IVM4219215</a></td>
                                            <td><span class="nobr">06/11/2021</span></td>
                                            <td>
                                                dsada<br>
                                                Bà Rịa Vũng Tàu<br>
                                                Đất Đỏ<br>
                                            </td>
                                            <td><span class="price">630.000 ₫</span></td>
                                            <td class="last">
                                                <b>
                                                    Đơn đang xử lý
                                                </b>
                                                <br>
                                                <em><a href="javascript:;" class="but_order_cancel" data-invoice-no="ivm4219215" style="text-decoration: underline">Hủy đơn</a> </em>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="cho_giao_van" class="tab-pane fade in ">
                    </div>
                    <div id="dang_van_chuyen" class="tab-pane fade in ">
                    </div>
                    <div id="da_nhan_hang" class="tab-pane fade in ">
                    </div>
                    <div id="da_huy" class="tab-pane fade in ">
                    </div>
                    <div id="da_tra_hang" class="tab-pane fade in ">
                    </div>

                    <div id="tab_ch" class="tab-pane fade">
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>