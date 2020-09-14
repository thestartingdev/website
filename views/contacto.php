<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Starting Dev | Contacto</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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
          <h2>Contacto</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Contacto</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>
            <form class="form-group" action="./forms/contact_form.php" method="post" id="aportar_idea">
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
                    placeholder="Por favor, dejanos tu mail"
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
                    placeholder="Asi te respondemos más rapido"
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                    <textarea id="mensaje" name="mensaje" placeholder="¡Dejanos tu comentario aca!" style="width: 100%; height: 200px;" required></textarea>
                  </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="ENVIAR MENSAJE"
                   />
                </center>
              </form>
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