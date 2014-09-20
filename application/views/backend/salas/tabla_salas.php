 <?php if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
<br>
    <div class="alert-box success">
        <?php echo $_SESSION['sys_msg_ok']; 
           unset($_SESSION['sys_msg_ok']); ?>
    </div>
<?php endif ?>   
<?php if(!empty($result)): ?>
        <?php foreach($result as $r): ?>
        <div class="panel">
        <table>
            <thead>
                <tr>
                    <th colspan="2"><h5><a href="<?php echo base_url().'admin/salas/view/'.$r->class_id ?>"><?php echo $r->titulo ?></a></h5></th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="25%">ID #</td>
                    <td><?php echo $r->class_id ?></td>
                </tr>                  
                <tr>
                    <td width="25%">Descripcion</td>
                    <td><?php echo $r->descripcion ?></td>
                </tr>                        
                <tr>
                    <td>Fecha</td>
                    <td><?php echo $r->fecha ?></td>              
                </tr>
                <tr>
                    <td>Horario</td>
                    <td><?php echo substr($r->horario,0,5) ?> hs</td>                  
                </tr>                                
                <tr>
                    <td>Duracion</td>
                    <td><?php echo $r->duracion ?> minutos</td>                  
                </tr>                
            </tbody>    
        </table>
        <table>
            <thead>
                <tr>
                    <th>
                        <a class="nice small radius red button" onclick="ConfirmarCancelar(<?php echo $r->class_id ?>)">Cancelar Sala</a>                        
                        <!--<a class="nice small radius white button" id="editClass">Modificar Sala</a> -->                                  
                        <a href="<?php echo base_url().'admin/salas/participantes/'.$r->class_id ?>" class="nice small radius white button">Participantes</a>                           
                        <a href="<?php echo base_url().'admin/salas/invitaciones/'.$r->class_id ?>" class="nice small radius white button">Invitaciones</a>                         
                        <a href="<?php echo base_url().'room/presenter/'.$r->id_sala ?>" class="nice small radius blue button" target="_blank">Ingresar a la Sala</a>                      
                    </th>
                </tr>
            </thead>
        </table>             
        </div>             
        <?php endforeach; ?>          
<?php else: ?>
    <div class="panel">
        <h6>La consulta no ha devuelto resultados.</h6>
    </div>
<?php endif; ?>        

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
