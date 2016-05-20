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
		
$doc = trim($_POST['docencper']);

	$sql = "SELECT Numero_Documento, Tipo_Documento, Otro_Tipo_Documento, Nombre_en_Documento, Descripcion_Documento, Imagen, Lugar, Tiempo, Nick_Usuario_Busqueda, Estado_Documento FROM documento WHERE Numero_Documento='".$doc."'";
			$result = mysql_query ($sql);
// verificamos que no haya error
		if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   echo "<script>alert('no se econtro docuemntos');</script>";
   	exit();
}	else {

while ($row = mysql_fetch_row($result)){
echo "
<div style='color: #fff;'>
 <table border='0' align='center' style='max-width: 50%; text-align:center;' >
	 	<tr>
	 		<td colspan='2'>
	 			&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<img src='".$row[5]."' id='imgconsulta' class='img-rounded'width='250px' height='150px' />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br /> <br />
	 		</td>
	 	</tr>
	 	</tr>
	 		
 		<td  colspan='2' style='max-width: 50%;'>			
 			<b>Descripción: </b><p for='ciudad'>".$row[4]."</p>
		</td>
	</tr>
 		<tr>
	 		<td>
	 			<b>Tipo Documento: </b><p for='numerodoc'>".$row[1]."</p> 
	 		</td>
	 		<td>
	 			<b>Numero de Documento: </b><p for='numerodoc'>".$row[0]."</p>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>
	 			<b>Nombre: </b><p for='descripcion'>".$row[3]."</p>	
	 		</td>
	 		<td>
	 			<b>Fecha de registro: </b><p for='descripcion'>".$row[7]."</p>	
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>
	 			<b>Estado Documento: </b><p for='descripcion'>".$row[9]."</p>
	 		</td>
	 		<td>
	 			<b>Ciudad: </b><p for='descripcion'>".$row[6]."</p>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td>
	 			<b>Usuario que registró documento: </b><p for='descripcion'>".$row[8]."</p>
	 		</td>	 		
	 	  	
</div>
 </table>
 <a href='indexr' class='text-center' ><input type='button' class='btn btn-warning text-center' align='center' value='Volver al inicio' /></a>
 </div>

 ";}}
?>

<footer>
	<?php footer_html(); ?>
</footer>

</body>		