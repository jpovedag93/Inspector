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
			        <label>Nombre<input type='text' ID='txtnomcontacto' runat='server' /><br />
			        <label>Email<input type='text' ID='txtemailcontacto' /><br />
			        <label>Telefono<input type='text' ID='txttelcontacto' /><br />
			        <label>Mensaje<input type='textarea' id='txtmensaje' Columns='50' Rows='5' /><br />		      
			        <input type='submit' class='btn btn-danger' value='Enviar' OnClick='btncontacto_Click' />
		   		</form>
	    	</body>
	    </div>
	";
?>
	<footer>
		<?php footer_html(); ?>
	</footer>