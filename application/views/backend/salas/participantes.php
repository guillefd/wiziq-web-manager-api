<div class="row show-on-desktops">
    <div class="twelve columns">
                <div class="panel">
        <div class="row">
             <? if(isset($_SESSION['sys_msg']) && $_SESSION['sys_msg']): ?>
        <br>
                <div class="alert-box error">
                    <?=$_SESSION['sys_msg']; 
                       unset($_SESSION['sys_msg']); ?>
                </div>
            <? endif ?>       
             <? if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
        <br>
                <div class="alert-box success">
                    <?=$_SESSION['sys_msg_ok']; 
                       unset($_SESSION['sys_msg_ok']); ?>
                </div>
            <? endif ?>          
         </div>	                     
                    <h4 class="subheader">Participantes</h4>

        <table>
            <thead>
                <tr>
                    <th><?=$result->titulo ?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">Descripcion</td>
                    <td><?=$result->descripcion ?></td>
                <tr>
                    <td>Fecha</td>
                    <td><?=$result->fecha ?></td>              
                </tr>
                <tr>
                    <td>Horario</td>
                    <td><?=substr($result->horario,0,5) ?> hs</td>                  
                </tr>                                
                <tr>
                    <td>Duracion</td>
                    <td><?=$result->duracion ?> minutos</td>                  
                </tr>                
            </tbody>    
        </table>                    
                    
        <? $form_attributes = array('class'=>'nice custom', 'id'=>'form-participantes') ?>                    
        <?=form_open('admin/add_participantes/'.$result->class_id,$form_attributes) ?>

        <? $data = array('name'=>'lista','id'=>'lista','class'=>'large input-text','value'=>$list_post,'placeholder'=>'email, nombre,'); ?>
        <label>Lista de Participantes</label>
        <?= form_textarea($data) ?> 
        <a href="<?=$base_url_page.'/salas/view/'.$result->class_id ?>" class="nice small radius red button">Cancelar</a> 
        <input type="submit" id="boton_submit" class="nice small radius blue button" value="<?=$valueSubmit ?>Participantes" >                      

        <? form_close() ?>
                </div>              
    </div>
</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
