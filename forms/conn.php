<?php
$dbhost	= "localhost";
$dbuser	= "root";
$dbpass	= "1234";
$dbname	= "formularios";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die(mysqli_error($conn));
?>