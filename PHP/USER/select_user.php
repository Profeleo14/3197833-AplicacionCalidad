<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	<title>USER FORM</title>
	
</head>
<body>

<?php

include "conexion.php";


$sql1= "SELECT * FROM persona";


$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>


<div class="container">

<br><a href="../../FORM_USER.php" class="btn btn-lg btn-primary" >Nuevo Registro</a>
<h2> CONSULTA DE REGISTROS </h2>
<table class="table table-striped">
<thead>
	<th>Tipo de ROL</th>
	<th>Tipo de Identificación</th>
	<th>Identificación</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Direccion</th>
	<th></th>
</thead>


<?php while ($r=$query->fetch_array()):?>

<tr>
	<td><?php echo $r["COD_ROL"]; ?></td>
	<td><?php echo $r["COD_TDOC"]; ?></td>
	<td><?php echo $r["ID_PERSONA"]; ?></td>
	<td><?php echo $r["NOMBRE"]; ?></td>
	<td><?php echo $r["APELLIDO"]; ?></td>
	<td><?php echo $r["DIRECCION"]; ?></td>
	<td style="width:150px;">

		<a href="editar_user.php?&ID_PERSONA=<?php echo $r["ID_PERSONA"];?>&COD_TDOC=<?php echo $r["COD_TDOC"] ;?>" class="btn btn-sm btn-success" >Editar</a>

	
		<a href="eliminar_user.php?&ID_PERSONA=<?php echo $r["ID_PERSONA"];?>&COD_TDOC=<?php echo $r["COD_TDOC"] ;?>" class="btn btn-sm btn-warning" onclick="return confirm('¿Esta seguro de eliminar este Usuario?')">Eliminar</a>
		
	</td>
</tr>

<?php endwhile;?>

</table>

<?php else:?>
<div class="container">
<br><a href="../../FORM_USER.php" class="btn btn-lg btn-primary" >Nuevo Registro</a><br>
<br><p class="alert alert-warning">No hay resultados que mostrar!!!</p>
</div>
<?php endif;?>
</div>
</html>
