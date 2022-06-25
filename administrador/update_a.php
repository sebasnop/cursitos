<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE administrador SET clave='$_POST[clave]',nombre_completo='$_POST[nombre_completo]',correo='$_POST[correo]',hoja_de_vida='$_POST[hoja_de_vida]',capacidad='$_POST[capacidad]' WHERE nombre_usuario='$_POST[nombre_usuario]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: administrador.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el administrador";
 }
 
mysqli_close($conn);



?>