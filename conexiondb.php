

<?php 

$con = mysql_connect("localhost","root","");
   if (!$con){die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());}
/* ********************************************** */
/********* CONECTA CON LA BASE DE DATOS  **************** */
   $database = mysql_select_db("inspector",$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}

   mysql_set_charset('utf8')
/* ********************************************** */
?>