<?php 
namespace App\Controllers;

class AboutController
{
    public function gioi_thieu()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/gioi_thieu.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function tu_van_size()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/tu_van_size.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function chinh_sach_dieu_khoan()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/chinh_sach_dieu_khoan.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function huong_dan_mua_hang(){
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/huong_dan_mua_hang.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function chinh_sach_thanh_toan()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/chinh_sach_thanh_toan.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function chinh_sach_doi_tra()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/chinh_sach_doi_tra.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function chinh_sach_bao_hanh(){
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/chinh_sach_bao_hanh.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function chinh_sach_giao_nhan_van_chuyen()
    {
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/chinh_sach_giao_nhan_van_chuyen.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
    public function he_thong_cua_hang(){
        include_once('view/site/layouts/header.php'); 
        include_once('view/site/pages/he_thong_cua_hang.php');
        include_once('view/site/layouts/footer.php'); 
        return;
    }
}
