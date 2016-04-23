<?php

	function head_html()
	{
	echo "
		<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8' />
				<title>Inspector</title>
				<meta name='description' content=''>
		
				<link rel='stylesheet' href='css/bootstrap.min.css'>
			    <link rel='stylesheet' href='css/bootstrap-theme.css'>

			    <script src='";  echo $path; echo "scripts/jquery-2.2.3.min.js'></script>
			    <script src='";  echo $path; echo "scripts/bootstrap.min.js'></script>


				<body>
				    <h1 class='text-center'>INSPECTOR</h1>
				    <a href='Login.aspx'>Login</a>
				    <ul id='menuinicio'>
				        
				        <li>Quienes Somos</li>
				        <li><a href='FormContacto.aspx'>Contactanos</a></li>
				    </ul>
				    <br />
				    <br />
				    <br />
				    <br />

				    <div class='text-center'>
				        <form id='BuscarDoc' runat='server'>
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
}
	
	function header_html()
		{
			echo "
				<div>
					<p>
						esta es la cabecera 
						<input type='button' value='boton' class='btn btn-danger' /> 
					</p>
				</div> "	;
		}


	function footer_html()
		{
			echo "
				<div class='navbar navbar-default navbar-fixed-bottom'>
        <div class='container'>
            <p>ADSI 748811-G2<br />© Copyright 2016 INSPECTOR todos los derechos resevados.</p>

        </div>

			";
		}

?>