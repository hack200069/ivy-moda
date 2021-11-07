<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo '
        <link rel="icon" href="' . SCRIPT_ROOT . '/public/images/logo-icon.ico" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/fontawesome-free/css/all.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="' . SCRIPT_ROOT . '/public/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Parent Category -->
        <script src="' . SCRIPT_ROOT . '/public/js/parentCategory.min.js"></script>
        ';
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo SCRIPT_ROOT ?>/" class="nav-link">Website</a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo SCRIPT_ROOT ?>/admin" class="brand-link">
                <img src="<?php echo SCRIPT_ROOT ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Quản lý Website</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo SCRIPT_ROOT ?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="<?php echo SCRIPT_ROOT ?>/admin" class="d-block"><?php echo $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin" class="nav-link" id="dashboard-nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/order" class="nav-link" id="order-nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Đơn hàng
                                    <span class="badge badge-danger right"><?=$_SESSION['total_non_confirm_order'] > 0 ? $_SESSION['total_non_confirm_order'].' đơn chưa xử lý' : ''?></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/customer" class="nav-link" id="customer-nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Khách hàng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/category" class="nav-link" id="category-nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Danh mục
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/product" class="nav-link" id="product-nav-link">
                                <i class="nav-icon fas fa-tshirt"></i>
                                <p>
                                    Sản phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo SCRIPT_ROOT ?>/admin/news" class="nav-link" id="news-nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Tin tức
                                </p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>