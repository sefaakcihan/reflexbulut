<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LogModel;
use CodeIgniter\Controller;

class users extends Controller
{

    public function index()
    {
       $userModel = new UserModel();
       return view("users/index");
    }
    public function add()
    {
       $userModel = new UserModel();
       return view("users/add");
    }
    public function edit($USER_ID)
    {
       $userModel = new UserModel();
       return view("users/edit");
    }
    public function delete($USER_ID)
    {
       $userModel = new UserModel();
       return "DELETE";
    }
    public function detail($USER_ID)
    {
       $userModel = new UserModel();
       return view("users/detail",["USER_ID" => $USER_ID]);
    }



}