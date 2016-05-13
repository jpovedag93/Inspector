<?php

include("cuerpo.php");
include("conexiondb.php");

head_html();
?>

<?php
echo "
		<body class='bodyindex'>
			<br /><br />
			<h1 class='tdoc'>INSPECTOR</h1> <br/>";
?>
			<?php menu_html(); ?>
	<?php 
	echo "
		<div class='text-center'>
			<body>
				<h3>Escribe tu comentario</h3>
				    	<form action='conexiondb.php' method='GET'>
				     <p><input type='text' placeholder='Tu Nombre' name='txtnombrecontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
				     <p><input type='text' placeholder='Tu Correo Electronico' name='txtcorreocontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
				     <p><input type='text' placeholder='Tu Telefono' name='txttelefonocontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
					 <p><p><textarea class='form-control' rows='5' cols='10' whith='10px' id='comment'></textarea></p></p>	   
			         <br><input type='submit' class='btn btn-danger' value='Enviar' OnClick='btncontacto_Click' /></>


		   		</form>
	    	</body>
	    </div>
	";
?>
	<footer>
		<?php footer_html(); ?>
	</footer>