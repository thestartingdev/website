<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombreApellido = $_POST['nombreApellido'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$tallerElegido = $_POST['tallerElegido'];
$comoNosConociste = $_POST['comoNosConociste'];
$conocimientoPrevio = $_POST['conocimientoPrevio'];
$gustariaAprender = $_POST['gustariaAprender'];
$comentario = $_POST['comentario'];

// Check Database connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO alumnos (fechaCarga,
                            nombreApellido,
                            edad,
                            dni,
                            email,
                            telefono,
                            comoNosConociste,
                            conocimientoPrevio,
                            gustariaAprender,
                            comentario,
                            tallerElegido)
            VALUES ( now(),
                    '$nombreApellido',
                    '$edad',
                    '$dni',
                    '$email',
                    '$telefono',
                    '$comoNosConociste',
                    '$conocimientoPrevio',
                    '$gustariaAprender',
                    '$comentario',
                    '$tallerElegido')";


if(empty($error)){
    $conn->query($sql);
    // Close connection
    $conn->close();
} else{
    $return = array('error' => $error);
}

echo "<script type='text/javascript'> document.location = '../views/exito.php'; </script>";
die();

?>