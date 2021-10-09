<div id="register" class="row title_h3">
    <div class="container">
        <h3>Đăng ký</h3>
        <?php
        if (!empty($_SESSION['register_error'])) {
            echo '<div class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>';
            if (isset($_SESSION['register_error']['email'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['email'] . '<br>';
                unset($_SESSION['register_error']['email']);
            }
            if (isset($_SESSION['register_error']['password'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['password'] . '<br>';
                unset($_SESSION['register_error']['password']);
            }
            if (isset($_SESSION['register_error']['password_length'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['password_length'] . '<br>';
                unset($_SESSION['register_error']['password_length']);
            }
            if (isset($_SESSION['register_error']['first_name'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['first_name'] . '<br>';
                unset($_SESSION['register_error']['first_name']);
            }
            if (isset($_SESSION['register_error']['last_name'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['last_name'] . '<br>';
                unset($_SESSION['register_error']['last_name']);
            }
            if (isset($_SESSION['register_error']['phone'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['phone'] . '<br>';
                unset($_SESSION['register_error']['phone']);
            }
            if (isset($_SESSION['register_error']['dob'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['dob'] . '<br>';
                unset($_SESSION['register_error']['dob']);
            }
            if (isset($_SESSION['register_error']['gender'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['gender'] . '<br>';
                unset($_SESSION['register_error']['gender']);
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
            if (isset($_SESSION['register_error']['email_exist'])) {
                echo '<strong>Lỗi!</strong> ' . $_SESSION['register_error']['email_exist'] . '<br>';
                unset($_SESSION['register_error']['email_exist']);
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
        <div id="error-area" class="alert alert-danger alert-dismissable" style="margin-bottom: 10px; margin-top: 10px; display: none;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
            <div id="error-block">
            </div>
        </div>
        <div class="row">
            <form name="frm_register" id="frm_register" method="post">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Thông tin khách hàng</h4>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Họ:<span>*</span></b></p>
                            <input type="text" value="<?php if (isset($_SESSION['register_input']['first_name'])) {
                                                            echo $_SESSION['register_input']['first_name'];
                                                        } ?>" name="first_name" placeholder="Họ..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Tên:<span>*</span></b></p>
                            <input type="text" value="<?php if (isset($_SESSION['register_input']['last_name'])) {
                                                            echo $_SESSION['register_input']['last_name'];
                                                        } ?>" name="last_name" placeholder="Tên..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Email:<span>*</span></b></p>
                            <input type="email" name="email" value="<?php if (isset($_SESSION['register_input']['email'])) {
                                                                        echo $_SESSION['register_input']['email'];
                                                                    } ?>" placeholder="Email..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Điện thoại:<span>*</span></b></p>
                            <input type="text" value="<?php if (isset($_SESSION['register_input']['phone'])) {
                                                            echo $_SESSION['register_input']['phone'];
                                                        } ?>" name="phone" placeholder="Điện thoại..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Ngày sinh:<span>*</span></b></p>
                            <input type="text" class="datepicker" name="dob" value="<?php if (isset($_SESSION['register_input']['dob'])) {
                                                                                        echo $_SESSION['register_input']['dob'];
                                                                                    } ?>" placeholder="Ngày sinh..." required />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Giới tính:<span>*</span></b></p>
                            <select name="gender">
                                <option value="1" <?php if (isset($_SESSION['register_input']['gender'])) {
                                                        if ($_SESSION['register_input']['gender'] == 1) {
                                                            echo 'selected';
                                                        }
                                                    } ?>>Nam</option>
                                <option value="2" <?php if (isset($_SESSION['register_input']['gender'])) {
                                                        if ($_SESSION['register_input']['gender'] == 2) {
                                                            echo 'selected';
                                                        }
                                                    } ?>>Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Tỉnh/TP:<span>*</span></b></p>
                            <select name="city" id="city" required>
                                <option value="">Chọn Tỉnh/Tp</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p><b>Quận/Huyện:<span>*</span></b></p>
                            <select name="district" id="district" required>
                                <option value="">Chọn Quận/Huyện</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Phường/Xã:<span>*</span></b></p>
                            <select name="ward" id="ward" required>
                                <option value="">Chọn Phường/Xã</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Địa chỉ:<span>*</span></b></p>
                            <textarea name="address" required><?php if (isset($_SESSION['register_input']['address'])) {
                                                            echo $_SESSION['register_input']['address'];
                                                        } ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Thông tin mật khẩu</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Mật khẩu:<span>*</span></b></p>
                            <input type="password" value="" name="password" id="customer_pass1" placeholder="Mật khẩu..." required autocomplete="false"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p><b>Nhập lại mật khẩu:<span>*</span></b></p>
                            <input type="password" value="" name="confirm_password" id="customer_pass2" placeholder="Nhập lại mật khẩu..." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="checkbox" <?php if (isset($_SESSION['register_input'])) {
                                                        echo 'checked';
                                                    } ?> id="checkboxRegister_1" name="customer_agree" value="1" style="width: 15px; height: 17px; vertical-align: sub" /> Tôi đồng ý với các <a href="<?php echo SCRIPT_ROOT . '/about/chinh-sach-bao-hanh' ?>" target="_blank">điều khoản của Ivy</a><em class="required">*</em></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="submit">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.title = "Đăng ký tài khoản  | IVY moda";
</script>
<script>
    const cityElement = document.querySelector('#city');
    const districtElement = document.querySelector('#district');
    const wardElement = document.querySelector('#ward');
    const cityCode = <?php if (isset($_SESSION['register_input']['city'])) {
                            echo $_SESSION['register_input']['city'];
                        } else {
                            echo 'undefined';
                        } ?>;
    const districtCode = <?php if (isset($_SESSION['register_input']['district'])) {
                                echo $_SESSION['register_input']['district'];
                            } else {
                                echo 'undefined';
                            } ?>;
    const wardCode = <?php if (isset($_SESSION['register_input']['ward'])) {
                            echo $_SESSION['register_input']['ward'];
                        } else {
                            echo 'undefined';
                        } ?>;
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
<script>
    const formElement = document.querySelector('#frm_register');
    const errorAreaElement = document.querySelector('#error-area');
    const errorBlockElement = document.querySelector('#error-block');
    const password = document.querySelector('#customer_pass1');
    const confirm_password = document.querySelector('#customer_pass2');
    const checkboxRegister = document.querySelector('#checkboxRegister_1');
    formElement.onsubmit = function(e) {
        e.preventDefault();
        var htmls = '';
        if (password.value !== confirm_password.value) {
            errorAreaElement.style.display = 'block';
            htmls += '<strong>Lỗi!</strong> Mật khẩu không giống nhau<br>';
        } else if (password.value.length < 6 || password.value.length > 32) {
            errorAreaElement.style.display = 'block';
            htmls += '<strong>Lỗi!</strong> Vui lòng nhập mật khẩu độ dài từ 6 tới 32 ký tự<br>';
        }

        if (!checkboxRegister.checked) {
            errorAreaElement.style.display = 'block';
            htmls += '<strong>Lỗi!</strong> Vui lòng đồng ý với các điều khoản của IVY moda.<br>';
        }
        if (htmls === '') {
            formElement.submit();
        } else {
            errorBlockElement.innerHTML = htmls;
        }
    }
</script>