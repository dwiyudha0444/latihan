<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login'); // Pastikan ada file `app/Views/login.php`
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();
    
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
    
        $user = $model->where('username', $username)->first();
    
        if ($user) {
            if ($password === $user['password']) { // Langsung bandingkan tanpa enkripsi
                $session->set([
                    'user_id'   => $user['id'],
                    'username'  => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('error', 'Password salah.');
            }
        } else {
            $session->setFlashdata('error', 'Username tidak ditemukan.');
        }
    
        return redirect()->to('/login');
    }
    

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
