<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Starting Dev | Ideas</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.html">The Starting Dev</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="./index.html">Inicio</a></li>
          <li><a href="./acerca.html">Acerca de</a></li>
          <li class="drop-down">
            <a  href="#">Información</a>
            <ul>
              <li><a href="./consejos.html">Consejos Dev</a></li>
              <li><a href="./recursos.html">Recursos gratis</a></li>
              <li><a href="./inscripcion.html">Inscripción</a></li>
              <li><a href="./voluntario.html">Ser Voluntario</a></li>
              <li class="active"><a href="./ideas.html">Aportar Ideas</a></li>
              <li><a href="./conducta.html">Codigo de Conducta</a></li>
              <li><a href="./roadmap.html">Roadmap / Programa</a></li>
            </ul>
          </li>
          <li><a href="./contacto.html">Contacto</a></li>
          <li><a href="/campus/"><b>Campus</b></a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ideas</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Información</li>
            <li><a href="./inscripcion.html">Ideas</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
        Dejanos tu idea y nosotros te contactamos cuando la vayamos a convertir en un taller para que participes en la creación :), no vamos a hacer nada
        raro con tus datos, si tenes dudas, te invitamos a leer nuestra <a href="#">politica de privacidad.</a>
        <hr>

            <form class="form-group" action="./forms/ideas_form.php" method="post" id="aportar_idea">
                <p>
                  <label for="nombreApellido">Nombre y Apellido</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu nombre y apellido"
                    name="nombreApellido"
                    id="nombreApellido"
                    required
                  />
                </p>
                <p>
                  <label for="email">Tu E-mail</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu E-mail por favor(no somos spamners!)."
                    name="email"
                    id="email"
                    required
                  />
                </p>
                <p>
                  <label for="telefono">Número de telefono</label>
                  <input
                    type="text"
                    class="form-control maskCash"
                    placeholder="Te pedimos tu celu asi te unimos al grupo de Whatsapp del taller"
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                    <label for="idea">¿Cual es tu idea?</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Contanos tu idea para armar un taller :)"
                      name="idea"
                      id="idea"
                    />
                  </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="SUBIR IDEA"
                   />
                </center>
              </form>
            </div>
          </div>


        </p>
      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h3>Seguinos en...</h3>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/thestartingdev" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/thestartingdev/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/company/the-starting-dev" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="https://github.com/thestartingdev" target="_blank" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.youtube.com/channel/UC09pnxn0b-dVNS0rWotnWQQ" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
        </div>
        <br>
        <br>
        <h6><a href="./terminosCondiciones.html">Terminos y condiciones</a> | <a href="./politicaPrivacidad.html"> Politica de privacidad</a></h6>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>