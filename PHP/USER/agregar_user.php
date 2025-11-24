<?php

			include "conexion.php";

			$tdoc= $_POST ['tipo_doc'];
			$id= $_POST ['ID'];
			$name= $_POST ['NAME'];
			$surname= $_POST ['SURNAME'];
			$dir= $_POST ['DIREC'];
			$rol= 100;

			 $sql = "INSERT INTO persona (COD_TDOC, ID_PERSONA, NOMBRE, APELLIDO, DIRECCION, COD_ROL) 

			 VALUES ('$tdoc', '$id', UPPER('$name'), UPPER('$surname'), '$dir', '$rol')";	
try {

$con->query($sql);
print "<script>alert(\"Agregado exitosamente.\");window.location='select_user.php';</script>";

} catch (Exception $e){

echo $e->getMessage();

} ?>
