<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM profesor where nombre_usuario='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: profesor.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el Profesor";
 }
 
mysqli_close($conn);



?>