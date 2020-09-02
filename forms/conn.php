<?php
$dbhost	= "192.99.21.118";	   
$dbuser	= "masinver_admin";		  
$dbpass	= "masinver2019";		     
$dbname	= "masinver_freeApps";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die(mysqli_error($conn));
?>