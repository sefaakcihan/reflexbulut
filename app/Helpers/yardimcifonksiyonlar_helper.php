<?php
function public_dosya_yolu(){
    return base_url()."/public"."/";
}
function theme(){
    $load_theme = "layout-dark";
    return $load_theme;
}

function site_title(){
    $TITLE = "Reflex Bulut - Online Yedekleme Sistemi";
    return $TITLE;
}

function site_favicon(){
    $FAVICON = base_url("public/assets/images/favicon.ico");
    return $FAVICON;
}

function site_logo($theme){
    if($theme == "dark"){
        $LOGO = base_url("public/assets/images/logo.png");
    }else if($theme == "small"){
        $LOGO = base_url("public/assets/images/favicon.ico");
    }else{
        $LOGO = base_url("public/assets/images/logo.png");
        
    }
    return $LOGO;
}

function company_name(){
    $COMPANY = "REFLEX-BL";
    return $COMPANY;
}

function copyright(){
    $COMPANY = "Copyright © 2023 Reflex Bilgisayar Tüm Hakları Saklıdır.";
    return $COMPANY;
}