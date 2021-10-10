<?php

namespace App\Controllers;

use App\Models\Model_Category;

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
}