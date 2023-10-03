<?php
use App\Models\ProductModel;
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

            <style>
            
            
            .product-text{
                font-size: 20px;
                padding-bottom: 8px;
            }

            
            
            
            </style>


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
                                <li class="breadcrumb-item active" aria-current="page">Ürün Listesi</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <a href="<?= base_url() ?>/product/add-product" class="btn btn-outline-primary">Ürün
                                Ekle</a>
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
                                        <th>#PRODUCT_ID</th>
                                        <th>Ürün Adı</th>
                                        <th>Ürün Başlığı</th>
                                        <th>Ürün Fiyatı Aylık</th>
                                        <th>Ürün Fiyatı Yıllık</th>
                                        <th>Eklenme Tarihi</th>
                                        <th>İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $productModel = new ProductModel();
                                    $ProductList = $productModel->orderBy('PRD_ID', 'DESC')->findAll();
                                    ?>

                                    <?php foreach ($ProductList as $product) { ?>
                                        <tr>
                                            <td>
                                                <?= $product->PRD_ID ?>
                                            </td>
                                            <td>
                                                <?= $product->PRD_NAME ?>
                                            </td>
                                            <td>
                                                <?= $product->PRD_TITLE ?>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">
                                                    <?= $product->PRD_PRICE ?> ₺
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-warning">
                                                    <?= $product->PRD_YEARS_PRICE ?> ₺
                                                </span>
                                            </td>
                                            <td>
                                                <?= date('d/m/Y', strtotime($product->created_at)); ?>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#exampleFullScreenModal<?= $product->PRD_ID ?>"
                                                        class="text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title=""
                                                        data-bs-original-title="Görüntüle" aria-label="Views">
                                                        <ion-icon name="eye-outline"></ion-icon>
                                                    </a>

                                                    <a data-bs-toggle="modal"
                                                        data-bs-target="#exampleFullScreenModal<?= $product->PRD_ID ?>"
                                                        class="text-primary" data-bs-toggle="tooltip"
                                                        data-bs-placement="bottom" title="" data-bs-original-title="Düzenle"
                                                        aria-label="Edit">
                                                        <ion-icon name="pencil-outline"></ion-icon>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-danger" data-bs-toggle="modal"
                                                        data-bs-target="#confirmDeleteModal<?= $product->PRD_ID ?>">
                                                        <ion-icon name="trash-outline"></ion-icon>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                        <div class="modal fade" id="confirmDeleteModal<?= $product->PRD_ID ?>" tabindex="-1"
                                            aria-labelledby="confirmDeleteModalLabel<?= $product->PRD_ID ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="confirmDeleteModalLabel<?= $product->PRD_ID ?>">
                                                            Ürünü Sil</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <?= $product->PRD_NAME ?> ürününü silmek istiyor
                                                            musunuz?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">İptal</button>
                                                        <a href="<?= base_url("product/delete-product/{$product->PRD_ID}") ?>"
                                                            class="btn btn-danger">Sil</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="modal fade" id="exampleFullScreenModal<?= $product->PRD_ID ?>"
                                                tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-fullscreen">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Ürün Detay -
                                                                <?= $product->PRD_NAME ?>
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="">Ürün Adı</label>
                                                                    <input type="text" class="form-control" name="prd_name"
                                                                        value="<?= $product->PRD_NAME ?>">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="">Ürün Başlığı</label>
                                                                    <input type="text" class="form-control" name="prd_title"
                                                                        value="<?= $product->PRD_TITLE ?>">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="">Eklenme Tarihi</label>
                                                                    <input type="text" class="form-control"
                                                                        value="<?= $product->created_at ?>" disabled>
                                                                </div>
                                                                <div class="col-md-4 mt-1">
                                                                    <label for="">Ürün Fiyatı Aylık</label>
                                                                    <input type="text" class="form-control" name="prd_price"
                                                                        value="<?= $product->PRD_PRICE ?>">
                                                                </div>
                                                                <div class="col-md-4 mt-1">
                                                                    <label for="">Ürün Fiyatı Yıllık</label>
                                                                    <input type="text" class="form-control"
                                                                        name="prd_years_price"
                                                                        value="<?= $product->PRD_YEARS_PRICE ?>">
                                                                </div>
                                                                <div class="col-md-4 mt-1">
                                                                    <label for="">Ürün Görseli</label>
                                                                    <input type="file" name="prd_image"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="col-md-12 mt-1 mb-2">
                                                                    <label for="">Ürün Görseli</label>
                                                                   
                                                                    <textarea name="prd_detail" class="form-control" id=""
                                                                        cols="30"
                                                                        rows="3"><?= htmlspecialchars($product->PRD_DETAIL) ?></textarea>
                                                                </div>
                                                                <hr>
                                                                <div  class="col-md-12 row align-items-center justify-content-center">
                                                                
                                                                <div id="product-design" class="border border-1 border-secondary col-md-4  mt-1 align-items-center border-1  justify-content-center p-4 rounded-2 bg-muted"
                                                                    style="display: flex; flex-direction: column; ">
                                                                    <label class= "product-text" for="">Ürün Görseli</label>
                                                                    <?php if ($product->PRD_IMAGE != "YOK") { ?>
                                                                        <img  class ="rounded-3 img-fluid"
                                                                            src="<?= base_url() ?>/<?= $product->PRD_IMAGE ?>"
                                                                            alt="">
                                                                            
                                                                    
                                                                    <?php } else {
                                                                        echo "<p class='text-danger'>Ürün Görseli Bulunamadı.</p>";
                                                                    } ?>
                                                                </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="prd_edit" value="<?= $product->PRD_ID ?>"
                                                                type="submit" class="btn btn-success">Kaydet</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Kapat</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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