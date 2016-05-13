<?php

include_once("cuerpo.php");
include_once("conexiondb.php");

head_html();
etiquetalogin();

?>


<body class="bodylogg">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Inspector </strong>Iniciar sesion</h1>
                            <div class="description">                            	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Ingresa Usuario y contraseña para iniciar:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="insesion" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Usuario...</label>
			                        	<input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control" id="form-username" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Contraseña...</label>
			                        	<input type="password" name="contrasena" placeholder="Contraseña..." class="form-password form-control" id="form-password" required>
			                        </div>
			                        <button type="submit" class="btn btn-info">Sign in!</button>
                                    <a href='#' data-toggle='modal' data-target='#miventana'><button class="btn btn-warning">Registrarse</button></a>
			                        <a href="index"><button type="button" class="btn btn-danger">Cancelar</button></a>

			                    </form>
		                    </div>
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>


        <!-- Javascript -->
        <script src="scripts/jquery-2.2.3.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/jquery.backstretch.min.js"></script>
        <script src="scripts/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="scripts/placeholder.js"></script>
        <![endif]-->

    </body>



<footer>
	<?php footer_html();?>
</footer>