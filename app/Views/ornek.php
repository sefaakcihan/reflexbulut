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