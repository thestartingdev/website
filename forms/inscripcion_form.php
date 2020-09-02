<?php

// Calling external libraries
include("conn.php"); // Connect Database

// Retrieving values from form
$nombre = limpiarCadena($_POST['nombre']);
$apellido = limpiarCadena($_POST['apellido']);
$email = $_POST['email'];
$edadActual = limpiarCadena($_POST['edadActual']);
$ahorroUSD = formatoNumeroInsert($_POST['ahorroUSD']);
$ingresosPesos = formatoNumeroInsert($_POST['ingresosPesos']);
$gastosPesos = formatoNumeroInsert($_POST['gastosPesos']);
$edadRetiro = limpiarCadena($_POST['edadRetiro']);
//Cambio Dolar
$tipoCambioUSD = $valorAhora;

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