<?php
include ("conexion.php"); 
$variablelocal=$_GET['noticia'];

            $db= "DBsystem";
            $host= "localhost";     
            $ps= "";
            $user= "root";


 
              
			  $resultado=mysqli_query($con,"DELETE FROM noticias WHERE id=$variablelocal");
	  	echo 'Se ha eliminado con exito<br>';
	  	echo '<a href="noticias.php">Regresar</a>';