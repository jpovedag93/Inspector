<?php

require_once "../conexiondb.php";

$id_foro = $_POST['id_foro'];


$query = "SELECT * from respuestas where temaId = " . $id_foro . " order by fecha_hora desc";

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
                <div class='answer'>
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