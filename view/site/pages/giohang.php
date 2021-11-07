<form name="frm_cart" id="frm_cart" method="post" action="" enctype="application/x-www-form-urlencoded">
    <div class="row" style="padding-bottom: 30px">
        <div class="container">
            <div class="progress_new">
                <div class="pbarcart">
                    <div class="text">Giỏ hàng</div>
                    <div class="bar"></div>
                    <div class="circle active"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                </div>
                <div class="pbarcart">
                    <div class="text">Địa chỉ giao hàng</div>
                    <div class="bar"></div>
                    <div class="circle "><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                </div>
                <div class="pbarcart">
                    <div class="text">Thanh toán</div>
                    <div class="bar"></div>
                    <div class="circle "><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="cart" class="row title_h3">
        <div class="container">
            <!--<h3>Giỏ hàng của bạn</h3>-->
            <div class="row">
                <?php if($total_product == 0): ?>
                <div class="col-md-12">
                    Giỏ hàng của bạn chưa có sản phẩm nào, hãy quay lại và chọn sản phẩm nhé.
                    <p><a href="<?=SCRIPT_ROOT?>">&lt;&lt; Quay lại mua sắm</a></p>
                </div>
                <?php endif;?>
                <?php if($total_product > 0): ?>
                <div class="col-md-8 col-sm-8">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th class="col-md-2 col-sm-2">Sản phẩm</th>
                                <th class="col-md-2 col-sm-2 hidden-xs">Tên sản phẩm</th>
                                <th class="col-md-1 col-sm-1">SL</th>
                                <th class="col-md-1 col-sm-1">Thành tiền</th>
                                <th class="col-md-1 col-sm-1">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_product_in_cart as $product) {
                                echo '<tr>';
                                echo '<td><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '"><img title="' . $product['name'] . '" src="' . SCRIPT_ROOT . $imageModel->getImageList($product['id'])[0]['link'] . '" /></a></td>';
                                echo '<td class="hidden-xs"><a href="' . SCRIPT_ROOT . '/sanpham/' . $product['slug'] . '" title="' . $product['name'] . '">' . $product['name'] . '</a></td>';
                                echo '<td>' . $product[3] . ' </td>';
                                echo '<td>1.090.000<sup>đ</sup></td>';
                                echo '<td><a href="' . SCRIPT_ROOT . '/cart/drop_item/' . $product[0] . '" title="Xóa" class="dropItem">x</a></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="col-md-12">
                        <h5>Tổng tiền giỏ hàng</h5>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tổng sản phẩm</td>
                                    <td><?= $total_product ?></td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền hàng</td>
                                    <td><?= number_format($total_amount_before_discount) ?><sup>đ</sup></td>
                                </tr>
                                <tr>
                                    <td>Thành tiền</td>
                                    <td><?= number_format($total_amount_after_discount) ?><sup>đ</sup></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Tạm tính</td>
                                    <td><?= number_format($total_amount_after_discount) ?><sup>đ</sup></td>
                                </tr>
                            </tfoot>

                        </table>
                        <!--Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 3.000.000 đ-->
                        <p class="text-center">Bạn sẽ được miễn phí ship khi đơn hàng của bạn có tổng giá trị trên 2.000.000 đ</p>
                        <?php
                        if ($total_amount_after_discount < 2000000) {
                            echo '<p class="text-center" style="color: red; font-weight: bold">Mua thêm <span style="font-size: 16px">' . number_format(2000000 - $total_amount_after_discount) . '</span> để được miễn phí SHIP</p>';
                        }
                        ?>
                        <p class="text-center">
                            <a href="javascript: window.history.back();" id="but-checkout-continue">Tiếp tục mua sắm</a>
                            <a href="<?= SCRIPT_ROOT ?>/thanhtoan/dathang_step1" id="but-checkout-step1">Thanh toán</a>
                        </p>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = "Giỏ hàng | IVY moda";
</script>
<script>
    var dropElements = document.querySelectorAll('.dropItem');
    for (var i = 0; i < dropElements.length; i++) {
        dropElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ?")) {
                e.preventDefault();
            }
        });
    }
</script>