<script type="text/javascript">
$(document).ready(function(){    
  
});    


function ConfirmarCancelar(id)
{
    $('#cancelConfirm').reveal({
    animation: 'fadeAndPop',                   //fade, fadeAndPop, none
    animationspeed: 300,                       //how fast animtions are
    closeonbackgroundclick: true,
    dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
    });
    id_class = id;
    
}

function CancelarClase(id){
        $('#cancelConfirm').trigger('reveal:close');
        $('#cancelBox').reveal({
            animation: 'fadeAndPop',                   //fade, fadeAndPop, none
            animationspeed: 300,                       //how fast animtions are
            closeonbackgroundclick: false,
            dismissmodalclass: 'close-reveal-modal'    //the class of a button or element that will close an open modal
            });
        $("#tituloH4").html('Cancelando Sala #' + id);
        $("#loader").show();   
        $("#btn_reveal_cerrar").hide();           
        $("#btnAceptar").hide();         
        $.ajax({
            url: '<?=base_url()."admin/cancelar_sala_ajax" ?>',
            type: 'POST',
            data: 'idSala='+id,
            success: function(result){
                var obj_result = eval ("(" + result + ")");
                switch(obj_result.etapa)
                    {
                    case 'requestError':
                        $("#tituloH4").html(obj_result.datos);
                        $("#loader").hide();                           
                        $("#btn_reveal_cerrar").show();                           
                      break;
                    case 'apiError':
                        $("#tituloH4").html(obj_result.datos);
                        $("#loader").hide();                           
                        $("#btn_reveal_cerrar").show();                             
                      break;                      
                    case 'apiOk':
                        $("#tituloH4").html(obj_result.datos);
                        $("#loader").hide();                                                     
                        $("#btnAceptar").show();                          
                      break;
                    default:
                    } //end switch
                    $('#loader').remove();        
            }                
        })
        return false;
}


</script>


<div class="row">
    <div class="eight columns">
            <p><h3>Mis Clases</h3></p><br />
            <dl class="nice tabs">
                <dd><a href="<?=$base_url_page.'/salas/hoy' ?>"<? if($cat=='hoy'){ echo 'class="active"'; } ?>>Hoy</a></dd>
                <dd><a href="<?=$base_url_page.'/salas/proximos' ?>"<? if($cat=='proximos'){ echo 'class="active"'; } ?>>Próximas</a></dd>                                
                <? if($cat=='participantes'): ?>    
                <dd><a class="active">Participantes</a></dd>
                <? endif; ?>
                <? if($cat=='invitaciones'): ?>    
                <dd><a class="active">Invitaciones</a></dd>
                <? endif; ?>                
                <? if($cat=='view'): ?>    
                <dd><a class="active">Detalles Sala #<?=$class_id ?></a></dd>
                <? endif; ?>                
            </dl>
    
            <? include $cat.'.php' ?>
    </div>
</div>


<!-- REVEAL BOXES-->
<div id="cancelBox" class="reveal-modal">
     <h4 id="tituloH4"></h4>
     <p align="right"><img src="<?=$path ?>images/cargando_2.gif" id="loader" /></p>
     <a id="btn_reveal_cerrar" class="close-reveal-modal">Cerrar</a>
     <a class="nice small radius blue button" id="btnAceptar" href="<?=current_url() ?>">Aceptar</a>
</div>

<div id="cancelConfirm" class="reveal-modal">
     <h4 id="tituloH4">Esta seguro que desea cancelar esta Sala?</h4>
     <span>La clase será eliminada y esta acción no podrá deshacerse.</span>
     <a id="btn_reveal_cerrar" class="close-reveal-modal">&#215;</a>
     <p style="margin-top:10px">
        <a class="nice small radius red button" id="btnAceptar" onclick="CancelarClase(id_class)">Sí</a>
        <a class="nice small radius white button" onclick="$(this).trigger('reveal:close')">No</a>
     </p>
</div>
<!-- REVEAL BOXES-->

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
