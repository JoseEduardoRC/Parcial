<?php 
include("cone_db.php");
   if(isset($_POST['register'])){
   	if(strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['correo'])>=1 && strlen($_POST['problema'])>=1 && strlen($_POST['ciudad'])>=1 && strlen($_POST['juzgado'])>=1 ){

        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $correo = trim($_POST['correo']);
        $problema = trim($_POST['problema']);
        $ciudad = trim($_POST['ciudad']);
        $juzgado= trim($_POST['juzgado']);

        $consulta = "INSERT INTO datos(nombre, apellido, correo, problema, ciudad, juzgado) VALUES ('$nombre','$apellido','$correo','$problema','$ciudad','$juzgado')";	
        $resultado = mysqli_query($conn,$consulta);
        if ($resultado) {
            ?>
   		    <h4 class="ok">El registro es valido ¡Gracias por su registro!</h4>
   		    <?php 

        }else{
        	?>
   		    <h4 class="bad">¡No se pudo registrar, los datos son incorrectos!.</h4>
   		    <?php 
        }
   	    }else{
   		?>
   		<h4 class="bad">¡Falto llenar algunos campos!</h4>
   		<?php  
   	}
   }
 ?>
