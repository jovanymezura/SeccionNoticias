 <?php
include("conexion.php");
echo
'<!DOCTYPE html >
<html lang="en" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Siimple - Free Bootstrap 3 Noticias Page</title>

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="../assets/css/style.css" rel="stylesheet">'; 
            $db_table = "noticias";


    $total = mysqli_num_rows(mysqli_query($con,"SELECT * FROM ".$db_table.""));
    $query_noticias = mysqli_query($con,"SELECT * FROM ".$db_table.""); // Ejecutamos la consulta
    $sql = "SELECT noticias.id,noticias.titulo,noticias.fecha,noticias.texto,imagenes.imagen FROM noticias JOIN imagenes ON noticias.id=imagenes.idnoticia";
   // $query_noticias = mysqli_query($con,$sql);
    $limite = 50; // Número de carácteres a mostrar antes de el "Leer más"
    
  if($total != 0) 
      {   
    while($columna = mysqli_fetch_assoc($query_noticias)) // Realizamos un bucle que muestre todas las noticias, utilizando while.
      {
        if ($columna['idImagen']==0)
            {
              $ruta = "imagenes/imagen";
            }else{
              $id = $columna['idImagen'];
              $sql = "SELECT imagen FROM imagenes WHERE $id=imagen_id";
              $imagen_noticia = mysqli_query($con,$sql);
              $imagenes = mysqli_fetch_assoc($imagen_noticia);
              $ruta = "imagenes/" .$imagenes['imagen'];
            };
                
        echo '
        <body>
            <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html">Firewall Solutions</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html">Regresar al Menu</a></li>
      <li><a href="#"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

      
        <legend>noticia</legend>
        <div>
         <h3><i class="fa fa-angle-right"></i> Información de Noticias</h3>
        <section id="main-content">
          <section  class="wrapper">
           
<section id="principal">
    <div align="center">
          <h3><i class="fa fa-angle-right"></i>Titulo Noticia:<td><div style="width:400px; overflow:hidden;">'.$columna['titulo'].'<br></td></h3>
    </div>
  <div class="row mt"> 
              <div class="col-lg-12">
                  <div class="form-panel">
        <table>
            <tr>
                <i class="fa fa-angle-right"></i>Fecha Noticia: '.$columna['fecha'].'
                
            </tr>
            <tr><div id="principal">
            <img src="'.$ruta.'" width="300px" height="250px" BORDER="0" />
            </div></tr>
            <tr>
              <div id="principal">
                <td colspan="2">'.substr($columna['texto'], 0, $limite).' ...</td> <!-- Utilizamos la función substr para mostrar un determinado número de carácteres. V
              </div>
              
            <tr>
                <td colspan="2"><a href="?noticia='.$columna['id'].'">Detalles</a></td> <!-- Incluimos un enlace para leer la noticia entera -->
            
            <tr>
                <td colspan="2" class="btn-theme" style="background-color: black" ><a href="detalles.php?noticia='.$columna['id'].'&&variable2='.$columna['idImagen'].'" style=”text-align: center”>Detalles</a></td> 
            
            <tr>
                <td colspan="2" class="btn-theme" style="background-color: black"><a href="modificar.php?noticia='.$columna['id'].'">Modificar</a></td> 
            <tr>
                <td colspan="2" class="btn-theme" style="background-color: black"><a href="subirimagen1.php?noticia='.$columna['id'].'&&variable2='.$columna['idImagen'].'">EditarFoto</a></td>
            <tr>
                <td colspan="2" class="btn-theme" style="background-color: black"><a href="eliminar.php?noticia='.$columna['id'].'">Eliminar</a></td>
            </tr>
            
        </table>
                   
                    
                    </section>
                  </section>
                  </section>
                  </section>
                  </body>';
                  }}

    else {
                            echo '<a href="../index.html">NO EXISTEN NOTICIAS</a>';
}


    
    echo '<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
              <p class="copyright">&copy; Siimple Theme</p>
      </div>
            <div class="col-md-6">
                <div class="credits">
                    <!-- 
                        All the links in the footer should remain intact. 
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Siimple
                    -->
                    <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
    </div>    
  </div>  
  </div>



  </body>
  </html>';
    

?> 