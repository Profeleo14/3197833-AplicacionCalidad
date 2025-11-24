<?php

if(!empty($_GET)){
			include "conexion.php";

			$id= $_GET["ID_PERSONA"];
			$td= $_GET["COD_TDOC"];

			// echo $id."<br>";
			// echo $td."<br>";
			
			$sql = "DELETE FROM persona WHERE ID_PERSONA= '$id' AND COD_TDOC= '$td'";
			$query = $con->query($sql);
			
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='select_user.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='select_user.php';</script>";

			}
}

?>