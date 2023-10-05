<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomepageController extends BaseController
{
    private $userModel;
    private $productsModel;
    private $categoryModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
        $this->productsModel = new \App\Models\ProductsModel();
        $this->categoryModel = new \App\Models\CategoryModel();
    }

    public function shop()
    {
        $data = [
            'categories' => $this->categoryModel->findAll(),
        ];

        return view('shop', $data);
    }

    public function category()
    {
        $data = [
            'categories' => $this->categoryModel->findAll(),
            'products' => $this->productsModel->findAll(),
        ];

        return view('category', $data);
    }

    public function categories()
    {
       
    }

}
