<?php 
$router->get('/', 'HomeController@index');
$router->get('/customer/login', 'AccountController@login');
$router->post('/customer/login', 'AccountController@submitLogin');
$router->get('/customer/register', 'AccountController@register');
$router->post('/customer/register', 'AccountController@submitRegister');
$router->get('/customer/logout', 'AccountController@logout');

$router->get('/danh-muc/{slug}', 'CategoryController@detail');
$router->get('/sanpham/{slug}', 'ProductController@index');
$router->get('/tin-tuc/{slug}', 'NewsController@index');
$router->get('/tin-tuc/bai-viet/{slug}', 'NewsController@detail');
$router->get('/about/gioi-thieu', 'AboutController@gioi_thieu');
$router->get('/about/tu-van-size', 'AboutController@tu_van_size');
$router->get('/about/chinhsach-dieukhoan', 'AboutController@chinh_sach_dieu_khoan');
$router->get('/about/huong-dan-mua-hang', 'AboutController@huong_dan_mua_hang');
$router->get('/about/chinh-sach-thanh-toan', 'AboutController@chinh_sach_thanh_toan');
$router->get('/about/chinh-sach-doi-tra', 'AboutController@chinh_sach_doi_tra');
$router->get('/about/chinh-sach-bao-hanh', 'AboutController@chinh_sach_bao_hanh');
$router->get('/about/chinh-sach-giao-nhan-van-chuyen', 'AboutController@chinh_sach_giao_nhan_van_chuyen');
$router->get('/page/cuahang', 'AboutController@he_thong_cua_hang');
$router->get('/lien-he', 'ContactController@index');
$router->get('/admin', 'AdminController@index');
$router->get('/admin/order', 'OrderController@index');
$router->get('/admin/order/confirm', 'OrderController@confirm');
$router->get('/admin/order/complete', 'OrderController@complete');
$router->get('/admin/order/cancel', 'OrderController@cancel');
$router->get('/admin/customer', 'CustomerController@index');


$router->get('/admin/category', 'CategoryController@index');
$router->get('/admin/category/create', 'CategoryController@create');
$router->post('/admin/category/create', 'CategoryController@submitCreate');
$router->get('/admin/category/edit/{id}', 'CategoryController@edit');
$router->post('/admin/category/edit/{id}', 'CategoryController@submitEdit');
$router->get('/admin/category/delete/{id}', 'CategoryController@delete');

$router->get('/admin/product', 'ProductController@index');
$router->get('/admin/product/create', 'ProductController@create');
$router->post('/admin/product/create', 'ProductController@submitCreate');
$router->get('/admin/product/edit', 'ProductController@edit');
$router->post('/admin/product/edit', 'ProductController@submitEdit');
$router->get('/admin/product/delete', 'ProductController@delete');
$router->get('/admin/news', 'NewsController@index');
$router->get('/admin/news/create', 'NewsController@create');
$router->post('/admin/news/create', 'NewsController@submitCreate');
$router->get('/admin/news/edit', 'NewsController@edit');
$router->post('/admin/news/edit', 'NewsController@submitEdit');
$router->get('/admin/news/delete', 'NewsController@delete');


