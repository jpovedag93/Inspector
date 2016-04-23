<?php

include("cuerpo.php");
include("conexiondb.php");

head_html();
?>

<?php

	echo "
		<div class='text-center'>
			<body>
				<h1>Contactenos</h1>
				<ul id='menuinicio'>
			        <li><a href='index.php'>INICIO</a></li>
			        <li><a>Quienes Somos</a></li>
			        <li><a href='contactenos.php'>Contactanos</a></li>
		   	    </ul>
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