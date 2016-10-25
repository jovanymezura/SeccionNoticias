<?php
            $db= "DBsystem";
            $host= "localhost";     
            $ps= "";
            $user= "root";
    
 $con = mysqli_connect($host, $user, $ps, $db)or die ("No se pudo conectar a la base de datos");
        mysqli_select_db($con, $db)or die("cannot select DB");

        if(isset($_POST['titulo'])         && !empty($_POST['titulo'])
            &&  isset($_POST['texto'])   &&!empty($_POST['texto']))
                
            {

            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $fecha = date('Y-m-d');
            
          $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
          $limite_kb = 1000;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        echo 'hello';
      $ruta = "imagenes/" . $_FILES['imagen']['name'];
        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
        echo $ruta;
        if (!file_exists($ruta)){
            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
            //almacenara true o false
            $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
            
            echo $resultado;
            if ($resultado){
                echo 'hello';
                $nombre = $_FILES['imagen']['name'];
                $resultado = mysqli_query($con,"INSERT INTO imagenes VALUES ('','$nombre')");
               $query= mysqli_query($con,"SELECT MAX(imagen_id) AS id FROM imagenes");
                if ($row = mysqli_fetch_row($query)) 
                    {
                        $id = trim($row[0]);
                     }
            mysqli_query($con,"INSERT INTO noticias values ('','$id','$titulo','$fecha','$texto')");
        

                            echo "Datos insertados correctamente<br>";
                            echo '<a href="../index.html">Regresar al menu</a>';
        }
        }else{
            echo 'Esa Imagen ya existe';
        }
    }    
}else{
    echo 'LOS CAMPOS NO DEBEN DE ESTAR VACIOS O TAL VEZ NO SE INSERTO POR ERROR EN LA RED ';
}



            