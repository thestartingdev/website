<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombreApellido = $_POST['nombreApellido'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
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
                            comentario)
            VALUES ( now(),
                    '$nombreApellido',
                    '$edad',
                    '$dni',
                    '$email',
                    '$telefono',
                    '$comoNosConociste',
                    '$conocimientoPrevio',
                    '$gustariaAprender',
                    '$comentario')";


if(empty($error)){
    $conn->query($sql);
    // Close connection
    $conn->close();
} else{
    $return = array('error' => $error);
}

header("Location: ../views/exito.php");
die();

?>