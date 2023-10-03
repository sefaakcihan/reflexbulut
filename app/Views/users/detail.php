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
                            <a href="<?= base_url() ?>/users/add-users" class="btn btn-outline-primary">Kullanıcı
                                Ekle</a>
                            <button type="button"
                                class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
                                    class="dropdown-item" href="<?= base_url() ?>/users">Kullanıcı Listesi</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $userModel = new UserModel();
                $userList = $userModel->orderBy('created_at', 'DESC')->where("USER_ID",$USER_ID)->find();
                ?>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Ad & Soyad</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Kullanıcı adı</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">E-mail Adresi</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label  mt-2">Kullanıcı Yetkisi</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label  mt-2">Adres</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label  mt-2">Açıklama</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                            <div class="col-3">
                                <label for="inputEmail" class="form-label mt-2">Aktiflik Durumu</label>
                                <input type="text" class="form-control" id="inputEmail" value="" disabled>
                            </div>
                        </div>
                    </div>
                </div>
ba

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