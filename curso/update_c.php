<?php
 
// Create connection
require('../configuraciones/conexion.php');

//query
$query="UPDATE curso SET nombre='$_POST[nombre]',categoria='$_POST[categoria]',descripcion='$_POST[descripcion]',cantidad_estudiantes='$_POST[cantidad_estudiantes]',fecha_publicacion='$_POST[fecha_publicacion]',tipo='$_POST[tipo]',profesor_ensenia='$_POST[profesor_ensenia]',admin_supervisa='$_POST[admin_supervisa]',cupos_disponibles='$_POST[cupos_disponibles]',fecha_fin='$_POST[fecha_fin]',duracion_estimada='$_POST[duracion_estimada]' WHERE codigo='$_POST[codigo]'";
$result = mysqli_query($conn, $query) or 
die(mysqli_error($conn));
 
if($result){
    header ("Location: curso.php");
    
     
 }else{
     echo "Ha ocurrido un error al Eliminar el Curso";
 }
 
mysqli_close($conn);



?>