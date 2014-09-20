<div class="row show-on-desktops">
    <div class="twelve columns">
                <div class="panel">
        <div class="row">
             <?php if(isset($_SESSION['sys_msg']) && $_SESSION['sys_msg']): ?>
        <br>
                <div class="alert-box error">
                    <?php echo $_SESSION['sys_msg']; 
                       unset($_SESSION['sys_msg']); ?>
                </div>
            <?php endif ?>       
             <?php if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
        <br>
                <div class="alert-box success">
                    <?php echo $_SESSION['sys_msg_ok']; 
                       unset($_SESSION['sys_msg_ok']); ?>
                </div>
            <?php endif ?>          
         </div>	                     
                    <h4 class="subheader">Participantes</h4>

        <table>
            <thead>
                <tr>
                    <th colspan="2"><?php echo $result->titulo ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">Descripcion</td>
                    <td><?php echo $result->descripcion ?></td>
                <tr>
                    <td>Fecha</td>
                    <td><?php echo $result->fecha ?></td>              
                </tr>
                <tr>
                    <td>Horario</td>
                    <td><?php echo substr($result->horario,0,5) ?> hs</td>                  
                </tr>                                
                <tr>
                    <td>Duracion</td>
                    <td><?php echo $result->duracion ?> minutos</td>                  
                </tr>                
            </tbody>    
        </table>                    
                    
        <?php $form_attributes = array('class'=>'nice custom', 'id'=>'form-participantes') ?>                    
        <?php echo form_open('admin/add_participantes/'.$result->class_id,$form_attributes) ?>

        <?php $data = array('name'=>'lista','id'=>'lista','class'=>'large input-text','value'=>$list_post,'placeholder'=>'email, nombre,'); ?>
        <label><strong>Lista de Participantes</strong></label>
        <p> Importante: escribir 1 participante por linea, formato: email<strong>[coma]</strong>nombre<strong>[coma]</strong><br>
            Ejemplo: <br>
            juanperez@email.com<span style="font-weight:bold;color:red;font-size:1.8em">,</span>Juan Perez<span style="font-weight:bold;color:red;font-size:1.8em">,</span><br>
            albertolopez@email.com<span style="font-weight:bold;color:red;font-size:1.8em">,</span>Alberto Lopez<span style="font-weight:bold;color:red;font-size:1.8em">,</span>
        </p>    
        <?php echo  form_textarea($data) ?> 
        <a href="<?php echo $base_url_page.'/salas/view/'.$result->class_id ?>" class="nice small radius red button">Cancelar</a> 
        <input type="submit" id="boton_submit" class="nice small radius blue button" value="<?php echo $valueSubmit ?>Participantes" >                      

        <?php form_close() ?>
                </div>              
    </div>
</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
