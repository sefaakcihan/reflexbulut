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
         'prd_name' => 'required',
         'prd_price' => 'required',
         'prd_years_price' => 'required',
         'prd_title' => 'required',
         'prd_detail' => 'required',
      ];

      $errors = [
         'prd_name' => [
            'required' => 'Ürün adı alanı zorunludur.',
         ],
         'prd_price' => [
            'required' => 'Fiyat alanı zorunludur.',
         ],
         'prd_years_price' => [
            'required' => 'Fiyat alanı zorunludur.',
         ],
         'prd_title' => [
            'required' => 'Başlık zorunludur.',
         ],
         'prd_detail' => [
            'required' => 'Ürün Detayları zorunludur.',

         ]
      ];

      if (!$this->validate($rules, $errors)) {
         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
      }
      // Validation Bitiş

      $data = [
         "PRD_NAME" => $request->getPost('prd_name'),
         "PRD_PRICE" => $request->getPost('prd_price'),
         "PRD_YEARS_PRICE" => $request->getPost('prd_years_price'),
         "PRD_TITLE" => $request->getPost('prd_title'),
         "PRD_DETAIL" => $request->getPost('prd_detail'),
      ];

      $userModel->insert($data);
      if ($userModel) {
         // Başarı mesajını ayarla veya isteğe bağlı olarak işlem yap
         $successMessage = 'Ürün başarıyla kayıt edildi.';
         return redirect()->back()->withInput()->with('success', $successMessage);
      } else {
         return "Bir sorun oluştu hata kodu: #PRD1535";
      }


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
      return view("users/detail", ["USER_ID" => $USER_ID]);
   }



}