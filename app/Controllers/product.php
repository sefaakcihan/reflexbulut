<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProductModel;

use App\Models\LogModel;
use CodeIgniter\Controller;

class product extends Controller
{

   public function index()
   {
      $ProductModel = new ProductModel();
      $request = service('request');

      if ($request->getMethod() != 'post') {
         return view("product/index");
      }

      if (isset($_POST["prd_edit"])) {
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
   
         // Görsel yükleme işlemi
         $file = $request->getFile('prd_image');
         if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $newName = "__PRODUCT__IMAGE__" . $newName;
            $file->move(ROOTPATH . 'public/uploads', $newName);
            $data["PRD_IMAGE"] = 'public/uploads/' . $newName;
         }

         $ProductModel->update($request->getPost('prd_edit'),$data);
         if ($ProductModel) {
            // Başarı mesajını ayarla veya isteğe bağlı olarak işlem yap
            $successMessage = 'Ürün başarıyla güncellendi.';
            return redirect()->back()->withInput()->with('success', $successMessage);
         } else {
            return "Bir sorun oluştu hata kodu: #PRD1535";
         }



      }

   }
   public function add()
   {
      $ProductModel = new ProductModel();
      $request = service('request');

      if ($request->getMethod() != 'post') {
         return view("product/add");
      }
      //Formdan gelen post isimleri prd_name,prd_price,prd_title,prd_detail,prd_image

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

      // Görsel yükleme işlemi
      $file = $request->getFile('prd_image');
      if ($file->isValid() && !$file->hasMoved()) {
         $newName = $file->getRandomName();
         $newName = "__PRODUCT__IMAGE__" . $newName;
         $file->move(ROOTPATH . 'public/uploads', $newName);
         $data["PRD_IMAGE"] = 'public/uploads/' . $newName;
      } else {
         $data["PRD_IMAGE"] = 'YOK';
      }

      $ProductModel->insert($data);
      if ($ProductModel) {
         // Başarı mesajını ayarla veya isteğe bağlı olarak işlem yap
         $successMessage = 'Ürün başarıyla kayıt edildi.';
         return redirect()->back()->withInput()->with('success', $successMessage);
      } else {
         return "Bir sorun oluştu hata kodu: #PRD1535";
      }


   }
   public function edit($PRODUCT_ID)
   {
      $ProductModel = new ProductModel();
      return view("product/edit");
   }
   public function delete($PRODUCT_ID)
   {
      $ProductModel = new ProductModel();
      $product = $ProductModel->find($PRODUCT_ID);
      $imagePath = $product->PRD_IMAGE; // Görselin dosya yolunu al
      $delete = $ProductModel->delete($PRODUCT_ID);
      if ($delete) {
         // Görsel dosyasını sil
         if (file_exists(ROOTPATH . $imagePath)) {
             unlink(ROOTPATH . $imagePath);
         }
     
         $successMessage = 'Ürün başarıyla silindi.';
         return redirect()->back()->withInput()->with('success', $successMessage);
     } else {
         $errorMessage = 'Ürün silinirken bir hata oluştu.';
         return redirect()->back()->withInput()->with('error', $errorMessage);
     }
   }


}