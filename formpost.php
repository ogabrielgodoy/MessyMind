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

    <title>Postar</title>

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

        <!-- Layout container -->
        <div class="layout-page">
          
        <!-- Navbar -->
        <?php //require_once('navbar.php'); ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">MessyMind /</span> Postar</h4>

              <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Preencha os campos para postar</h5>
                      <small class="text-muted float-end">Você está totalmente anônimo aqui!</small>
                    </div>
                    <div class="card-body">
                      <form action="script/proc_formpost.php" method="post">
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Título</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" class="form-control" name="titulo" id="basic-icon-default-fullname" placeholder="Digite sua melhor ideia de título." aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" required>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">Mensagem</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                            <textarea id="basic-icon-default-message" name="texto" class="form-control" placeholder="No que você está pensando hoje?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" required></textarea>
                          </div>
                        </div>

                        <div class="mb-3">
                        <label for="cor" class="form-label">Escolha uma cor para seu post</label>
                        <select id="cor" name= "cor" class="form-select">
                          <option value="azul" required>Azul - Neutro</option>
                          <option value="preto">Preto - Crise</option>
                          <option value="verde">Verde - Bom</option>
                          <option value="vermelho">Vermelho - Ruim</option>
                          <option value="amarelo">Amarelo - Atenção</option>
                        </select>
                      </div>


                        <input type="submit" class="btn btn-primary" value="Publicar">
                        <a href="index.php"><label class="btn btn">Cancelar</label></a>
                      </form>
                    </div>
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
                    href=""
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
