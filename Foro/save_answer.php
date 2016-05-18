<?php 

$link = mysql_connect('localhost','root','') or die ("Error al conectar al servidor");
$db = mysql_select_db("foro", $link) or die ("Error al seleccionar la base de datos.");

$autor = $_POST['autor'];
$desc = $_POST['desc'];
$id_tema = $_POST['id_tema'];


$query = "INSERT INTO respuestas VALUES(null, " . $id_tema . ", '" . $autor . "', '" . $desc . "', NOW() )";


$result = mysql_query($query);

if(!$result)
{
    echo "0";
}
else
{
    $query = "SELECT * from respuestas where temaId = " . $id_tema . " order by fecha_hora desc limit 1";

    $resul = mysql_query($query);

    if($resul)
    {
        $rows = mysql_num_rows($resul);

        if($rows == 0)
        {
            echo "0";
        }
        else 
        {
            $html = '';

            while(($row = mysql_fetch_array($resul)))
            {
                $html .= "
                    <div class='answer' style='display:none;'>
                        <div class='answer-header'>
                            <img src='photo.jpg' >
                            <div class='answer-header-content'>
                                <li>" . $row['autor_respuesta'] . "</li> 
                                <li>" . $row['fecha_hora'] . "</li>                                
                            </div>  
                        </div> 
                        <div class='answer-content'>
                             " . $row['respuesta'] . " 
                        </div>
                    </div>
                    <div class='space'></div>";

            }

            echo $html;
        }
    }
}