<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Formulario de Registro del juzgado</title>
</head>
<body>
  </body>
    <section class="form-register">
    <form method="post">
    <h4>Juzgado de Ubate</h4>
    <img src="lo.png" width="100" height="100">
    <input class="controls" type="nombre" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="apellido" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
    <input class="controls" type="correo" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="control" type="problema" name="problema" id="problema" placeholder="Descripcion del problema">
    <input class="controls" type="ciudad" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad">
    <input class="controls" type="juzgado" name="juzgado" id="juzgado" placeholder="Ingrese N. de juzgado">
    <input class="botons" type="submit" name = "register">
    </form>
    </section>
    <?php 
        include("registrar.php");
    ?> 
 </body>
</html>
