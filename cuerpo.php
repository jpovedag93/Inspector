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

			    <script src='scripts/jquery-2.2.3.min.js'></script>
			    <script src='scripts/bootstrap.min.js'></script>
			</head>

	";

}
	
	function header_html()
		{
			echo "
				<div>
					<p>
						
					</p>
				</div> "	;
		}

	function menu_html()
	{
		echo "
			<div class='bs-example'>
			    <ul class='nav nav-pills'>
			        <li class='active'><a href='index'>Home</a></li>
			        <li><a href='mostdocumento'>most doc</a></li>
			        <li>
			            <a href='contactenos'>Contactenos</a>
			        </li>
			        
			    </ul>
			</div>
		";
	}


	function footer_html()
		{
			echo "
				<div class='container-footer'>
			        <div class=''>
			            <p text-center>ADSI 748811-G2<br />© Copyright 2016 INSPECTOR todos los derechos resevados.</p>
			        </div>
        		</div>

			";
		}

	function etiquetalogin()
	{
		echo "
			<li class='dropdown pull-right'>
			    <a href='#' data-toggle='dropdown' class='dropdown-toggle'>Login <b class='caret'></b></a>
			    <ul class='dropdown-menu'>
			    	<li><a href='login'>Ingresar</a></li>
			    	<li><a href='#'>Registrarse</a></li>
			    </ul>
			</li>
		";
	}

?>