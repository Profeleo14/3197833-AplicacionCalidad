<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="IMAGENES/profesor.ico"> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<title>USER FORM</title>
	
</head>
<body>
<br><br>


<!-- contenido -->

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
				<a href="PHP/USER/select_user.php" class="close" >&times;</a> 

				FORMULARIO NUEVO USUARIO					
				</div>

				<!-- PANEL BOBY // CONTENDIDO DEL PANEL -->

				<div class="panel-body">
				<form action="PHP/USER/agregar_user.php" method="post">

				<div class="form-group"> 


<!-- PRIMER ENTRADA CON COMBOBOX IMPORTANDO DATOS BASE DE DATOS-->

<?php

include 'PHP/USER/conexion.php';
?>

    <div class="form-group">

            <label>Tipo de Documento</label>                 
            <select class="form-control" name="tipo_doc" >
            <?php
                foreach ($con->query('SELECT * FROM tipo_documento') as $row) 
                {
                     echo '<option value="'. $row['COD_TDOC'] .'">'. $row['DESC_TDOC'] . '</option>';
                }
             ?>
             </select>
    </div>


<!-- PRIMER METODO DE ENTRADA -->

				
					<div class="form-group">

							<label>Ingrese su Documento de Identidad</label>
							<input type="number" class="form-control" placeholder="Por favor ingrese su N° de Documento" name="ID" required> 
					</div>

				<!-- SEGUNDO METODO DE ENTRADA -->

					<div class="form-group">
							<label>Ingrese su Nombre</label>
							<input type="text" class="form-control"  placeholder="Por favor ingrese su Nombre" style="text-transform:uppercase" name="NAME" required>
					</div>
					

				<!-- TERCER METODO DE ENTRADA -->

					<div class="form-group">
							<label for="surname_u">Ingrese su Apellido</label>
							<input type="text" class="form-control" placeholder="Por favor ingrese su Apellido" style="text-transform:uppercase" name="SURNAME" required>
					</div>
					
				<!-- CUARTO METODO DE ENTRADA -->

					<div class="form-group">
							<label for="age_u">Ingrese su Dirección</label>
							<input type="text" class="form-control" placeholder="Por favor ingrese su Dirección" name="DIREC">
					</div>	

									<button class="btn btn-primary">Agregar</button>

				</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>