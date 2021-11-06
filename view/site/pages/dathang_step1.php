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
                <div class="circle active"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            </div>
            <div class="pbarcart">
                <div class="text">Thanh toán</div>
                <div class="bar"></div>
                <div class="circle "><i class="fa fa-credit-card" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
</div>
<div id="pay" class="row title_h3 pay">
    <div class="container">
        <!--<h3>Tiến hành thanh toán</h3>-->
        <div class="row">
            <div class="col-md-5 col-sm-5 pull-right col-xs-12">
                <div class="col-md-12">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th class="text-center">Giảm giá</th>
                                <th class="text-center">Số lượng</th>
                                <th class="text-right">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Áo sơ mi nam họa tiết MS 16E3107</p>
                                    <p>XXL / Đen </p>
                                    <p>16E3107 / <b>1.090.000<sup>đ</sup></b></p>
                                </td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">1</td>
                                <td class="text-right">1.090.000<sup>đ</sup></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">Tổng tiền hàng <b>1.090.000<sup>đ</sup></b></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3">Tạm tính</td>
                                <td class="text-right"><b>1.090.000<sup>đ</sup></b></td>
                            </tr>
                        </tfoot>

                    </table>


                </div>

            </div>
            <div class="col-md-7 col-sm-7 pull-left col-xs-12">
                <h5>Vui lòng chọn địa chỉ giao hàng <small><a href="https://ivymoda.com/customer/address_list">(Quản lý địa chỉ)</a></small></h5>
                <form action="" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="pay_hidden_ts_main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default address-item address-default">
                                    <div class="panel-body panel-address">
                                        <div style="padding-left: 0px;padding-right: 0px; float: left; height: 70px; width: 40px; padding-top: 7px;">
                                            <input type="radio" class="form-radio radio_address" name="radio_address" value="585677" checked>
                                        </div>
                                        <div class="col-md-11" style="padding: 0">
                                            <p class="addr-name">
                                                van adsa
                                                &nbsp;<span class="label label-info pull-right" style="margin-left: 10px; padding: 0.35em .6em .3em; ">Mặc định</span>&nbsp;
                                                &nbsp;<span class="label label-info pull-right btn-edit-address" data-address-id="585677" style="cursor: pointer; padding: 0.35em .6em .3em; width: 48px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</span>&nbsp;
                                            </p>
                                            <p class="addr-address" title="so 10">Địa chỉ: so 10, Hòa Mục, Chợ Mới, Bắc Cạn</p>
                                            <p class="addr-phone">
                                                Điện thoại: 0930324323
                                            </p>
                                            <!--<p class="action padding-top-5">-->
                                            <!--<a class="but-common-black but-address-choose" data-address-id="585677" id="but-checkout-continue-step2" href="javascript:;">Giao đến địa chỉ này</a>-->
                                            <!--<a class="but-common-white btn-edit-address"  data-address-id="585677">Sửa</a>-->
                                            <!---->
                                            <!--</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Bạn muốn giao hàng đến địa chỉ khác? <a href="javascript:;" class="btn-add-address" style="text-decoration: underline">Thêm địa chỉ giao hàng mới</a></p>
                            </div>
                        </div>
                        <div class="row box-address-show" style="display: none">

                        </div>
                        <div class="row">
                            <div class="col-md-12 pay1_Dieuhuong">
                                <a id="but-cancel-cart" href="https://ivymoda.com/thanhtoan/giohang" class="pull-left">&#60;&#60; Quay lại giỏ hàng</a>
                                <button id="but-checkout-continue-step2" type="button" class="pull-right but-checkout-choose-address">Thanh toán và giao hàng</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.title = "Đặt hàng Bước 1 | IVY moda";
</script>