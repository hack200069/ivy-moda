<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Đơn hàng</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <?php
            if (!empty($_SESSION['confirm_order_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Xác nhận thành công<br>
                    </div>
                    ';
                unset($_SESSION['confirm_order_success']);
            } else if (!empty($_SESSION['confirm_order_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Xác nhận thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['confirm_order_error']);
            } else if (!empty($_SESSION['cancel_order_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Hủy đơn thành công<br>
                    </div>
                    ';
                unset($_SESSION['cancel_order_success']);
            } else if (!empty($_SESSION['cancel_order_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Hủy đơn thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['cancel_order_error']);
            } else if (!empty($_SESSION['complete_order_success'])) {
                echo '
                    <div class="alert alert-success alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thành công!</strong> Hoàn thành đơn thành công<br>
                    </div>
                    ';
                unset($_SESSION['complete_order_success']);
            } else if (!empty($_SESSION['complete_order_error'])) {
                echo '
                    <div class="alert alert-danger alert-dismissable">
                    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Lỗi!</strong> Hoàn thành đơn thất bại. Hãy thử lại sau<br>
                    </div>
                    ';
                unset($_SESSION['complete_order_error']);
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
                                            <th style="text-align: center;">Mã đơn</th>
                                            <th>Người đặt</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng tiền</th>
                                            <th style="text-align: center;">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($orders as $order) { ?>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center;"><?= $order[0] ?></td>
                                                <td><?= $order['first_name'] . ' ' . $order['last_name'] ?></td>
                                                <td><?= $order['address'] ?>, <span id="ward<?= $order[0] ?>"></span>, <span id="district<?= $order[0] ?>"></span>, <span id="city<?= $order[0] ?>"></span></td>
                                                <td>
                                                    <?php
                                                    if ($order['status'] == 1) {
                                                        echo 'Chưa xác nhận';
                                                    } else if ($order['status'] == 2) {
                                                        echo 'Đã xác nhận';
                                                    } else if ($order['status'] == 3) {
                                                        echo 'Đã hoàn thành';
                                                    } else if ($order['status'] == 4) {
                                                        echo 'Đã hủy';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?= number_format($order['total']) ?></td>
                                                <td style="text-align: center;">
                                                    <?php
                                                    if ($order['status'] == 1) {
                                                        echo '<span class="badge bg-info">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/order/confirm/' . $order[0] .'" class="confirmOrder" title="Xác nhận đơn hàng">';
                                                        echo '<ion-icon name="checkmark-circle-outline"></ion-icon></a></span>';
                                                        echo '<span class="ml-3 badge bg-danger">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/order/cancel/' . $order[0] .'" class="cancelOrder" title="Hủy đơn hàng">';
                                                        echo '<ion-icon name="close-circle-outline"></ion-icon></a></span>';
                                                    }
                                                    if ($order['status'] == 2) {
                                                        echo '<span class="badge bg-success">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/order/complete/' . $order[0] .'" class="completeOrder" title="Hoàn thành đơn hàng">';
                                                        echo '<ion-icon name="checkmark-done-outline"></ion-icon></a></span>';
                                                        echo '<span class="ml-3 badge bg-danger">';
                                                        echo '<a href="'. SCRIPT_ROOT . '/admin/order/cancel/' . $order[0] .'" class="cancelOrder" title="Hủy đơn hàng">';
                                                        echo '<ion-icon name="close-circle-outline"></ion-icon></a></span>';
                                                    }
                                                    ?>
                                                </td>
                                                <script>
                                                    setTimeout(function() {
                                                        var cityElement<?= $order[0] ?> = document.querySelector('#city<?= $order[0] ?>');
                                                        var districtElement<?= $order[0] ?> = document.querySelector('#district<?= $order[0] ?>');
                                                        var wardElement<?= $order[0] ?> = document.querySelector('#ward<?= $order[0] ?>');
                                                        var htmls = wardData.map((ward, index) => {
                                                            return (ward.district_code == <?= $order['district'] ?> && ward.code == <?= $order['ward'] ?>) ? ward.name : '';
                                                        });
                                                        wardElement<?= $order[0] ?>.innerHTML = htmls.join('');
                                                        var htmls = districtData.map((district, index) => {
                                                            return (district.province_code == <?= $order['city'] ?> && district.code == <?= $order['district'] ?>) ? district.name : '';
                                                        });
                                                        districtElement<?= $order[0] ?>.innerHTML = htmls.join('');
                                                        var htmls = cityData.map((city, index) => {
                                                            return city.code == <?= $order['city'] ?> ? city.name : '';
                                                        });
                                                        cityElement<?= $order[0] ?>.innerHTML = htmls.join('');
                                                    }, 2000);
                                                </script>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="text-align: center;">Mã đơn</th>
                                            <th>Người đặt</th>
                                            <th>Địa chỉ</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng tiền</th>
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
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=1&q=' . $q . '">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=' . $i . '&q=' . $q . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=' . $total_pages . '&q=' . $q . '">»</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<ul class="pagination pagination-sm m-0 float-right">';
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=1">«</a></li>';
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item';
                                if ($page_no == $i)
                                    echo ' active';
                                echo '"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=' . $i . '">' . $i . '</a></li>';
                            }
                            echo '<li class="page-item"><a class="page-link" href="' . SCRIPT_ROOT . '/admin/order?page_no=' . $total_pages . '">»</a></li>';
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
    document.title = "Quản lý đơn hàng | IVY moda";
</script>
<script>
    var cancelElements = document.querySelectorAll('.cancelOrder');
    for (var i = 0; i < cancelElements.length; i++) {
        cancelElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn hủy đơn hàng này?")) {
                e.preventDefault();
            }
        });
    }
    var confirmElements = document.querySelectorAll('.confirmOrder');
    for (var i = 0; i < confirmElements.length; i++) {
        confirmElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn xác nhận đơn hàng này?")) {
                e.preventDefault();
            }
        });
    }
    var completeElements = document.querySelectorAll('.completeOrder');
    for (var i = 0; i < completeElements.length; i++) {
        completeElements[i].addEventListener('click', function(e) {
            if (!confirm("Bạn có chắc chắn muốn hoàn thành đơn hàng này?")) {
                e.preventDefault();
            }
        });
    }
</script>