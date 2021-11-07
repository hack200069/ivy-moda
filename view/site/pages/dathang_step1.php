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
                        <tfoot>
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
                <h5>Địa chỉ giao hàng <small><a href="<?= SCRIPT_ROOT ?>/customer/address_list">(Quản lý địa chỉ)</a></small></h5>
                <form>
                    <div class="pay_hidden_ts_main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default address-item address-default">
                                    <div class="panel-body panel-address">
                                        <div style="padding-left: 0px;padding-right: 0px; float: left; height: 70px; width: 40px; padding-top: 7px;">
                                            <input type="radio" class="form-radio radio_address" checked>
                                        </div>
                                        <div class="col-md-11" style="padding: 0">
                                            <p class="addr-name">
                                                <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>
                                            </p>
                                            <p class="addr-address" title="so 10">Địa chỉ: <?= $_SESSION['user']['address'] ?>, <span id="ward" style="background-color: transparent;"></span>, <span id="district" style="background-color: transparent;"></span>, <span id="city" style="background-color: transparent;"></span></p>
                                            <p class="addr-phone">
                                                Điện thoại: <?= $_SESSION['user']['phone'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <p>Bạn muốn giao hàng đến địa chỉ khác? <a href="<?= SCRIPT_ROOT ?>/customer/address_edit" class="btn-add-address" style="text-decoration: underline">Thay đổi địa chỉ giao hàng ngay</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pay1_Dieuhuong">
                                <a id="but-cancel-cart" href="<?= SCRIPT_ROOT ?>/thanhtoan/giohang" class="pull-left">&#60;&#60; Quay lại giỏ hàng</a>
                                <button type="button" onclick="location.href='<?= SCRIPT_ROOT ?>/thanhtoan/dathang_step2'" class="pull-right">Thanh toán và giao hàng</button>
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
<script>
    const cityElement = document.querySelector('#city');
    const districtElement = document.querySelector('#district');
    const wardElement = document.querySelector('#ward');
    fetch('https://provinces.open-api.vn/api/w/')
        .then((response) => {
            return response.json().then((wards) => {
                var htmls = wards.map((ward, index) => {
                    return (ward.district_code == <?= $_SESSION['user']['district'] ?> && ward.code == <?= $_SESSION['user']['ward'] ?>) ? ward.name : '';
                });
                wardElement.innerHTML = htmls.join('');
            }).catch((err) => {
                console.log(err);
            })
        });
    fetch('https://provinces.open-api.vn/api/d/')
        .then((response) => {
            return response.json().then((districts) => {
                var htmls = districts.map((district, index) => {
                    return (district.province_code == <?= $_SESSION['user']['city'] ?> && district.code == <?= $_SESSION['user']['district'] ?>) ? district.name : '';
                });
                districtElement.innerHTML = htmls.join('');
            }).catch((err) => {
                console.log(err);
            })
        });
    fetch('https://provinces.open-api.vn/api/')
        .then((response) => {
            return response.json().then((citys) => {
                var htmls = citys.map((city, index) => {
                    return city.code == <?= $_SESSION['user']['city'] ?> ? city.name : '';
                });
                cityElement.innerHTML = htmls.join('');
            }).catch((err) => {
                console.log(err);
            })
        });
</script>