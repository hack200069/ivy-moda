<?php

namespace App\Controllers;

use App\Models\Model_Category;
use App\Models\Model_Image;

class InitController
{
    public function __construct()
    {
        
    }

    public function initCategory(){
        $categoryModel = new Model_Category();
        $menuCategory = $categoryModel->getAllCategory();
        return $menuCategory;
    }

    public function initImage(){
        $imageModel = new Model_Image();
        $categoryImage = $imageModel->getAllImage();
        return $categoryImage;
    }
}