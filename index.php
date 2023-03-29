<?php session_start(); ?>

<!DOCTYPE html>

<!-- beautify ignore:start -->
<html
  lang="pt-br"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Início</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo-branca.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <?php require_once('menu.php'); ?>

        <div class="buy-now">
      <a href="formpost.php" class="btn btn-danger btn-buy-now">Nova postagem</a>
    </div>

        <!-- Layout container -->
        <div class="layout-page">
          
        <!-- Navbar -->
        <?php //require_once('navbar.php'); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">MessyMind /</span> Início</h4>

              <!-- Style variation -->
              <!-- <h5 class="pb-1 mb-4">Style variation</h5> -->
              <div class="row">
        <?php
        require_once('script/connectdb.php');
        $hora = date('H:i');
        $sql = "SELECT * FROM tbtexto ORDER BY tbtexto.id DESC LIMIT 30";
        $result = mysqli_query($conn,$sql);

        foreach ($result as $r) {?>

          <?php if($r['cor'] == 'azul'){ ?>
            <div class="col-md-6 col-xl-4">
            <div class="card bg-primary text-white mb-3">
              <div class="card-header">Criado às <?php echo $r['hora_postagem']; ?></div>  
              <div class="card-body">
                <h5 class="card-title text-white"><?php echo $r['titulo']; ?></h5>
                <p class="card-text"><?php echo $r['texto'] ?></p>
              </div>
            </div>
          </div>
           <?php } ?>  

           <?php if($r['cor'] == 'preto'){ ?>
            <div class="col-md-6 col-xl-4">
                  <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Criado às <?php echo $r['hora_postagem']; ?></div>
                    <div class="card-body">
                      <h5 class="card-title text-white"><?php echo $r['titulo']; ?></h5>
                      <p class="card-text"><?php echo $r['texto'] ?></p>
                    </div>
                  </div>
                </div>
           <?php } ?> 

           <?php if($r['cor'] == 'verde'){ ?>
            <div class="col-md-6 col-xl-4">
                  <div class="card bg-success text-white mb-3">
                    <div class="card-header">Criado às <?php echo $r['hora_postagem']; ?></div>
                    <div class="card-body">
                      <h5 class="card-title text-white"><?php echo $r['titulo'] ?></h5>
                      <p class="card-text"><?php echo $r['texto']; ?></p>
                    </div>
                  </div>
                </div>
           <?php } ?> 

           <?php if($r['cor'] == 'vermelho'){ ?>
            <div class="col-md-6 col-xl-4">
                  <div class="card bg-danger text-white mb-3">
                    <div class="card-header">Criado às <?php echo $r['hora_postagem']; ?></div>
                    <div class="card-body">
                      <h5 class="card-title text-white"><?php echo $r['titulo']; ?></h5>
                      <p class="card-text"><?php echo $r['texto'] ?></p>
                    </div>
                  </div>
                </div>
           <?php } ?> 


           <?php if($r['cor'] == 'amarelo'){ ?>
            <div class="col-md-6 col-xl-4">
                  <div class="card bg-warning text-white mb-3">
                    <div class="card-header">Criado às <?php echo $r['hora_postagem']; ?></div>
                    <div class="card-body">
                      <h5 class="card-title text-white"><?php echo $r['titulo']; ?></h5>
                      <p class="card-text"><?php echo $r['texto'] ?></p>
                    </div>
                  </div>
                </div>
           <?php } ?> 



       <?php } ?>

              </div>
        
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , seu bloquinho ❤️ de desabafo
                  <a href="" target="_blank" class="footer-link fw-bolder">MessyMind</a>
                </div>
                <div>
                  <a href="" class="footer-link me-4">License</a>

                  <a
                    href=""
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/ogabrielgodoy/MessyMind"
                    target="_blank"
                    class="footer-link me-4"
                    >Repository</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/masonry/masonry.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
