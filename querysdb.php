<?php

include_once("conexiondb.php");
include_once("cuerpo.php");
head_html();
?>

	<body class="bodyindex">
					
					
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

	$sql = "SELECT Numero_Documento, Tipo_Documento, Otro_Tipo_Documento, Nombre_en_Documento, Descripcion_Documento, Imagen, Lugar, Tiempo, Nick_Usuario_Busqueda, Estado_Documento FROM documento WHERE Numero_Documento='".$doc."'";
			$result = mysql_query ($sql);
// verificamos que no haya error
		if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   	exit();
}	else {
    

while ($row = mysql_fetch_row($result)){
echo "
<div>
 <table border='0' width='1200px' align='center'>
 	<tr>
 		<td>
 			<img src='".$row[5]."' id='imgconsulta' class='img-rounded'width='200px' height='200px' />
 		</td>
 		<td class='one' style='max-width:900px'>
			<h3>Numero de Docuemnto: </h3><p for='numerodoc'>".$row[0]."</p>
 			Tipo Documento: <p for='numerodoc'>".$row[1]."</p> 			
 			<p for='descripcion'>".$row[2]."</p>		
 			<p for='descripcion'>".$row[3]."</p>	
 			<p for='descripcion'>".$row[4]."</p>
 			<p for='descripcion'>".$row[6]."</p>
 			<p for='descripcion'>".$row[7]."</p>
 			<p for='descripcion'>".$row[8]."</p>
 			<p for='descripcion'>".$row[9]."</p>
		</td> 	
</div>
 </table>
 </div>
 ";}}
?>

<footer>
	<?php footer_html(); ?>
</footer>

</body>		