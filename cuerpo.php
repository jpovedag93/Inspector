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


	function footer_html()
		{
			echo "
				<div class='navbar navbar-default navbar-fixed-bottom'>
        <div class='container'>
            <p text-center>ADSI 748811-G2<br />© Copyright 2016 INSPECTOR todos los derechos resevados.</p>

        </div>

			";
		}

?>