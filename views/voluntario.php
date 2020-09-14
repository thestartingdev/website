<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>The Starting Dev | Ser Voluntario</title>
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
          <h2>Ser Voluntario</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Información</li>
            <li><a href="./inscripcion.html">Ser Voluntario</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>

        Tus datos son utlizados solo para comnunicarnos con vos, nunca te vamos a enviar spam, publicidad o intentar cobrarte algo,
        no te preocupes y si tenes dudas, podes revisar nuestra <a href="#">politica de privacidad.</a>
        <hr>

            <form class="form-group" action="./forms/voluntarios_form.php" method="post" id="sumar_voluntario">
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
                  <label for="edad">Edad</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu edad, por favor."
                    name="edad"
                    id="edad"
                    required
                  />
                </p>
                <p>
                  <label for="dni">DNI</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ingresa tu número de documento, por favor."
                    name="dni"
                    id="dni"
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
                    placeholder="Asi nos ponemos en contacto con vos."
                    name="telefono"
                    id="telefono"
                    required
                  />
                </p>
                <p>
                    <label for="comoNosConociste">¿Como nos conociste?</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Contanos si fue por, linkedin, twitter, facebook, un amig@, etc"
                      name="comoNosConociste"
                      id="comoNosConociste"
                    />
                  </p>
                <p>
                    <label for="aportar">¿Qué te interesa aportar?</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Contamos asi hablamos directamente de eso cuando charlemos."
                      name="aportar"
                      id="aportar"
                    />
                </p>
                <p>
                  <label for="comentario">¿Queres sumar algun comentario?</label>
                  <input
                    type="text"
                    class="form-control maskAge"
                    placeholder="Contamos de forma muy cortita porque te interesa participar en los talleres."
                    name="comentario"
                    id="comentario"
                    required
                  />
                </p>
                <center>
                  <input
                    type="submit"
                    class="btn-primary btn-large"
                    value="SER VOLUNTARIO"
                   />
                </center>
              </form>
            </div>
          </div>


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