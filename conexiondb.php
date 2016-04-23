

<?php 

function conexion()
{

		if (!($link=mysql_connect("localhost","root","")))  
	   		{
	   			echo "Error conectando a la base de datos.";  
	      		exit(); 
	      	}  
	    if (!mysql_select_db("Inspector",$link))  
	  		{
	  			echo "Error al conectar con la base de datos.";  
	      		exit(); 
	      	}  
	   return $link;  
	

}
	
		$nom = $_GET['txtnomcontacto'];
		$email = $_GET['txtemailcontacto'];
		$tel = $_GET['txttelcontacto'];
		$mensaje = $_GET['txtmensaje'];

		$ins = mysql_query("INSERT INTO contacto (nombre, email, telefono, mensaje) VALUES ('$nom', '$email', $tel, $mensaje)", $link);  

		if($ins)
		{
			echo "datos insertados";
		}
		else
		{
			echo "datos NO insertados, por favor revisar";
		}
	