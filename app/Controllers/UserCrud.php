<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserCrud extends BaseController
{
    // users list
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('id', 'ASC')->findAll();
        return
        view('templates/header')
        . view('pages/user_view', $data)
        . view('templates/footer');
    }
    
    // add user
    public function create()
    {
        return
        view('templates/header')
        . view('pages/add_user')
        . view('templates/footer');
    }
    
    public function store() {
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'mobile' => $this->request->getVar('mobile'),
            'live' => $this->request->getVar('live'),
            'gender_preference' => $this->request->getVar('gender_preference'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }

    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return 
        view('templates/header')
        . view('pages/edit_user', $data)
        . view('templates/footer');
    }

    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getvar('id');
        $data = [
            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'mobile' => $this->request->getVar('mobile'),
            'live' => $this->request->getVar('live'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }

    public function detail($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return 
        view('templates/header')
        . view('pages/detail_user', $data)
        . view('templates/footer');
    }

    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }  
}
