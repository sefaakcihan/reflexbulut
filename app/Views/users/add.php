<?php
use App\Models\UserModel;

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
        <!--start wrapper-->

        <!--NAV-MENU-->
        <?= view("inc/nav") ?>
        <!--NAV-MENU-->

        <!-- start page content wrapper-->
        <form method="post">
            <div class="page-content-wrapper">
                <!-- start page content-->
                <div class="page-content">

                    <!--start breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Kullanıcılar</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0 align-items-center">
                                    <li class="breadcrumb-item"><a href="javascript:;">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Kullanıcı Düzenle</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-success">Kullanıcı Ekle</button>
                                <a href="<?= base_url() ?>/users" class="btn btn-outline-primary">Kullanıcı
                                    Listele</a>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Ad</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="name">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Soyad</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="surname">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Kullanıcı adı</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="username">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">E-mail Adresi</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="email">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Telefon Numarası</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="phone">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Kullanıcı Yetkisi</label>
                                    <input type="text" class="form-control" id="inputEmail" value="UYE" name="user_auth">
                                </div>
                                <div class="col-6">
                                    <label for="inputEmail" class="form-label  mt-2">Adres</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="address">
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label mt-2">Aktiflik Durumu</label>
                                    <input type="text" class="form-control" id="inputEmail" value="1" name="user_active">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label  mt-2">Açıklama</label>
                                    <textarea id="" cols="30" rows="10" class="form-control" name="aciklama"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end page content-->
            </div>
        </form>

        <!--end page content wrapper-->



        <!-- CUSTOMİZER -->
        <?= view("inc/customizer") ?>
        <!-- CUSTOMİZER -->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->



        <!--end wrapper-->
    </div>
    <!--end wrapper-->

    <!-- FOOTER -->
    <?= view("inc/footer") ?>
    <!-- FOOTER -->
</body>

</html>