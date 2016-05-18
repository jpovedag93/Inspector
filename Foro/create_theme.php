<?php 

    $link = mysql_connect('localhost','root','') or die ("Error al conectar al servidor");
    $db = mysql_select_db("foro", $link) or die ("Error al seleccionar la base de datos.");

    if(isset($_POST["tema"]) && isset($_POST["autor"]) && isset($_POST["descripcion"]))
    {
        $tema = $_POST["tema"];
        $autor = $_POST["autor"];
        $descripcion = $_POST["descripcion"];
    }
    else
    {
        exit;
    }

    $query = "INSERT INTO temas VALUES (null, '" . $tema . "', '" . $autor . "', NOW(), '" . $descripcion . "')";

    $resul = mysql_query($query);

    if($resul)
        header("Location: index.php?new_theme_success=1");
    else
        header("Location: index.php?new_theme_error=1");

    
    