<html>
  <head>
    <title>EDITAR USUARIOS</title>
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>

<?php
include "conexion.php";

$id= $_GET["ID_PERSONA"];
$td= $_GET["COD_TDOC"];

// echo $id. "<br>";
// echo $td;

$sql1= "SELECT * FROM persona WHERE ID_PERSONA = '$id' AND COD_TDOC= '$td'";
$query = $con->query($sql1);
$person = null;

if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}


  }
?>

<?php if($person!=null):?>

<form method="post" action="actualizar.php">

<!-- contenido -->
<br><br><br><br>
  <div class="container">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-success">
        <div class="panel-heading"> 
         ACTUALIZAR USUARIO          
        </div>

        <!-- PANEL BOBY // CONTENDIDO DEL PANEL -->

        <div class="panel-body">

       
        <!-- PRIMER METODO DE ACTUALIZAR -->

          <div class="form-group">
          <label>Ingrese su Nombre</label>
          <input type="text" class="form-control" value="<?php echo $person->NOMBRE; ?>" name="NAME" required>
          </div>  

        <!-- SEGUNDO METODO DE ACTUALIZAR -->

          <div class="form-group">
          <label>Ingrese su Apellido</label>
          <input type="text" class="form-control" value="<?php echo $person->APELLIDO; ?>" name="SURNAME" required>
          </div>  

        <!-- TERCER METODO DE ACTUALIZAR -->

          <div class="form-group">
          <label>Direccion</label>
          <input type="text" class="form-control" value="<?php echo $person->DIRECCION; ?>" name="DIREC">
          </div>  
  
              <input type="number" name="ID" style="display:none" value="<?php echo $person->ID_PERSONA; ?>">
              <input type="number" name="TIPO_DOC" style="display:none" value="<?php echo $person->COD_TDOC; ?>">

              <button type="submit" class="btn btn-success">Actualizar</button>

</form>

<?php else:?>

  <p class="alert alert-danger">No se encuentra el Usuario a Modificar</p>

<?php endif;?>

  </body>
</html>