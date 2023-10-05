<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProfileController extends BaseController
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


    public function index()
{
    // Fetch the logged-in user's data
    $user = $this->userModel->where('user_id', session()->get('id'))->first();
    
    // Debugging: Print user data
    var_dump($user);

    if ($user && $user['isAdmin']) {
        // User is an admin, perform admin-specific action
        return view('admin_page');
    } else {
        // User is not an admin, display the user's profile
        $data = [
            'categories' => $this->categoryModel->findAll(),
        ];
        return view('profileshop', $data);
    }
}

    

    }


