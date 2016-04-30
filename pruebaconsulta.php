
<?php
include_once("conexiondb.php");
include_once("cuerpo.php");


function buscardoc()
{
	$doc = trim($_POST['docencper']);

	$sql = "SELECT rutaimg, nombre, email, telefono, mensaje FROM contacto WHERE telefono='".$doc."'";
			$result = mysql_query ($sql);
// verificamos que no haya error
		if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   	exit();
}	else {
	echo "<script type='text/javascript'>
         alert('El nº de teléfono ya existe');
         </script>";
     }
}


?>