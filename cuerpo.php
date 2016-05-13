<?php

session_start();

	function head_html()
	{
	echo "
		<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8' />
				<title>Inspector</title>
				<meta name='description' content=''>
				<link rel='icon' href='./img/lupa.png'>
		
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
			<div class='bs-example' style='position:relative;left:-25px;'>
			    <ul class='nav nav-pills'>
			        <li class='active'><a href='index'>Inicio</a></li>
			        <li class='active'><a href='mostdocumento'>Mostrar Documento</a></li>
			        <li class='active'><a href='contactenos'>Contactenos</a>
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

		<div class='modal fade' id='miventana' tabindex='-1' role='dialog' aria-labelledby='myModallabel' aria-hidden='true'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
				<h1><strong>Inspector </strong>Formulario de registro</h1>
			</div>
			<div class='modal-body'>
				<div class='top-contentrg'>
        	
            <div class='inner-bg'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-8 col-sm-offset-2 text'>
                            
                            <div class='description'>                            	
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-6 col-sm-offset-3 form-box'>
                        	<div class='form-top'>
                        		<div class='form-top-left'>
                        			<h3>Registrate</h3>
                        		</div>
                        		<div class='form-top-right'>
                        			<i class='fa fa-lock'></i>
                        		</div>
                            </div>
                            <div class='form-bottom'>
			                    <form role='form' action='' method='post' class='login-form'>
			                    	<div class='form-group'>
			                    		<label class='sr-only' for='form-username'>Nombres</label>
			                        	<input type='text' name='regnombre' placeholder='Nombres...' class='form-username form-control' id='form-username'>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Apellidos</label>
			                        	<input type='text' name='regapellidos' placeholder='Apellidos...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Telefono</label>
			                        	<input type='text' name='regtelefono' placeholder='Telefono...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Email</label>
			                        	<input type='email' name='regemail' placeholder='Email...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Nick</label>
			                        	<input type='text' name='regnick' placeholder='Nick...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Contraseña</label>
			                        	<input type='password' name='regcontrasena' placeholder='Contraseña...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <div class='form-group'>
			                        	<label class='sr-only' for='form-password'>Confirme contraseña</label>
			                        	<input type='password' name='regconfcontrasena' placeholder='Confirme Contraseña...' class='form-password form-control' id='form-password '>
			                        </div>
			                        <button type='submit' class='btn btn-warning'>Registrarme</button>
			                        <a href='index'><button type='button' class='btn btn-danger'>Cancelar</button></a>
			                    </form>
		                    </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
			</div>
		</div>
	</div>
</div>
			<li class='dropdown pull-right'>
			    <a href='#' data-toggle='dropdown' class='dropdown-toggle'>Login <b class='caret'></b></a>
			    <ul class='dropdown-menu'>
			    	<li><a href='login'>Ingresar</a></li>
			    	<li><a href='#' data-toggle='modal' data-target='#miventana'>Registrarse</a></li>
			    </ul>
			</li>


		";
	}

function sesioniniciada()
{	 
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)
	{
	 	
	}
	else
	{
	header("location:pgerror");
	//echo "<script> alert(Esta pagina es solo para usuarios registrados.);</script><br>";
	//echo "<a href='login'>Login Here!</a>";
	 
	exit;
	}
	$now = date("Y-m-j H:i:s"); // checking the time now when home page starts
	 
	if($now > $_SESSION['expire'])
	{
	session_destroy();
	echo "Su sesion a terminado, <a href='login'>
	      Necesita Hacer Login</a>";
	exit;
	}
}

?>