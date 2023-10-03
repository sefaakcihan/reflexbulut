<!-- Tekli Hata Mesajı -->
<?php if (session()->has('error')): ?>
    <script>
        swal("Dikkat!", "<?= session('error') ?>", "error");
    </script>
<?php endif; ?>
<!-- Tekli Hata Mesajı -->
<!-- ///////////////////// -->
<!-- Başarılı Mesajı -->
<?php if (session()->has('success')): ?>
    <script>
        swal("Başarılı!", "<?= session('success') ?>", "success");
    </script>
<?php endif; ?>

<!-- Başarılı Mesajı -->
<!-- ///////////////////// -->
<!-- Sıralı Hata Mesajları -->
<?php
$mesaj = "";
if (session()->getFlashdata('errors')): ?>

    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <?php $mesaj = $mesaj . " " . esc($error) ?>
    <?php endforeach; ?>
    <script>
        swal("Dikkat!", "<?= $mesaj ?>", "error");
    </script>
<?php endif; ?>
<!-- Sıralı Hata Mesajları -->



  <!-- JS Files-->
  <script src="<?= public_dosya_yolu() ?>assets/js/jquery.min.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
      <!--plugins-->
      <script src="<?= public_dosya_yolu() ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="<?= public_dosya_yolu() ?>assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?= public_dosya_yolu() ?>assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= public_dosya_yolu() ?>assets/js/table-datatable.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/plugins/chartjs/chart.min.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/js/index.js"></script>
  <script src="<?= public_dosya_yolu() ?>assets/js/main.js"></script>