<?php
$var=$_GET['noticia'];
$var2=$_GET['variable2'];

echo '
<form action="subir.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
	<input type="submit" name="subir" value="Subir"/>
	<input type="hidden" name="cv" value='.$var.'/>
	<input type="hidden" name="idgen" value="'.$var2.'"/>
</form>';
