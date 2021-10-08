<?php 
namespace App\Controllers;

class AboutController
{
    public function gioi_thieu()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/gioi_thieu.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function tu_van_size()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/tu_van_size.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function chinh_sach_dieu_khoan()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/chinh_sach_dieu_khoan.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function huong_dan_mua_hang(){
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/huong_dan_mua_hang.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function chinh_sach_thanh_toan()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/chinh_sach_thanh_toan.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function chinh_sach_doi_tra()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/chinh_sach_doi_tra.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function chinh_sach_bao_hanh(){
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/chinh_sach_bao_hanh.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function chinh_sach_giao_nhan_van_chuyen()
    {
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/chinh_sach_giao_nhan_van_chuyen.php';
        include 'view/site/layouts/footer.php'; 
    }
    public function he_thong_cua_hang(){
        include 'view/site/layouts/header.php'; 
        include 'view/site/pages/he_thong_cua_hang.php';
        include 'view/site/layouts/footer.php'; 
    }
}
