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
                                <li class="breadcrumb-item active" aria-current="page">Kullanıcı Detayları</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">Kaydet</button>
                            <a href="<?= base_url() ?>/users/add-users" class="btn btn-outline-primary">Kullanıcı
                                Liste</a>
                           
                        </div>
                    </div>
                </div>


                <?php
                $userModel = new UserModel();
                $userList = $userModel->where("USER_ID", $USER_ID)->first(); // İlk eşleşen kullanıcıyı al
                
                if ($userList) {
                    $name = $userList->NAME . ' ' . $userList->SURNAME;
                    $username = $userList->USERNAME;
                    $email = $userList->EMAIL;
                    $user_auth = $userList->USER_AUTH;
                    $address = $userList->ADDRESS;
                    $aciklama = $userList->ACIKLAMA; // Burada düzeltilmiş
                    $description = $userList->PHONE; // Burada düzeltilmiş
                    $user_active = $userList->USER_ACTIVE;
                } else {
                    // Kullanıcı bulunamadı, hata işleme eklenebilir
                    // Örnek: echo "Kullanıcı bulunamadı.";
                }
                ?>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Ad & Soyad</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $name ?>" >
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Kullanıcı adı</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $username ?>"
                                    >
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">E-mail Adresi</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $email ?>" >
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Kullanıcı Yetkisi</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $user_auth ?>"
                                    >
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label  mt-2">Adres</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $address ?>"
                                    >
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label  mt-2">Açıklama</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $aciklama ?>"
                                    >
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label mt-2">Aktiflik Durumu</label>
                                <input type="text" class="form-control" id="inputEmail" value="<?= $user_active ?>"
                                    >
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end page content-->
        </div>

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