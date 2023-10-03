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
                                <li class="breadcrumb-item active" aria-current="page">Kullanıcı Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="<?=base_url()?>/users/add-users"  type="button" class="btn btn-outline-primary">Kullanıcı Ekle</a>   
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->


                <!-- <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">Kullanıcı Listesi</h6>
                            <div class="fs-5 ms-auto dropdown">
                                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                    data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#USER_ID</th>
                                        <th>Ad & Soyad</th>
                                        <th>E-mail</th>
                                        <th>Telefon</th>
                                        <th>Abonelik</th>
                                        <th>Kayıt Tarihi</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#89742</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="product-box border">
                                                    <img src="assets/images/products/11.png" alt="">
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>$214</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>Apr 8, 2021</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="View detail" aria-label="Views">
                                                    <ion-icon name="eye-outline"></ion-icon>
                                                </a>
                                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Edit info" aria-label="Edit">
                                                    <ion-icon name="pencil-outline"></ion-icon>
                                                </a>
                                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                                    aria-label="Delete">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->


                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#USER_ID</th>
                                        <th>AD & SOYAD</th>
                                        <th>E-MAİL</th>
                                        <th>TELEFON</th>
                                        <th>DURUM</th>
                                        <th>YETKİ</th>
                                        <th>KAYIT TARİHİ</th>
                                        <th>İŞLEM</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $userModel = new UserModel();
                                    $userList = $userModel->orderBy('created_at', 'DESC')->findAll();
                                    ?>

                                    <?php foreach($userList as $user){ ?>
                                    <tr>
                                        <td><?=$user->USER_ID?></td>
                                        <td><?=$user->NAME?> <?=$user->SURNAME?></td>
                                        <td><?=$user->EMAIL?></td>
                                        <td><?=$user->PHONE?></td>
                                        <td>
                                            <?php if($user->USER_ACTIVE == "E"){?>
                                            <span class="badge bg-success">AKTİF</span>
                                            <?php }else{ ?>
                                            <span class="badge bg-danger">PASİF</span>
                                            <?php } ?>
                                        
                                        </td>
                                        <td><?=$user->USER_AUTH?></td>
                                        <td><?= date('d/m/Y', strtotime($user->created_at)); ?></td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                <a href="<?=base_url()?>/users/detail-users/<?=$user->USER_ID?>" class="text-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title=""
                                                    data-bs-original-title="Görüntüle" aria-label="Views">
                                                    <ion-icon name="eye-outline"></ion-icon>
                                                </a>
                                                <a href="<?=base_url()?>/users/edit-users/<?=$user->USER_ID?>" class="text-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="" data-bs-original-title="Düzenle"
                                                    aria-label="Edit">
                                                    <ion-icon name="pencil-outline"></ion-icon>
                                                </a>
                                                <a href="<?=base_url()?>/users/delete-users/<?=$user->USER_ID?>" class="text-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="" data-bs-original-title="Sil"
                                                    aria-label="Delete">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } ?>


                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                    <th>#USER_ID</th>
                                        <th>AD & SOYAD</th>
                                        <th>E-MAİL</th>
                                        <th>TELEFON</th>
                                        <th>KAYIT TARİHİ</th>
                                        <th>İŞLEM</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end page content-->
        </div>
        <!--end page content wrapper-->

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