<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Danh mục</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <?php
            if (!empty($_SESSION['block_customer_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Khóa tài khoản thành công<br>
                    </div>
                    ';
                unset($_SESSION['block_customer_success']);
            } else if (!empty($_SESSION['block_customer_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Khóa tài khoản thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['block_customer_error']);
            } else if (!empty($_SESSION['unlock_customer_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Mở khóa tài khoản thành công<br>
                    </div>
                    ';
                unset($_SESSION['unlock_customer_success']);
            } else if (!empty($_SESSION['unlock_customer_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Mở khóa tài khoản thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['unlock_customer_error']);
            }
            ?>
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-12">
                            <form method="get">
                                <div class="input-group rounded">
                                    <input type="search" name="q" class="form-control rounded" value="<?php if (isset($q)) echo $q ?>" placeholder="Tìm kiếm">
                                    <button class="input-group-text border-0" id="search-addon" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <script>
                            var cityData;
                            var districtData;
                            var wardData;

                            (function getAPIData() {
                                if (!cityData || !districtData || !wardData) {
                                    fetch('https://provinces.open-api.vn/api/')
                                        .then(res => res.json())
                                        .then(data => cityData = data);
                                    fetch('https://provinces.open-api.vn/api/d/')
                                        .then(res => res.json())
                                        .then(data => districtData = data);
                                    fetch('https://provinces.open-api.vn/api/w/')
                                        .then(res => res.json())
                                        .then(data => wardData = data);
                                }
                            })();
                        </script>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Giới tính</th>
                                            <th>Ngày sinh</th>
                                            <th>Địa chỉ</th>
                                            <th style="text-align: center;">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($customers as $customer) { ?>
                                            <tr role="row" class="odd">
                                                <td><?= $customer['name'] ?></td>
                                                <td><?= $customer['email'] ?></td>
                                                <td><?= $customer['phone'] ?></td>
                                                <td><?= $customer['gender'] == 1 ? 'Nam' : 'Nữ' ?></td>
                                                <td><?= $customer['dob'] ?></td>
                                                <td><?= $customer['address'] ?>, <span id="ward<?= $customer['id'] ?>"></span>, <span id="district<?= $customer['id'] ?>"></span>, <span id="city<?= $customer['id'] ?>"></span></td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    if (stripos($customer['password'], '$') == 0) {
                                                        echo '<span class="badge bg-danger">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/customer/block/' . $customer['id'] .'" class="blockCustomer" title="Khóa tài khoản">';
                                                        echo '<ion-icon name="lock-closed-outline"></ion-icon></a></span>';
                                                    } else {
                                                        echo '<span class="badge bg-warning">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/customer/unlock/' . $customer['id'] .'" class="unlockCustomer" title="Mở khóa tài khoản">';
                                                        echo '<ion-icon name="lock-open-outline"></ion-icon></a></span>';
                                                    }
                                                    ?>
                                                </td>
                                                <script>
                                                    setTimeout(function() {
                                                        var cityElement<?= $customer['id'] ?> = document.querySelector('#city<?= $customer['id'] ?>');
                                                        var districtElement<?= $customer['id'] ?> = document.querySelector('#district<?= $customer['id'] ?>');
                                                        var wardElement<?= $customer['id'] ?> = document.querySelector('#ward<?= $customer['id'] ?>');
                                                        var htmls = wardData.map((ward, index) => {
                                                            return (ward.district_code == <?= $customer['district'] ?> && ward.code == <?= $customer['ward'] ?>) ? ward.name : '';
                                                        });
                                                        wardElement<?= $customer['id'] ?>.innerHTML = htmls.join('');
                                                        var htmls = districtData.map((district, index) => {
                                                            return (district.province_code == <?= $customer['city'] ?> && district.code == <?= $customer['district'] ?>) ? district.name : '';
                                                        });
                                                        districtElement<?= $customer['id'] ?>.innerHTML = htmls.join('');
                                                        var htmls = cityData.map((city, index) => {
                                                            return city.code == <?= $customer['city'] ?> ? city.name : '';
                                                        });
                                                        cityElement<?= $customer['id'] ?>.innerHTML = htmls.join('');
                                                    }, 2000);
                                                </script>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Giới tính</th>
                                            <th>Ngày sinh</th>
                                            <th>Địa chỉ</th>
                                            <th style="text-align: center;">#</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer clearfix">
                    <?php
                    if ($total_pages > 1) {
                        if (isset($q)) {
                            echo '<ul class="pagination pagination-sm m-0 float-right">';
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=1&q=' . $q . '">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $i . '&q=' . $q . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $total_pages . '&q=' . $q . '">»</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<ul class="pagination pagination-sm m-0 float-right">';
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=1">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $i . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/category?page_no=' . $total_pages . '">»</a></li>';
                            echo '</ul>';
                        }
                    }
                    ?>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>

<script>
    document.title = "Danh sách khách hàng | IVY moda";
</script>
<script>
    var blockElements = document.querySelectorAll('.blockCustomer');
    for (var i = 0; i < blockElements.length; i++) {
        blockElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn khóa tài khoản khách hàng này?")) {
                e.preventDefault();
            }
        });
    }
    var unlockElements = document.querySelectorAll('.unlockCustomer');
    for (var i = 0; i < unlockElements.length; i++) {
        unlockElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn mở khóa tài khoản khách hàng này?")) {
                e.preventDefault();
            }
        });
    }
</script>