<?php 

    require_once "../conexiondb.php";

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
    {
        $query = "SELECT * FROM temas order by fecha_hora desc limit 1";
        $resul = mysql_query($query);
        $cant = mysql_num_rows($resul);

        if($cant != 0)
        {                              
            while(($row = mysql_fetch_array($resul)))
            {
                echo '
                    <div class="theme">
                        <div class="theme-header">
                            <img src="photo.jpg" >
                            <div class="theme-header-content">
                                <li>Foro:'.$row['nombre_tema'].'</li>
                                <li>'.$row['fecha_hora'].'</li>                                
                            </div>                            
                        </div>
                        <div class="theme-content">
                            <li>Autor:'.$row['usuario'].'</li>
                            <li>'.substr($row['descripcion'],0,150).' ' .((strlen($row['descripcion']) >= 150) ? '...' : '').'</li>
                            <br>                            
                            <button id="'.$row['id'].'" name-theme="'.$row['nombre_tema'].'" class="theme-button btn-success">Participar</button>
                        </div>
                    </div>
                    <div class="spaceDIV"></div>
                    ';
             }

            }


    }       
    else
        echo "0";

    
    