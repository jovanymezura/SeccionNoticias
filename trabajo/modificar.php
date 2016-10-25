<?php
$variablelocal=$_GET['noticia'];

include ("conexion.php"); 
              
			  $resultado=mysqli_query($con,"SELECT *FROM noticias WHERE id=$variablelocal");
		while ($registro=mysqli_fetch_array($resultado))
		{
			echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siimple - Free Bootstrap 3 Landing Page</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="../assets/css/style.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Siimple
        Theme URL: https://bootstrapmade.com/free-bootstrap-landing-page/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
			<body>
		<form action="modifica_noticia.php"  method="post"> <!-- Creamos el formulario, utilizando la etiqueta form, cuyo atributo action="" indicará donde se procesará el formulario -->
    <h2 class="form-login-heading">Título de la noticia:</h2><input class="form-control" name="titulo" value= '.$registro['titulo'].' type="text" /> <br />
    	
    	<h2 class="form-login-heading"> Texto de la noticia:</h2><textarea class="form-control" name="texto">'.$registro['texto'].'</textarea> <br />
    	
  	
  							<input type="hidden" name="ii" value='.$variablelocal.'>
  						  
    <input type="submit" name="Actualizar" value="Añadir noticia" />
</form>

</body>';
}
