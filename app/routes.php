<?php 
// Client
$router->get('/', 'HomeController@index');
$router->get('/customer/login', 'AccountController@login');
$router->post('/customer/login', 'AccountController@submitLogin');
$router->get('/customer/register', 'AccountController@register');
$router->post('/customer/register', 'AccountController@submitRegister');
$router->get('/customer/logout', 'AccountController@logout');

// Begin:1
$router->get('/customer/info', 'AccountController@info');//V
$router->get('/customer/info_edit', 'AccountController@info_edit');// da co view
$router->post('/customer/info_edit', 'AccountController@info_edit_submit');
$router->get('/customer/address_list', 'AccountController@address_list');//V
$router->get('/customer/address_edit', 'AccountController@address_edit');//V post
$router->post('/customer/address_edit', 'AccountController@address_edit_submit');
// End:1
// Begin:3
$router->get('/customer/order_list', 'AccountController@order_list');// da co view can fill data
// End:3
// Begin:2
$router->post('/cart/add_item', 'CartController@add_item');
$router->post('/cart/drop_item', 'CartController@drop_item');
$router->get('/thanhtoan/giohang', 'CartController@cart');// da co view
$router->get('/thanhtoan/dathang_step1', 'OrderController@dathang_step1');// da co view
$router->get('/thanhtoan/dathang_step2', 'OrderController@dathang_step2');// da co view
$router->get('/thanhtoan/dathang_step3', 'OrderController@dathang_step3');// da co view
// End:2
$router->get('/danh-muc/{slug}', 'CategoryController@detail');
$router->get('/tim-kiem', 'ProductController@search');
$router->get('/sale/{slug}', 'CategoryController@sale');
$router->get('/sanpham/{slug}', 'ProductController@detail');
$router->get('/tin-tuc/tin-chinh', 'NewsController@mainNews');
$router->get('/tin-tuc/danh-muc/su-kien-thoi-trang', 'NewsController@eventNews');
$router->get('/tin-tuc/danh-muc/blog', 'NewsController@blogNews');
$router->get('/tin-tuc/danh-muc/tin-noi-bo', 'NewsController@internalNews');
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

// Admin
$router->get('/admin', 'AdminController@index');
// Begin:4
$router->get('/admin/order', 'OrderController@index');
$router->get('/admin/order/confirm', 'OrderController@confirm');
$router->get('/admin/order/complete', 'OrderController@complete');
$router->get('/admin/order/cancel', 'OrderController@cancel');
// End:4

$router->get('/admin/customer', 'AccountController@customer');
$router->get('/admin/customer/block/{id}', 'AccountController@blockCustomer');
$router->get('/admin/customer/unlock/{id}', 'AccountController@unlockCustomer');
$router->get('/admin/category', 'CategoryController@index');
$router->get('/admin/category/create', 'CategoryController@create');
$router->post('/admin/category/create', 'CategoryController@submitCreate');
$router->get('/admin/category/edit/{id}', 'CategoryController@edit');
$router->post('/admin/category/edit/{id}', 'CategoryController@submitEdit');
$router->get('/admin/category/delete/{id}', 'CategoryController@delete');
$router->get('/admin/product', 'ProductController@index');
$router->get('/admin/product/create', 'ProductController@create');
$router->post('/admin/product/create', 'ProductController@submitCreate');
$router->get('/admin/product/edit/{id}', 'ProductController@edit');
$router->post('/admin/product/edit/{id}', 'ProductController@submitEdit');
$router->get('/admin/product/delete/{id}', 'ProductController@delete');
$router->get('/admin/news', 'NewsController@index');
$router->get('/admin/news/create', 'NewsController@create');
$router->post('/admin/news/create', 'NewsController@submitCreate');
$router->get('/admin/news/edit/{id}', 'NewsController@edit');
$router->post('/admin/news/edit/{id}', 'NewsController@submitEdit');
$router->get('/admin/news/delete/{id}', 'NewsController@delete');


