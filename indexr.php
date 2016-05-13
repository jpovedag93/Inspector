<?php



include_once("cuerpo.php");
include_once("conexiondb.php");

sesioniniciada();
head_html();
etiquetalogin();



	echo "
		<body class='bodyindex'>
			<br /><br />
			<h1 class='tdoc'>INSPECTOR</h1>  <br/>";
?>
			<?php menu_html(); ?>
	<?php 
	echo"
		<br /><br /><br />
			<div class='text-center'>
		        <form id='BuscarDoc' action='querysdb' method='POST'>
		            <p class='tdoc'>Digita el numero de Documento</p>
		            <input type='text' placeholder='No. Documento' name='docencper' class='form-username form-controlbusc' height='33' Width='25px' Font-Size='34px' align='center' />
		            <br />
		                <input type='submit' class='btn btn-primary' value='Encontré este Documento' OnClick='btnDocEncontrado_Click' />
		            <input type='button' class='btn btn-warning' runat='server' value='Perdí este Documento' OnClick='btnDocEncontrado_Click' /><br />
		            <br />
		        </form>
		    </div>
		    <input type='button' class='btn btn-warning' value='cerrar sesion' /><br />
		    <a href='finsesion'>cerrar sesion</a>
		            <br />

		</body>
";
 footer_html();
?>

		
