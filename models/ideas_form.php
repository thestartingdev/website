<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombreApellido = $_POST['nombreApellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$idea = $_POST['idea'];

// Check Database connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO ideasAportadas (fechaCarga,
                            nombreApellido,
                            email,
                            telefono,
                            idea)
            VALUES ( now(),
                    '$nombreApellido',
                    '$email',
                    '$telefono',
                    '$idea')";


if(empty($error)){
    $conn->query($sql);
    // Close connection
    $conn->close();
} else{
    $return = array('error' => $error);
}

header("Location: ../exito.html");
die();

?>