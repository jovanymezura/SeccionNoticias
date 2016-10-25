<?php
include("conexion.php");
			$id = $_POST['cv'];
			$idImagen = $_POST['idgen'];
			
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 1000;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "imagenes/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		
		if (!file_exists($ruta)){
			
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			echo "hello";
			if ($resultado){
				
				$nombre = $_FILES['imagen']['name'];
				mysqli_query($con,"UPDATE imagenes SET imagen='$nombre' WHERE imagen_id=$idImagen");
				echo "el archivo ha sido actualizado exitosamente";
				echo "<a href='../index.html' >Regresar al menu</a>";
			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}


?>