<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
	<title>NUEVA NOTICIA</title>
	<meta charset="utf-8
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-theme.css" rel="stylesheet">

    <!-- siimple style -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
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
            <li><a href="#"></a></li>
			<li><a href="#"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
<br><br>
<section id="principal">
<div align="center">
<form class="form-login" action="nueva_noticia.php" method="post"  enctype="multipart/form-data"> 
    
  <h2 class="form-login-heading">Título de la noticia:</h2><input class="form-control" name="titulo" type="text" /> <br />
   <h2 class="form-login-heading"> Texto de la noticia:</h2><textarea class="form-control" name="texto"></textarea> <br />


	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />

<input class="btn btn-theme btn-block" type="submit" name="añadir" value="Agregar noticia" style="background-color: black" />
</form>
</div>
</section>

<div id="footer">
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