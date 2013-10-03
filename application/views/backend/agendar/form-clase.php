<script>
    
$(document).ready(function(){    
    $("#validbox").hide();
    $("#claseInfo").hide();    
}); 

$(function(){
    $('#form-clase').submit(function(){
        //añade antes del SELECT el gif    
        $("#boton_submit").after('<img src="<?=$path ?>images/cargando_2.gif" style="float:left; margin:0px 0px 10px 5px;" id="loader" alt="" /></div>');                     
        $("#boton_submit").hide();  
        var formData = $(this).serializeArray();
        formData.push({ name: "CKdescripcion", value: CKEDITOR.instances.descripcion.getData() });            
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            //data: $(this).serialize() + '&CKdescripcion=' + CKEDITOR.instances.descripcion.getData(),
            data: formData,
            success: function(result){
                var obj_result = eval ("(" + result + ")");
                switch(obj_result.etapa)
                    {
                    case 'erroresForm':
                        $("#boton_submit").show();
                        $("#validbox").show();
                        $("#validbox").empty();
                        $("#validbox").html(obj_result.datos);
                      break;
                    case 'apiError':
                        $("#boton_submit").show();
                        $("#validbox").attr("class","alert-box error");
                        $("#validbox").show();
                        $("#validbox").empty();
                        $("#validbox").html(obj_result.datos);
                      break;                      
                    case 'apiOk':
                        $("#validbox").attr("class","alert-box success");
                        $("#validbox").show();
                        $("#validbox").empty();
                        $("#validbox").html(obj_result.datos);                                            
                        $("#form-clase").slideUp();       
                        $("#claseInfo").show();                        
                        $("#class_id").html(obj_result.class_id);                        
                        $("#infoTitulo").html(obj_result.titulo);
                        $("#infoDescripcion").html(obj_result.descripcion);                        
                        $("#infoFecha").html(obj_result.fecha);                        
                        $("#infoDuracion").html(obj_result.duracion);
                        $("#btn_ver_detalles").attr("href","<?=base_url() ?>admin/salas/view/"+ obj_result.class_id);
                        class_id = obj_result.class_id;
                      break;
                    default:
                    }
                    $('#loader').remove();        
            }                
        })
        return false;
    })
})

$(function() {
        $( "#fecha" ).datepicker(
         $.datepicker.regional[ "es" ]      
        );
        //getter //setter
        //var minDate = $( "#calendar_fecha_in" ).datepicker( "option", "minDate" );
        $( "#fecha" ).datepicker( "option", "minDate", 0);     
        $( "#fecha" ).datepicker( "option", "dateFormat", 'yy-mm-dd');
});

$(function() {
$('#horario').timepicker({
        timeOnlyTitle: 'Indique Hora de Inicio',
        timeText: 'Desde',
        stepHour: 1,
	stepMinute: 10,
        hour: 6,
	minute: 0,
	hourMin: 0,    
	minuteGrid: 10        
        });    
});

$(function() {
$('#duracion').timepicker({
        timeOnlyTitle: 'Maximo: 5 hs',
        timeText: 'Duración',
        hourMax: 5,
        minuteMax: 59,        
	stepMinute: 10,
	hour: 0,
	minuteGrid: 10        
        });    
});

</script>

<div class="row">
    <div class="twelve columns"> 
<? $form_attributes = array('class'=>'nice custom', 'id'=>'form-clase') ?>
<?=form_open('admin/crear_sala_ajax',$form_attributes) ?>

<p>Complete los campos con la informacíon de la clase</p>

<?=validation_errors() ?>

<label>Titulo de la clase</label>
    
<? $data = array('name'=>'titulo','id'=>'titulo','class'=>'large input-text','value'=>set_value('titulo')); ?>
<?= form_input($data) ?>        

<label>Descripción de la clase</label>
<? $data = array('name'=>'descripcion','class'=>'large input-text','id'=>'descripcion','placeholder'=>'Descripcion','rows'=>'10','value'=>set_value('descripcion')); ?>
<?= form_textarea($data) ?>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>         
<br>
<div class="row">
    <div class="twelve columns"> 
        <label>Zona Horaria</label>
        <select name="timezone" id="timezone">
            <?=$timezones_select ?>
        </select>
    </div>        
</div>

<div class="row">
    <div class="four columns">      
        <label>Fecha (mes/dia/año)</label> 
        <? $data = array('name'=>'fecha','id'=>'fecha','class'=>'small input-text','value'=>set_value('fecha')); ?>
        <?= form_input($data) ?>             
    </div>
    <div class="four columns">      
        <label>Horario</label>
        <? $data = array('name'=>'horario','id'=>'horario','class'=>'small input-text','value'=>set_value('horario')); ?>
        <?= form_input($data) ?>             
    </div>        
</div>

<label>Duracion</label>
<? $data = array('name'=>'duracion','id'=>'duracion','class'=>'small input-text','value'=>set_value('duracion')); ?>
<?= form_input($data) ?>       

<label>Audio / Video</label>
<label for="audiovideo">    
<? $data = array('name'=>'audiovideo','id'=>'audiovideo','value'=>'video','checked'=>TRUE); ?>
<?=form_radio($data) ?>
 Audio + Video</label>    

<label for="audiovideo">    
<? $data = array('name'=>'audiovideo','id'=>'audiovideo','value'=>'audio'); ?>
<?=form_radio($data) ?>
 Solo Audio</label>    
   
    
    <label>Idioma</label>
    <select name="idioma" id="idioma">
	<option SELECTED value="es-ES">Español</option>
	<option value="en-US">Ingles</option>
	<option value="pt-PT">Portugues</option>
    </select>
    <br><br>
    <input type="submit" id="boton_submit" class="nice small radius blue button" value="Crear Clase" >    
<? form_close() ?>
     </div>
</div>   
<div class="row">
    <div class="twelve columns"> 
        <div id="validbox" class="alert-box warning"></div>    
    </div>
</div>

<div class="row" id="claseInfo">
        <h5>Clase agendada: </h5>
        <div class="panel">
        <table>
            <thead>
                <tr>
                    <th colspan="2"><span id="infoTitulo"></span></th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">ID #</td>
                    <td><span id="class_id"></span></td>
                </tr>                  
                <tr>
                    <td width="25%">Descripcion</td>
                    <td><span id="infoDescripcion"></span></td>
                </tr>                        
                <tr>
                    <td>Fecha y horario</td>
                    <td><span id="infoFecha"></span></td>              
                </tr>                               
                <tr>
                    <td>Duracion</td>
                    <td><span id="infoDuracion"></span> minutos</td>                  
                </tr>                
            </tbody>    
        </table>
        <table>
            <thead>
                <tr>
                    <th>
                        <a class="nice small radius blue button" id="btn_ver_detalles">Ver detalles Sala</a>                                            
                    </th>
                </tr>
            </thead>
        </table>             
        </div>           
</div>

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
