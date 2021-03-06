$(document).ready(function(){

    $(".newTheme").click(function(){
        event.preventDefault();

        $(".modalmask").fadeIn(350);
    });

    $(".closemodal").click(function(){
        $(".modalmask").fadeOut(350);
    });

    $("#form-nuevo").submit(function(){

        event.preventDefault();
        
        $(".errorMessage").html("");

        if($("#tema").val() == "" || $.trim($("#tema").val()) == "")
        {
            $("#tema").focus();
            $(".errorMessage").html("El tema es obligatorio.");
            
        }
        else if($("#autor").val() == "" || $.trim($("#autor").val()) == "")
        {
            $("#autor").focus();
            $(".errorMessage").html("El autor es obligatorio.");
            
        }
        else if($("#descripcion").val() == "" || $.trim($("#descripcion").val()) == "")
        {
            $("#descripcion").focus();
            $(".errorMessage").html("La descripcion es obligatoria.");
            
        }
        else
        {
            var datos = "tema="+$("#tema").val()+"&autor="+$("#autor").val()+"&descripcion="+$("#descripcion").val() ;
            $(".errorMessage").html("<img src='load.gif'>");


            $.post("create_theme.php",datos, function(data){
                console.log(data);
                if(data == 0)
                {
                    $(".errorMessage").html("Error al ingresar el tema.");
                }
                else
                {
                    $(".errorMessage").html("");
                    $(".sidebarleft-themes .empty").hide(0);
                    $(".sidebarleft-themes").prepend(data);
                    $(".modalmask").fadeOut(350);
                    $(".errorMessage").html("");
                    $("#tema").val("");
                    $("#autor").val("");
                    $("#descripcion").val("");
                }
            });
        }

    });

    $(".close").click(function(){

        $(this).parent().fadeOut(250);

        var url = window.location.href;
        var path = url.split('?');
        
        window.history.replaceState(null, null, path[0]);
    });

    $(".theme-button").live('click',function(){
        var id = $(this).attr('id');
        var title_theme = $(this).attr("name-theme");

        $("#id_tema").val(id);
        $(".errorMessage").html("");


        $(".theme-title").html("");
        $(".sidebarright-content .empty").hide(0);
        $(".theme-details-content").fadeIn(350);
        $(".theme-details-content").html("<img src='load.gif'>");
        $(".theme-details-answer").hide(0);
        $("#answer-autor").val("");
        $("#answer-descripcion").val("");

        setTimeout(function(){
             $(".theme-title").html(title_theme);
             $.post('cargar_foro_content_ajax.php', 'id_foro=' + id , function(data){

                $(".theme-details-answer").fadeIn(360);

                if(data == 0)
                {
                    $(".theme-details-content").html("<div class='empty'>No hay partificaciones...</div>");
                }
                else
                {
                    $(".theme-details-content").html(data);
                }
            });
        },450);

    });

    $(".save-answer").click(function(){
        event.preventDefault();
        $(".sidebarright-content .empty").hide(0);

        $(".errorMessage").html("");

        if($("#answer-autor").val() == "" || $.trim($("#answer-autor").val()) == "")
        {
            $("#answer-autor").focus();
            $(".errorMessage").html("El autor es obligatorio.");
        }
        else if($("#answer-descripcion").val() == "" || $.trim($("#answer-descripcion").val()) == "")
        {
            $("#answer-descripcion").focus();
            $(".errorMessage").html("La descripción es obligatoria.");
        }
        else
        {
            $(".save-answer").attr('disabled',true);
            var data = "autor=" + $("#answer-autor").val() + "&id_tema=" + $("#id_tema").val() + "&desc=" + $("#answer-descripcion").val();

            $(".theme-details-answer").append("<img src='load.gif'>");

            setTimeout(function(){
                $.post('save_answer.php', data, function(response){

                    $(".theme-details-answer img").remove();
                    if(response != '0')
                    {   

                        $(".save-answer").removeAttr('disabled');

                        $("#answer-descripcion").val("");
                        $("#answer-autor").val("");

                        $(".theme-details-content").prepend(response);
                        $(".theme-details-content div:first").fadeIn(350);


                    }
                    else
                    {
                        $(".errorMessage").html("Error al guardar tu respuesta...");
                    }
                });
            },480);
            
            
        }
    });

});