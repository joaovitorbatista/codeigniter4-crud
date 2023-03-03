<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function home()
    {
        $userModel = new UserModel();
        $data['count'] = $userModel->countAllResults();
        $data['live'] = $userModel->where(["live" => "Yes"])->countAllResults();
        $data['male'] = $userModel->where(["gender_preference" => "male"])->countAllResults();
        $data['female'] = $userModel->where(["gender_preference" => "female"])->countAllResults();
        return
            view('templates/header')
            . view('pages/home', $data)
            . view('templates/footer');
    }
}
