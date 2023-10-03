<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\LogModel;

use CodeIgniter\Controller;

class auth extends Controller
{
    protected $usersModel;

    public function __construct()
    {
        $this->usersModel = new UserModel();
    }

    public function login()
    {
        if (session()->has('user_id')) {
            session()->destroy();
        }

        // Genel Parametreler //
        $view_dosyasi = "auth/login";
        $request = service('request');
        // Genel Parametreler //

        if ($request->getMethod() != 'post') {
            return view($view_dosyasi);
        }

        // Kullanıcıyı kontrol et
        $email = $request->getPost('email');
        $password = md5($request->getPost('password'));

        $userModel = new UserModel(); // Model sınıfını doğru şekilde kullan
        $user = $userModel->where('EMAIL', $email)->first();

        if ($user) {
            // Eğer kullanıcı bulunduysa, şifreyi kontrol et
            if ($password == $user->PASSWORD) {
                // Kullanıcının kimliğini ve kullanıcı adını session olarak kaydet
                if ($user->USER_ACTIVE == 1) {
                    $errorMessage = 'Hesabınız aktif değildir.';
                    return redirect()->back()->withInput()->with('error', $errorMessage);
                }

                session()->set('USER_ID', $user->USER_ID);
                session()->set('AUTH', $user->USER_AUTH);
                session()->set('RANK', $user->USER_RANK);
                session()->set('USERNAME', $user->USERNAME);
                session()->set('EMAIL', $user->EMAIL);
                session()->set('PHONE', $user->PHONE);

                return redirect()->to(base_url('home')); // Örneğin, kullanıcıyı yönlendirilecek sayfa
            } else {
                // Şifre yanlış ise hata mesajını ayarla veya isteğe bağlı olarak işlem yap
                $errorMessage = 'Girdiğiniz şifre yanlış.';
                return redirect()->back()->withInput()->with('error', $errorMessage);
            }
        } else {
            // Kullanıcı bulunamadıysa hata mesajını ayarla veya isteğe bağlı olarak işlem yap
            $errorMessage = 'Girdiğiniz e-posta adresi kayıtlı değil.';
            return redirect()->back()->withInput()->with('error', $errorMessage);
        }
    }

