 <?php
	/**sesiones de php
	* 
	*/
            $db= "DBsystem";
            $host= "localhost";     
            $ps= "";
            $user= "root";

 $con = mysqli_connect($host, $user, $ps, $db)or die ("No se pudo conectar a la base de datos");
        mysqli_select_db($con, $db)or die("cannot select DB");
 
?> 