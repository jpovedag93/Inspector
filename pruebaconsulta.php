
<?php
include_once("conexiondb.php");
include_once("cuerpo.php");




$doc = trim($_POST['docencper']);

	$sql = "SELECT * FROM contacto WHERE telefono='".$doc."'";
			$result = mysql_query ($sql);
// verificamos que no haya error
		if (mysql_num_rows($result)>0){
   			echo "
   			<script type='text/javascript'>
         		alert('El Numero $doc registra en la base de datos');
         		window.location.href='index';
         		</script>
   			";}		
		else {
			echo "
         		<script type='text/javascript'>
         		alert('El Numero $doc NOOO registra en la base de datos');
         		window.location.href='index';
         		</script>
        	 ";}

?>

