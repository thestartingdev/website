<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombreApellido = $_POST['nombreApellido'];
$edad = $_POST['edad'];
$dni = $_POST['dni'];

// Check Database connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO calculadoraTif (fechaCarga,
                                    edadActual,
                                    ahorroUSD,
                                    ingresosPesos,
                                    gastosPesos,
                                    edadRetiro,
                                    valorDolar,
                                    tasaRetiro)
            VALUES ( now(),
                    '$edadActual',
                    '$ahorroUSD',
                    '$ingresosPesos',
                    '$gastosPesos',
                    '$edadRetiro',
                    '$tipoCambioUSD',
                    '$tasaRetiroRedondeada')";


if(empty($error)){
    $conn->query($sql);
    // Close connection
    $conn->close();
} else{
    $return = array('error' => $error);
}

?>