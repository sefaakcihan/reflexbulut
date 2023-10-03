<?php
function smtp_settings($key){
    $data = [
        "host" => "mail.akcsoft.com",
        "email" => "sefa@akcsoft.com",
        "password" => "334m7N4bh6",
        "port" => "465",
        "title" => "Reflex Bilgisayar",
        "protocol" => "ssl",
    ];
    return $data[$key];
}
function recovery_config($key){
    $data = [
        "subject" => "Reflex Bulut Şifre Sıfırlama",
        "company_name" => "Reflex Bulut",
        "address1" => "Numune evler mahallesi Şaban Akın Uçar Caddesi.",
        "address2" => "Hatay/Dörtyol",
        "text1" => "",
        "text2" => ""
    ];
    return $data[$key];
}

