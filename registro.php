<?php

require("conexiondb.php");
require("cuerpo.php");

$rnom = $_POST['regnombre'];
$rapell = $_POST['regapellidos'];
$rtel = $_POST['regtelefono'];
$remail = $_POST['regemail'];
$rciudad = $_POST['regciudad'];
$rnick = $_POST['regnick'];
$rcont = $_POST['regcontrasena'];
$rrcont = $_POST['regconfcontrasena'];

$sql = "INSERT INTO usuarios (Nick_Usuario, Nombre_Usuario, Apellido_Usuario, ciudad_usuario, Telefono_Usuario, Correo_Usuario, Contrasena_Usuario) VALUES ('".$rnick."', '".$rnom."', '".$rapell."', '".$rciudad."', '".$rtel."', '".$remail."', '".$rcont."')";

$res =	mysql_query($sql);

if($res)
{
	echo "Usuario registrado";
		header("Location: login");
}
else
{
	echo "Usuario no registrado";
}
?>