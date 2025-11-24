<?php

			include "conexion.php";

$nom= $_POST['NAME'];
$apel= $_POST['SURNAME'];
$dir= $_POST['DIREC'];
$id_usu= $_POST['ID'];
$td= $_POST['TIPO_DOC']; 


			
			$sql = "UPDATE persona SET NOMBRE = '$nom', APELLIDO = '$apel', DIRECCION = '$dir' WHERE ID_PERSONA = '$id_usu' AND COD_TDOC = '$td'";
			
			$query = $con->query($sql);

			if($query!=null)

			{
				print "<script>alert(\"Actualizado exitosamente.\");window.location='select_user.php';</script>";
			}

				else
				{
					print "<script>alert(\"No se pudo actualizar.\");window.location='select_user.php';</script>";

				}
		


?>