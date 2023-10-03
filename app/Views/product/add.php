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
        <!--start wrapper-->

        <!--NAV-MENU-->
        <?= view("inc/nav") ?>
        <!--NAV-MENU-->


        <!-- start page content wrapper-->
        <form method="post" enctype="multipart/form-data">
            <div class="page-content-wrapper">
                <!-- start page content-->
                <div class="page-content">

                    <!--start breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">Ürünler</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0 align-items-center">
                                    <li class="breadcrumb-item"><a href="javascript:;">
                                            <ion-icon name="home-outline"></ion-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Ürün Ekle</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <a href="<?= base_url() ?>/product/" class="btn btn-outline-primary">Ürün
                                    Listele</a>
                            </div>
                            <div class="btn-group">

                                <button class="btn btn-outline-success" type="submit">Ürün
                                    Ekle</button>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Adı</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="prd_name"
                                        required>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Fiyatı Aylık <small style="font-size: 8px; ">Kdv dahil fiyat giriniz.</small></label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="prd_price"
                                        required>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Fiyatı Yıllık <small style="font-size: 8px; ">Kdv dahil fiyat giriniz.</small></label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="prd_years_price"
                                        required>
                                </div>
                                <div class="col-3">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Başlığı</label>
                                    <input type="text" class="form-control" id="inputEmail" value="" name="prd_title"
                                        required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Detayları</label>
                                    <textarea name="prd_detail" id="" cols="30" rows="5" class="form-control"
                                        required></textarea>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label  mt-2">Ürün Görseli</label>
                                    <input type="file" class="form-control" id="inputEmail" name="prd_image" required>
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