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
				    	<form action='envcorreocontacto' method='post'>
				     <p><input type='text' placeholder='Tu Nombre' name='txtnombrecontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
				     <p><input type='text' placeholder='Tu Correo Electronico' name='txtcorreocontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
				     <p><input type='text' placeholder='Tu Telefono' name='txttelefonocontactar' class='form-username form-controlbusc' height='25' Width='20px' Font-Size='40px' align='center' /></p>
					 <p><p><textarea input type='text' placeholder='Tu Mensaje' name='txtmensajecontactar' class='form-username form-controlbusc' style='height:70%;'></textarea></p></p>	   
			         <br><input type='submit' class='btn btn-danger' value='Enviar' /></>


		   		</form>
	    	</body>
	    </div>
	";
?>
	<footer>
		<?php footer_html(); ?>
	</footer>