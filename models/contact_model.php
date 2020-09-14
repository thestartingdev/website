<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombreApellido = $_POST['nombreApellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Check Database connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO mensajesContacto (fechaCarga,
                            nombreApellido,
                            email,
                            telefono,
                            mensaje)
            VALUES ( now(),
                    '$nombreApellido',
                    '$email',
                    '$telefono',
                    '$mensaje')";


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