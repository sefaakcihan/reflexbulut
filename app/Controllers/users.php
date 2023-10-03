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
      $request = service('request');

      if (!isset($_POST["name"])) {
         return view("users/add");
      }

      // Validation
      $validation = \Config\Services::validation();
      $rules = [
         'name' => 'required',
         'surname' => 'required',
         'username' => 'required',
         'email' => 'required',
         'user_auth' => 'required',
         'address' => 'required',
         'user_active' => 'required',
      ];

      $errors = [
         'name' => [
            'required' => 'Ad alanı zorunludur.',
         ],
         'surname' => [
            'required' => 'Soyad alanı zorunludur.',
         ],
         'username' => [
            'required' => 'Kullanıcı adı alanı zorunludur.',
         ],
         'email' => [
            'required' => 'Email alanı zorunludur.',
         ],
         'user_auth' => [
            'required' => 'Yetki alanı zorunludur.',
         ],
         'address' => [
            'required' => 'Adres alanı zorunludur.',
         ]
      ];

      if (!$this->validate($rules, $errors)) {
         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
      }
      // Validation Bitiş

      // Kullanıcıyı kontrol etmek için kullanıcı adı veya e-posta adresi ile sorgu yapın
      $existingUser = $userModel->where('USERNAME', $request->getPost('username'))->orWhere('EMAIL', $request->getPost('email'))->first();

      if ($existingUser) {
         return redirect()->back()->withInput()->with('errors', ['Bu kullanıcı adı veya e-posta adresi zaten kullanılıyor.']);
      }

      $data = [
         "NAME" => $request->getPost('name'),
         "SURNAME" => $request->getPost('surname'),
         "USERNAME" => $request->getPost('username'),
         "EMAIL" => $request->getPost('email'),
         "USER_AUTH" => $request->getPost('user_auth'),
         "ACIKLAMA" => $request->getPost('aciklama'),
         "PHONE" => $request->getPost('phone'),
         "ADDRESS" => $request->getPost('address'),

      ];

      $userModel->insert($data);
      if ($userModel) {
         // Başarı mesajını ayarla veya isteğe bağlı olarak işlem yap
         $successMessage = 'Kullanıcı başarıyla kayıt edildi.';
         return redirect()->back()->withInput()->with('success', $successMessage);
      } else {
         return "Bir sorun oluştu hata kodu: #PRD1535";
      }
   }
   public function edit($USER_ID)
   {
      $userModel = new UserModel();
      return view("users/edit", ["USER_ID" => $USER_ID]);
   }
   public function delete($USER_ID)
   {
      $userModel = new UserModel();
      return "DELETE";
   }
   public function detail($USER_ID)
   {
      $userModel = new UserModel();
      return view("users/detail", ["USER_ID" => $USER_ID]);
   }



}