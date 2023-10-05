<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function registerIndex()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }

    public function register()
    {
        helper(['form']);

        $rules = [
            'name' => 'required|min_length[5]|max_length[50]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
            'password' => 'required|min_length[8]|max_length[255]|matches[confirmpassword]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);
            return redirect()->to('/signin');

        } else {
            $data['validation'] = $this->validator;
            return view('signup', $data);

        }
    }


    public function loginIndex()
    {
        helper(['form']);
        return view('signin');
    }


    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id' => $data['user_id'],
                    'username' => $data['username'],
                    'isAdmin' => $data['isAdmin'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/shop/user');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }
}