    public function register()
    {
        // Genel Parametreler //
        $view_dosyasi = "auth/signup";
        $request = service('request');
        // Genel Parametreler //
        // User modelini oluştur
        $userModel = new UserModel();
        $logModel = new LogModel();

        try {
            if ($request->getMethod() != 'post') {
                return view($view_dosyasi);
            }

            // Validation
            $validation = \Config\Services::validation();
            $rules = [
                'name' => 'required|min_length[3]|max_length[255]|regex_match[/^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/]',
                'surname' => 'required|min_length[3]|max_length[255]|regex_match[/^[a-zA-ZğüşıöçĞÜŞİÖÇ\s]+$/]',
                'username' => 'required|min_length[5]|max_length[20]|alpha_numeric',
                'password' => 'required|min_length[6]|max_length[20]',
                'email' => 'required|valid_email',
                'phone' => 'required|numeric',
            ];

            $errors = [
                'name' => [
                    'required' => 'Ad alanı zorunludur.',
                    'min_length' => 'Ad alanı en az 3 karakter içermelidir.',
                    'max_length' => 'Ad alanı en fazla 255 karakter içermelidir.',
                    'regex_match' => 'Ad alanı sadece harfler ve boşluk içerebilir.'
                ],
                'surname' => [
                    'required' => 'Soyad alanı zorunludur.',
                    'min_length' => 'Soyad alanı en az 3 karakter içermelidir.',
                    'max_length' => 'Soyad alanı en fazla 255 karakter içermelidir.',
                    'regex_match' => 'Soyad alanı sadece harfler ve boşluk içerebilir.'
                ],
                'username' => [
                    'required' => 'Kullanıcı adı zorunludur.',
                    'min_length' => 'Kullanıcı adı en az 5 karakter içermelidir.',
                    'max_length' => 'Kullanıcı adı en fazla 20 karakter içermelidir.',
                    'alpha_numeric' => 'Kullanıcı adı boşluk türkçe ve özel karakter içeremez!',
                ],
                'password' => [
                    'required' => 'Şifre zorunludur.',
                    'min_length' => 'Şifre en az 6 karakter içermelidir.',
                    'max_length' => 'Şifre en fazla 20 karakter içermelidir.'
                ],
                'email' => [
                    'required' => 'E-posta adresi zorunludur.',
                    'valid_email' => 'Geçerli bir e-posta adresi giriniz.'
                ],
                'phone' => [
                    'required' => 'Telefon numarası zorunludur.',
                    'numeric' => 'Telefon numarası sadece sayısal değerler içermelidir.'
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }
            // Validation Bitiş


            // Post verilerini al
            $username = $request->getPost('username');
            $email = $request->getPost('email');

            // Kayıt var mı kontrol et
            $existingUser = $userModel->where('EMAIL', $email)->orWhere('USERNAME', $username)->first();
            if ($existingUser) {
                // Kayıt zaten varsa hata mesajını ayarla veya isteğe bağlı olarak işlem yap
                $errorMessage = 'Bu e-posta adresi veya kullanıcı adı zaten kayıtlı.';
                throw new \Exception($errorMessage);
            } else {
                // Yeni kullanıcı kaydını oluştur
                $hashedPassword = md5($request->getPost('password')); // Şifreyi güvenli bir şekilde hashle

                $data = [
                    "NAME" => $request->getPost('name'),
                    "SURNAME" => $request->getPost('surname'),
                    "USERNAME" => $request->getPost('username'),
                    "PASSWORD" => $hashedPassword,
                    "EMAIL" => $request->getPost('email'),
                    "PHONE" => $request->getPost('phone'),
                    "USER_AUTH" => "UYE",
                    "USER_ACTIVE" => "E",
                    "USER_RANK" => "UYE",
                ];

                $userModel->insert($data);

                // Başarı mesajını ayarla veya isteğe bağlı olarak işlem yap
                $successMessage = 'Kullanıcı kaydı başarıyla oluşturuldu, lütfen giriş yapın.';
                return redirect()->to(base_url() . "/login")->with('success', $successMessage);
            }
        } catch (\Exception $e) {
            // Hata oluştuğunda tbl_log'a kaydet
            $logData = [
                'LOG_TITLE' => 'Kayıt Hatası',
                'LOG_DETAIL' => $e->getMessage(),
            ];
            $logModel->insert($logData);

            // Hata mesajını kullanıcıya göster
            return redirect()->back()->withInput()->with('error', "LOG DETAY: " . $e->getMessage());
        }
    }
    public function recovery()
    {
        helper(["RecoveryPassword"]);
        // Genel Parametreler //
        $view_dosyasi = "auth/recovery";
        $request = service("request");
        $userModel = new UserModel();
        // Genel Parametreler //

        if ($request->getMethod() != 'post') {
            return view($view_dosyasi);
        }

        if (empty($request->getPost('email'))) {
            $successMessage = 'Lütfen mail adresi alanını boş bırakmayınız.';
            return redirect()->to(base_url() . "/recovery")->with('error', $successMessage);
        }

        $email = $request->getPost('email');
        $existingUser = $userModel->where('EMAIL', $email)->first();
        if ($existingUser) {
            helper('text');
            $userid = $existingUser->USER_ID;
            $newpasssword = random_string('alnum', 8);
            $resetpassword = $userModel->update($userid, ["PASSWORD" => md5($newpasssword)]);
            if ($resetpassword) {
                if (recovery_send_mail($email,$newpasssword)) {
                    $successMessage = 'Yeni şifreniz mail adresinize gönderildi!';
                    return redirect()->to(base_url() . "/login")->with('success', $successMessage);
                } else {
                    $successMessage = 'Mail gönderimi başarısız oldu! Site yönetimi ile irtibata geçiniz..';
                    return redirect()->to(base_url() . "/recovery")->with('error', $successMessage);
                }
            }
        } else {

            $successMessage = 'Mail adresi bulunamadı, lütfen kontrol ediniz!';
            return redirect()->to(base_url() . "/recovery")->with('error', $successMessage);
        }
    }
}