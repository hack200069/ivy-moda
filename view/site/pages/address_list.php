<form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
    <div id="infouser" class="row title_h3">
        <div class="container">
            <?php
            if (isset($_SESSION['register_success'])) {
                echo '<div class="alert alert-success alert-dismissable" style="margin-bottom: 10px; margin-top: 10px;">
            <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Thay đổi địa chỉ nhận hàng thành công!</strong><br>
            </div>';
                unset($_SESSION['register_success']);
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
                    <div class="row">
                        <div class="col-md-12 tab-content">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] . ' - ' . $_SESSION['user']['phone'] ?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <p>
                                                <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>
                                                <br /><?= $_SESSION['user']['address'] ?>
                                                <br /><span id="ward"></span>, <span id="district"></span>, <span id="city"></span>
                                                <br />Điện thoại: <?= $_SESSION['user']['phone'] ?>
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                            <p class="pull-right">
                                                <a class="label label-info" href="<?= SCRIPT_ROOT ?>/customer/address_edit">Sửa</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.title = "Cập nhật địa chỉ | IVY moda";
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