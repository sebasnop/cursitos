<?php
 
// Create connection
require('../configuraciones/conexion.php');

$nombre_usuario = $_POST["nombre_usuario"];

//query
	$query="INSERT INTO `profesor`(`nombre_usuario`,`clave`,`nombre_completo`, `correo`, `hoja_de_vida`,`admin_supervisor`)
 	VALUES ('$_POST[nombre_usuario]','$_POST[clave]','$_POST[nombre_completo]','$_POST[correo]','$_POST[hoja_de_vida]','$_POST[admin_supervisor]')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

 	if($result){
        header ("Location: profesor.php");
         
 	}else{
 		echo "Ha ocurrido un error al crear el Profesor";
 	}



?>
