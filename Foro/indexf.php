<?php 

$link = mysql_connect('localhost','root','') or die ("Error al conectar al servidor");
$db = mysql_select_db("foro", $link) or die ("Error al seleccionar la base de datos.");


$query = "SELECT * FROM temas";
$resul = mysql_query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foro</title>

    <link rel="stylesheet" href="style.css">

    <script src="jquery.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <?php if(isset($_GET['new_theme_success']) && $_GET['new_theme_success'] == 1): ?>
        <div class="success"><div class="close">X</div>Se ha guardado el nuevo tema...</div>
    <?php endif;?>

    <h2>Foro - Temas <a href="nuevo_tema.html">Agregar nuevo tema.</a></h2>


    <div class="container">
        <div class="sidebarleft-themes">

            <?php if(!$resul):?>
                <div class="empty">No hay temas para mostrar.</div>                            
            <?php else:?>                
                <?php while(($row = mysql_fetch_array($resul))):?>

                    <div class="theme">
                        <div class="theme-header">
                            <img src="photo.jpg" >
                            <div class="theme-header-content">
                                <li>Foro: <?=$row['nombre_tema']?></li>
                                <li><?=$row['fecha_hora']?></li>                                
                            </div>                            
                        </div>
                        <div class="theme-content">
                            <li>Autor: <?=$row['autor_tema']?></li>
                            <li><?=substr($row['descripcion'],0,150)?><?=(strlen($row['descripcion']) >= 150) ? '...' : ''?> </li>
                            <br>                            
                            <button id="<?=$row['id']?>" name-theme="<?=$row['nombre_tema']?>" class="theme-button">Participar</button>
                        </div>
                    </div>
                    <div class="space"></div>

                <?php endwhile;?> 
            <?php endif;?>

        </div>

        <div class="sidebarright-content">
            <div class="empty">Seleccione un tema...</div> 
            <h2 class="theme-title"></h2>           

            <div class="theme-details-answer" style="display:none;">
                <form action="#" method="#">
                    <ul>
                        <div class="errorMessage"></div>
                        <input type="hidden" id="id_tema">
                        <li>
                            <label class="required">Autor:</label>
                            <input type="text" name="answer-autor" id="answer-autor">
                        </li>            
                        <li>
                            <label class="required">Descripción:</label>
                            <textarea name="answer-descripcion" id="answer-descripcion"></textarea>
                        </li>
                        <li><button class="save-answer">Enviar</button></li>
                    </ul>
                </form>
            </div>

            <div class="theme-details-content" style="display:none;"></div>

        </div>

    </div>

</body>
</html>