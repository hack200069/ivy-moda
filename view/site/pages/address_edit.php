<form name="frm_register" method="post">
    <div id="infouser" class="row title_h3">
        <div class="container">
            <h3> Cập nhật địa chỉ nhận hàng
            </h3>
            <?php
        if (!empty($_SESSION['register_error'])) {
            echo '<div class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>';
            if (isset($_SESSION['register_error']['phone'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['phone'] . '<br>';
                unset($_SESSION['register_error']['phone']);
            }
            if (isset($_SESSION['register_error']['city'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['city'] . '<br>';
                unset($_SESSION['register_error']['city']);
            }
            if (isset($_SESSION['register_error']['district'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['district'] . '<br>';
                unset($_SESSION['register_error']['district']);
            }
            if (isset($_SESSION['register_error']['ward'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['ward'] . '<br>';
                unset($_SESSION['register_error']['ward']);
            }
            if (isset($_SESSION['register_error']['address'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['address'] . '<br>';
                unset($_SESSION['register_error']['address']);
            }
            if (isset($_SESSION['register_error']['phone_exist'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['phone_exist'] . '<br>';
                unset($_SESSION['register_error']['phone_exist']);
            }
            if (isset($_SESSION['register_error']['sthg_wrong'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['sthg_wrong'] . '<br>';
                unset($_SESSION['register_error']['sthg_wrong']);
            }
            unset($_SESSION['register_error']);
            echo '</div>';
        }
        ?>
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
                    <ul class="list-style-type-none" style="padding-top: 10px">
                        <li>
                            <div class="form-group two-fields">
                                <label for="phone">Điện thoại</label><em class="required">*</em>
                                <input type="text" value="<?= $_SESSION['user']['phone'] ?>" name="phone" id="phone" class="form-control" placeholder="Điện thoại" required>
                            </div>
                            <div class="form-group two-fields">
                                <label for="city">Tỉnh/Tp</label><em class="required">*</em>
                                <select name="city" class="form-control" id="city" required>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-group two-fields">
                                <label for="district">Quận/Huyện</label><em class="required">*</em>
                                <select name="district" class="form-control" id="district" required>
                                </select>
                            </div>
                            <div class="form-group two-fields">
                                <label for="ward">Phường/Xã</label><em class="required">*</em>
                                <select name="ward" class="form-control" id="ward" required>
                                </select>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                        <li>
                            <div class="form-group one-fields">
                                <label>Thông tin địa chỉ</label>
                                <p><textarea name="address" class="check_required" style="height: 80px;" name="address" required><?= $_SESSION['user']['address'] ?></textarea></p>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="divider"></div>
                    <div>
                        <button type="submit" class="but_pay_cart">Cập nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = 'Cập nhật địa chỉ | IVY moda';
</script>
<script>
    const cityElement = document.querySelector('#city');
    const districtElement = document.querySelector('#district');
    const wardElement = document.querySelector('#ward');
    const cityCode = <?= $_SESSION['user']['city'] ?>;
    const districtCode = <?= $_SESSION['user']['district'] ?>;
    const wardCode = <?= $_SESSION['user']['ward'] ?>;
    const province = {
        api: 'https://provinces.open-api.vn/api/',
        handleEvents: function() {
            const _this = this;

            cityElement.onchange = function() {
                _this.fetchDistrict(undefined, cityElement.value);
                _this.fetchWard();
            }

            districtElement.onchange = function() {
                _this.fetchWard(undefined, districtElement.value);
            }
        },
        fetchCity: function(city_code) {
            return fetch(this.api)
                .then((response) => {
                    return response.json().then((citys) => {
                        const htmls = citys.map((city, index) => {
                            return `<option value="${city.code}" ${ city.code == cityCode ? 'selected' : '' }>${city.name}</option>`
                        });
                        cityElement.innerHTML = `<option value="">Chọn Tỉnh/Tp</option>` + htmls.join('');
                    }).catch((err) => {
                        console.log(err);
                    })
                });
        },
        fetchDistrict: function(district_code, city_code) {
            return fetch(this.api + 'd/')
                .then((response) => {
                    return response.json().then((districts) => {
                        const htmls = districts.map((district, index) => {
                            return district.province_code == city_code ? `<option value="${district.code}" ${ district.code == districtCode ? 'selected' : '' }>${district.name}</option>` : '';
                        });
                        districtElement.innerHTML = `<option value="">Chọn Quận/Huyện</option>` + htmls.join('');
                    }).catch((err) => {
                        console.log(err);
                    })
                });
        },
        fetchWard: function(ward_code, district_code) {
            return fetch(this.api + 'w/')
                .then((response) => {
                    return response.json().then((wards) => {
                        const htmls = wards.map((ward, index) => {
                            return ward.district_code == district_code ? `<option value="${ward.code}" ${ ward.code == wardCode ? 'selected' : '' }>${ward.name}</option>` : '';
                        });
                        wardElement.innerHTML = `<option value="">Chọn Phường/Xã</option>` + htmls.join('');
                    }).catch((err) => {
                        console.log(err);
                    })
                });
        },
        start: function() {
            this.fetchCity();
            this.handleEvents();
            if (cityCode && districtCode && wardCode) {
                this.fetchCity(cityCode);
                this.fetchDistrict(districtCode, cityCode);
                this.fetchWard(wardCode, districtCode);
            }
        }
    }
    province.start();
</script>