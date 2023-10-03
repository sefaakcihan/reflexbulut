<?php
helper(["yardimcifonksiyonlar"]);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
   <?= view("inc/header") ?>
</head>

<body>
   <!--start wrapper-->
   <div class="wrapper">
      <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-transparent p-3">
            <div class="container-fluid">
               <a href="javascript:;"><img width="150px" src="<?= site_logo(theme()) ?>" alt="" /></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Anasayfa</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Hakkımızda</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Hizmetler</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Ürünler</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="javascript:;">İletişim</a>
                     </li>
                  </ul>
                  <form class="d-flex">
                     <a href="javascript:;" class="btn btn-sm btn-primary px-4 radius-30">Satın Al</a>
                  </form>
               </div>
            </div>
         </nav>
      </header>
      <div class="container">
         <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
               <div class="card radius-10">
                  <div class="card-body p-4">
                     <div class="text-center">
                        <h4>Giriş Yap</h4>
                        <p>Hesabınıza Giriş Yap</p>
                     </div>
                     <form class="form-body row g-3" method="post">
                        <div class="col-12">
                           <label for="inputEmail" class="form-label">Email</label>
                           <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                        <div class="col-12">
                           <label for="inputPassword" class="form-label">Şifre</label>
                           <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch"
                                 id="flexSwitchCheckRemember">
                              <label class="form-check-label" for="flexSwitchCheckRemember">Beni Hatırla</label>
                           </div>
                        </div>
                        <div class="col-12 col-lg-6 text-end">
                           <a href="<?=base_url()?>/recovery">Şifremi unuttum</a>
                        </div>
                        <div class="col-12 col-lg-12">
                           <div class="d-grid">
                              <button type="submit" class="btn btn-primary">Giriş Yap</button>
                           </div>
                        </div>
                      
                       
                        <div class="col-12 col-lg-12 text-center">
                           <p class="mb-0">Hesabınız yok mu? <a href="<?=base_url()?>/register">Kayıt Ol</a></p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="my-5">
         <div class="container">
            <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
               <a href="javascript:;">
                  <ion-icon name="logo-twitter"></ion-icon>
               </a>
               <a href="javascript:;">
                  <ion-icon name="logo-linkedin"></ion-icon>
               </a>
               <a href="javascript:;">
                  <ion-icon name="logo-github"></ion-icon>
               </a>
               <a href="javascript:;">
                  <ion-icon name="logo-facebook"></ion-icon>
               </a>
               <a href="javascript:;">
                  <ion-icon name="logo-pinterest"></ion-icon>
               </a>
            </div>
            <div class="text-center">
               <p class="my-4">
                  <?= copyright() ?>
               </p>
            </div>
         </div>
      </footer>
   </div>
   <!--end wrapper-->
   <?= view("inc/footer") ?>
</body>

</html>