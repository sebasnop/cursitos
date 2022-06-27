<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
if(($_POST["admin_supervisor"])=="NULL"){
    $query="UPDATE profesor SET clave='$_POST[clave]',nombre_completo='$_POST[nombre_completo]',correo='$_POST[correo]',hoja_de_vida='$_POST[hoja_de_vida]',admin_supervisor=$_POST[admin_supervisor] WHERE nombre_usuario='$_POST[nombre_usuario]'";
} else{
    $query="UPDATE profesor SET clave='$_POST[clave]',nombre_completo='$_POST[nombre_completo]',correo='$_POST[correo]',hoja_de_vida='$_POST[hoja_de_vida]','admin_supervisor=$_POST[admin_supervisor]' WHERE nombre_usuario='$_POST[nombre_usuario]'";

}
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: profesor.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el Profesor";
 }
 
mysqli_close($conn);



?>