<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="delete FROM curso where codigo='$_POST[d]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: curso.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el Curso";
 }
 
mysqli_close($conn);



?>