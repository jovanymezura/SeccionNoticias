<?php


       
            {

            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $fecha = date('Y-m-d');
            $id    = $_POST['ii'];


            $db= "DBsystem";
            $host= "localhost";     
            $ps= "";
            $user= "root";

 $con = mysqli_connect($host, $user, $ps, $db)or die ("No se pudo conectar a la base de datos");
        mysqli_select_db($con, $db)or die("cannot select DB");
 
            mysqli_query($con,"UPDATE noticias SET 
                titulo = '$titulo',
                fecha  = '$fecha',
                texto  = '$texto' WHERE $id=id");
            
            /**mysql_query("INSERT INTO registro values ('','$descripcionregis','$involucradosregis','$fecharegis')");  
            mysql_query("INSERT INTO tipoac   values('','$tipoactividad','$statusactividad')");
            mysql_query("INSERT INTO ubicacion values ('','$entidad','$region')");
            echo "<center>Se realizo con existo la modificacion</center><br>";
            echo "<center><a href='index.php'>Volver al menu</a></center>"; */
echo "Datos modificados correctamente<br>";

echo "<a href='../index.html'>Regresar al menu<a>";
        }

            