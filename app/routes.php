<?php 

$router->get('/', 'HomeController@index');
$router->get('/customer/login', 'AccountController@login');
$router->get('/customer/register', 'AccountController@register');
$router->get('/customer/forgotpass', 'AccountController@forgot_pass');
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
$router->get('/danh-muc/hang-nam-moi-ve', 'CategoryController@index');
$router->get('/sanpham/quan-lung-vai-phoi-soi-tencel-ms-21e3001-29419', 'ProductController@index');
$router->get('/tin-tuc/tin-chinh', 'NewsController@index');
$router->get('/tin-tuc/bai-viet/ao-so-mi-tre-vai-226', 'NewsController@detail');

