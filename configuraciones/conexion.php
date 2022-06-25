<?php
$host = "localhost";
$user = "Cursitos";
$pass = "cursitos";
$DB = "cursitos";
$conn = new mysqli($host, $user, $pass, $DB) or die("Error al conectar a la DB " . mysqli_error($link));
?>