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
                    <h4>Enviar invitaciones a Participantes</h4>
                    <p>Verifique la lista de participantes y confirme el envio presionando en "Enviar invitaciones".</p>

        <table>
            <thead>
                <tr>
                    <th colspan="2"><?=$result->titulo ?></th>
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
                <tr>
                    <td colspan="2">
                        <div align="center">
                        <? if(!empty($list_post)):?>
                            <a href="<?=base_url().'admin/send_invitaciones/'.$result->class_id ?>" class="nice radius blue button">Enviar todas las invitaciones</a>
                        <? else: ?>
                            <a href="<?=base_url().'admin/salas/participantes/'.$result->class_id ?>" class="nice radius white button">Agregar Participantes</a>        
                        <? endif ?>                         
                        </div>
                    </td>
                </tr>                  
                <tr>
                	<td><strong>Lista Participantes</strong></td><td></td>
                    <!--<td><textarea cols="50" rows="5" disabled="disabled"><?=$list_post ?></textarea></td>-->
                </tr>
                <tr>    
                    <td colspan="2">
                        <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Clave</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                             <? foreach($participantes as $r): ?>
                             <tr>
                                <td><?=$r->nombre ?></td>   
                                <td><?=$r->email ?></td>
                                <td><?=$r->loginpw ?></td>
                                <td><a href="<?=base_url().'admin/send_invitacion_id/'.$result->class_id.'/'.$r->id_attendee ?>" class="nice small radius green button">Enviar</a></td>
                             <? endforeach ?>
                        </tbody>     
                        </table>        
                    </td>
                </tr>              
            </tbody>    
        </table>                         
        <? //=form_open() ?>

<!--        <? //$data = array('name'=>'lista','id'=>'lista','class'=>'large input-text','value'=>$list_post, 'disabled'=>'disabled','placeholder'=>'email, nombre,'); ?>
        <label>Lista de Participantes</label>
        <? //= form_textarea($data) ?> 
-->          
        <a href="<?=$base_url_page.'/salas/view/'.$result->class_id ?>" class="nice small radius red button">Volver</a> 
        <? form_close() ?>
                </div>              
    </div>
</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
