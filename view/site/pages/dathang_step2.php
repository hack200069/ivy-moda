<form action="<?=SCRIPT_ROOT?>/thanhtoan/submit_order" id="frm_step2" name="frm_step2" method="post">
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
                    <div class="circle "><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                </div>
                <div class="pbarcart">
                    <div class="text">Thanh toán</div>
                    <div class="bar"></div>
                    <div class="circle active"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="pay_2" class="row title_h3 pay">
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
                                    <th class="text-center">SL</th>
                                    <th class="text-right">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody id="box_product_sub">
                                <?php
                                foreach ($list_product_in_cart as $product) {
                                    echo '<tr>';
                                    echo '<td>';
                                    echo '<p>' . $product['name'] . '</p>';
                                    echo '<p>' . substr($product['name'], strrpos($product['name'], " ")) . ' / <b>' . number_format($product['price']) . '<sup>đ</sup></b></p>';
                                    echo '</td>';
                                    echo '<td class="text-center">' . ($product['discount_fifty_percent'] == 0 ? number_format($product['price'] * $product[3] * 0.5) : '') . '</td>';
                                    echo '<td class="text-center">' . $product[3] . '</td>';
                                    echo '<td class="text-right">' . ($product['discount_fifty_percent'] == 0 ? number_format($product['price'] * $product[3] * 0.5) : number_format($product['price'] * $product[3])) . '<sup>đ</sup></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                            <tfoot id="box_product_total">
                                <tr>
                                    <td colspan="3">Tổng tiền hàng</td>
                                    <td class="text-right"><b><?= number_format($total_amount_before_discount) ?><sup>đ</sup></b></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Giảm giá</td>
                                    <td class="text-right"><b><?= number_format($total_amount_before_discount - $total_amount_after_discount) ?><sup>đ</sup></b></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Tạm tính</td>
                                    <td class="text-right"><b><?= number_format($total_amount_after_discount) ?><sup>đ</sup></b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 pull-left col-xs-12">
                    <h5>Phương thức giao hàng</h5>
                    <ul class="list-unstyled" id="box_shipping_method">
                        <li>
                            <input id="shipping_method_1" type="radio" checked value="1" checked /> <label>Giao hàng chuyển phát nhanh </label>
                            <br><small>Chuyển hàng tới địa chỉ khách hàng.</small>
                        </li>
                    </ul>
                    <h5>Phương thức thanh toán</h5>
                    <p class="pay_text_ts">Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                    <ul class="list-unstyled" style="margin-bottom: 30px">
                        <!---->
                        <li style="clear: both; padding-bottom: 5px">
                            <input id="payment_method_9" disabled type="radio" value="9" /> <label> Thanh toán bằng Ví IVY</label>
                            (chỉ còn 0 <sup>đ</sup>, <strong><a href="https://ivymoda.com/customer/wallet_add">click đây để nạp tiền vào Ví IVY)</a></strong>
                        </li>
                        <li style="clear: both; padding-bottom: 5px">
                            <input id="payment_method_1" disabled type="radio" value="1" /> <label> Thanh toán bằng thẻ tín dụng(OnePay)</label>
                            <div>
                                <img src="https://pubcdn.ivymoda.com/images/1.png" class="">
                            </div>
                        </li>
                        <li style="clear: both; padding-bottom: 5px">
                            <input id="payment_method_2" disabled type="radio" value="2" /> <label> Thanh toán bằng thẻ ATM(OnePay)</label>
                            <div>
                                <img src="https://pubcdn.ivymoda.com/images/2.png" class="">
                                Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam.
                            </div>
                        </li>
                        <li style="clear: both; padding-bottom: 5px">
                            <input id="payment_method_5" disabled type="radio" value="5" /> <label> Thanh toán Momo</label>
                            <div>
                                <img src="https://pubcdn.ivymoda.com/images/5.png" class="">
                            </div>
                        </li>
                        <li style="clear: both; padding-bottom: 5px">
                            <input id="payment_method_3" type="radio" value="3" checked /> <label> Thu tiền tận nơi</label>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 box-order-complete" style="margin-top: 0px;">
                            <a id="but-cancel-step1" href="<?= SCRIPT_ROOT ?>/thanhtoan/dathang_step1" class="">&#60;&#60; Quay lại</a>
                            <div class="pull-right">
                                <button type="submit" class="pull-right but-complete" id="but_step2">
                                    Hoàn thành
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = "Đặt hàng Bước 2 | IVY moda";
</script>