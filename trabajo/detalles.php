<?php
$variablelocal=$_GET['noticia'];
$idImagen=$_GET['variable2'];

            $db= "DBsystem";
            $host= "localhost";     
            $ps= "";
            $user= "root";

 $con = mysqli_connect($host, $user, $ps, $db)or die ("No se pudo conectar a la base de datos");
        mysqli_select_db($con, $db)or die("cannot select DB");
$id= $variablelocal;
$consulta = mysqli_query($con,"SELECT imagen FROM imagenes WHERE imagen_id=$idImagen");

//con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
//de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
//si el resultado fue exitoso
//obtendremos el dato que ha devuelto la base de datos
$datos = mysqli_fetch_assoc($consulta);
//ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
$ruta = "imagenes/" . $datos['imagen'];

 $con = mysqli_connect($host, $user, $ps, $db)or die ("No se pudo conectar a la base de datos");
        mysqli_select_db($con, $db)or die("cannot select DB");
 
          $resultado= mysqli_query($con,"SELECT * FROM  noticias WHERE id=$variablelocal");

 	 while ($registro=mysqli_fetch_array($resultado))
 	 {
   		
      
    echo '
<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles1.css">    
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min

<fieldset>
        <legend>
            noticia</legend>
        <div>
        <section id="main-content">
          <section  class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Informacion de Noticia</h3>
        <div  class="row mt">
              <div a class="col-lg-12">
                      <div  class="content-panel">
                          <section  id="no-more-tables
        
         <section  id="main-content">
          <section class="wrapper">
    		<label>'.$registro['titulo'].'<br></label>
    		<br><img src="'.$ruta.'" /><br>
    		<label>'.$registro['texto'].'</label>
        </section>
        </section>';

  }
  	echo "<br>";
    echo "<br>";
    echo "<label><a href='../index.html'>Regresar al menu</a></i>";