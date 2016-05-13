<?php
	/* start the session */
	 
	session_start();
include_once("conexiondb.php");
//include_once("login.php");
	?>
	 
	<!DOCTYPE html>
	<html lang="en">
	 
	<head>
	 <title>Check Login</title>
	 <meta charset = "utf8" />
	</head>
	 
	 
	<body>
	 
	<?php


	 
	 $host_db = "localhost";
	 $user_db = "root";
	 $pass_db = "";
	 $db_name = "Inspector";
	 $tbl_name = "usuarios";
	 
	// Connect to server and select databse.
	$con = mysql_connect("$host_db", "$user_db", "$pass_db")or die("Cannot Connect to Data Base.");
	 
	mysql_select_db("$db_name")or die("Cannot Select Data Base");
 
	 
	// data enviada desde el formulario
	$username = $_POST['usuario'];
	$password = $_POST['contrasena'];
	 
	$sql= "SELECT * FROM $tbl_name WHERE Nick_usuario='$username' and Contrasena_Usuario='$password'";
	 
	$result=mysql_query($sql);
	 
	// counting table row
	$count = mysql_num_rows($result);
	// If result matched $username and $password
	 
	if($count != 0){
	 
	 $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $username;
	 $_SESSION['start'] = date("Y-m-j H:i:s");
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
	 
	//echo "Bienvenido! " . $_SESSION['username'];
	header("Location: indexr");
	 
	}
	 else {
	 echo "Username o Password estan incorrectos.";
	 
	 echo "<a href='login'>Volver a Intentarlo</a>";
	}
	 
	?>
	 
	</body>
	</html>
