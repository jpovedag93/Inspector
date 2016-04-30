<?php

include_once("conexiondb.php");
include_once("cuerpo.php");
head_html();
?>

				
<br/ >
<br/ >
<br/ >
<br/ >
<?php

	/*$nom = $_GET['txtnomcontacto'];
		$email = $_GET['txtemailcontacto'];
		$tel = $_GET['txttelcontacto'];
		$mensaje = $_GET['txtmensaje'];

		$ins = mysql_query("INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES ('$nom', '$email', $tel, $mensaje)", $link);  

		if($ins)
		{
			echo "datos insertados";
		}
		else
		{
			echo "datos NO insertados, por favor revisar";
		}
	*/
		
$doc = trim($_POST['docencper']);

	$sql = "SELECT rutaimg, nombre, email, telefono, mensaje FROM contacto WHERE telefono='".$doc."'";
			$result = mysql_query ($sql);
// verificamos que no haya error
		if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   	exit();
}	else {
    

while ($row = mysql_fetch_row($result)){
echo "
<div>
 <table border='5
' width=200px>
 	<tr width=200px>
 		<td>
 			<img src='".$row[0]."' id='imgconsulta' class='img-rounded'width='200px' height='200px' />
 		</td>
 		<td class='one' style='max-width:90px'>
			<p for='numerodoc'>".$row[1]."</p><br />
 			<p for='numerodoc'>".$row[2]."</p><br /> 			
 			<p for='descripcion'>".$row[3]."</p><br />		
 			<p for='descripcion'>".$row[4]."</p><br />	
		</td> 	
</div>
 </table>
 </div>
 ";}}
?>

<footer>
	<?php footer_html(); ?>
</footer>