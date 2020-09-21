<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Starting Dev | Ideas</title>
  <meta content="The Starting Dev es una plataforma para aprender a programar en equipo de forma libre y gratuita." name="description">
  <meta content="Acerca de, The Starting Dev, development, software, programador, programacion, python, javascript, JS, Py, C, Ruby, PHP, HTML, CSS, SQL, MySQL, Hack, MongoDB, NodeJS, MERN, MEAN, React, ReactJS, Angular, AngularJS, VueJS, React Native, programadoras, girls who code, code, dojo, code dojo, coding, tech, technology, community, youtube, twitter, linkedin, instagram, github, comunidad, tecnologia, chicas en tecnologia, genero, perspectiva, inclusión" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?php
    include("./modules/navbar.php");
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ideas</h2>
          <ol>
            <li><a href="../index.php">Inicio</a></li>
            <li>Información</li>
            <li><a href="./ideas.php">Ideas</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
        Dejanos tu idea y nosotros te contactamos cuando la vayamos a convertir en un taller para que participes en la creación :), no vamos a hacer nada
        raro con tus datos, si tenes dudas, te invitamos a leer nuestra <a href="./politicaPrivacidad.php">politica de privacidad.</a>
        <hr>

        <?php
          include('../controllers/ideas_controller.php');
        ?>

        </p>
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    include("./modules/footer.php")
  ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>