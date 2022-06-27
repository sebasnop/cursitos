<?php
 
// Create connection
require('../configuraciones/conexion.php');

$codigo = $_POST["codigo"];

//query
if(($_POST["admin_supervisa"])=="NULL" AND ($_POST["profesor_ensenia"])=="NULL"){
	if($_POST["tipo"]==="SINCRONICO"){
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`cupos`,`fecha_fin`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]',$_POST[profesor_ensenia],$_POST[admin_supervisa],'$_POST[cupos]','$_POST[fecha_fin]')";
	} else{
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`duracion_estimada`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]',$_POST[profesor_ensenia],$_POST[admin_supervisa],'$_POST[duracion_estimada]')";
	}
} else if((($_POST["admin_supervisa"])=="NULL" AND ($_POST["profesor_ensenia"])!="NULL")){
	if($_POST["tipo"]==="SINCRONICO"){
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`cupos`,`fecha_fin`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]','$_POST[profesor_ensenia]',$_POST[admin_supervisa],'$_POST[cupos]','$_POST[fecha_fin]')";
	} else{
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`duracion_estimada`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]','$_POST[profesor_ensenia]',$_POST[admin_supervisa],'$_POST[duracion_estimada]')";
	}
} else if((($_POST["admin_supervisa"])!="NULL" AND ($_POST["profesor_ensenia"])=="NULL")){
	if($_POST["tipo"]==="SINCRONICO"){
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`cupos`,`fecha_fin`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]',$_POST[profesor_ensenia],'$_POST[admin_supervisa]','$_POST[cupos]','$_POST[fecha_fin]')";
	} else{
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`duracion_estimada`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]',$_POST[profesor_ensenia],'$_POST[admin_supervisa]','$_POST[duracion_estimada]')";
	}	
} else{
	if($_POST["tipo"]==="SINCRONICO"){
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`cupos`,`fecha_fin`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]','$_POST[profesor_ensenia]','$_POST[admin_supervisa]','$_POST[cupos]','$_POST[fecha_fin]')";
	} else{
		$query="INSERT INTO `curso`(`codigo`,`nombre`, `categoria`, `descripcion`,`cantidad_estudiantes`,`fecha_publicacion`,`tipo`, `profesor_ensenia`,`admin_supervisa`,`duracion_estimada`)
		VALUES ('$_POST[codigo]','$_POST[nombre]','$_POST[categoria]','$_POST[descripcion]','$_POST[cantidad_estudiantes]','$_POST[fecha_publicacion]','$_POST[tipo]','$_POST[profesor_ensenia]','$_POST[admin_supervisa]','$_POST[duracion_estimada]')";
	}
}
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if($result){
	header ("Location: curso.php");
		
}else{
	echo "Ha ocurrido un error al crear el Curso";
}



?>
