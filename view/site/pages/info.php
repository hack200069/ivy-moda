<div id="infouser" class="row title_h3">
    <div class="container">
        <h3>Thông tin khách hàng</h3>
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
                <div class="tab-content">
                    <!--Bảng thông tin tài khoản-->
                    <div role="tabpanel" class="tab-pane active" id="bangthongtintaikhoan">
                        <div class="page-title col-md-12 clearfix">
                            <h1>Bảng thông tin của tôi</h1>
                        </div>
                        <div class="row">
                            <div class="col-md-12 first_info">
                                <p>
                                    <b>Xin chào, <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></b>
                                    <br />
                                <div style="max-width:800px; margin-top:10px;">Từ bảng điều khiển bạn có thể xem ngắn gọn các giao dịch vừa thực hiện và cập nhật thông tin tài khoản.
                                    Lựa chọn đường dẫn dưới đây để xem hoặc chỉnh sửa thông tin.</div>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Thông tin tài khoản
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <h3>Liên hệ - <a href="<?= SCRIPT_ROOT ?>/customer/info_edit">Sửa</a></h3>
                                                <p>
                                                    <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>
                                                    <br />
                                                    <?= $_SESSION['user']['email'] ?>
                                                    <br />
                                                    <a href="<?= SCRIPT_ROOT ?>/customer/info_edit">Tôi muốn thay đổi mật khẩu</a>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h3>Địa chỉ nhận hàng</h3>
                                                <p>
                                                    <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>
                                                    <br /><?= $_SESSION['user']['address'] ?>
                                                    <br /><span id="ward"></span>, <span id="district"></span>, <span id="city"></span>
                                                    <br />Điện thoại: <?= $_SESSION['user']['phone'] ?>
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
    </div>
</div>
<script>
    document.title = "Thông tin tài khoản | IVY moda";
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