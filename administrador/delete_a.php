<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM administrador where nombre_usuario='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: administrador.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el administrador";
 }
 
mysqli_close($conn);



?>