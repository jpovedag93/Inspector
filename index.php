<?php

include("./cuerpo.php");

head_html();
?>

<?php

	echo "
		<body>

			<h1 class='text-center'>INSPECTOR</h1>
		    <a href='Login.aspx'>Login</a>
		    <ul id='menuinicio'>
				        
		        <li>Quienes Somos</li>
		        <li><a href='contactenos.php'>Contactanos</a></li>
		    </ul>
		    <br />
		    <br />
		    <br />
		    <br />

		    <div class='text-center'>
		        <form id='BuscarDoc' runat='server' >
		            <p class='text-center'>Digita el numero de Documento</p>
		            <br />
		            <input type='text' placeholder='No. Documento' runat='server' class='panel panel-default' Height='43px' Width='259px' Font-Size='30px' align='center' /><br />
		            <br />
		                <input type='button' class='btn btn-primary' runat='server' value='Encontré este Documento' OnClick='btnDocEncontrado_Click' />
		            <input type='button' class='btn btn-warning' runat='server' value='Perdí este Documento' OnClick='btnDocEncontrado_Click' /><br />
		            <br />
		        </form>
		    </div>

		</body>
";

?>


	<header>	
		<?php header_html(); ?>
	</header>
	<footer>
	<?php footer_html(); ?>		
	</footer>
</body>

	


