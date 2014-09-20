 <?php if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
<br>
    <div class="alert-box success">
        <?php echo $_SESSION['sys_msg_ok']; 
           unset($_SESSION['sys_msg_ok']); ?>
    </div>
<?php endif ?>   
<?php if(!empty($result)): ?>
    <div class="panel">
        <p><h5>Historial de Salas agendadas</h5></p>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th width="150px">Titulo</th>
                    <th>ID#</th>   
                    <th>Fecha</th>   
                    <th>Horario</th>   
                    <th>Duración</th>
                    <th>Descripción</th>                    
                </tr>
            </thead>
            <tbody>
        <?php 
            $cont = 1;
            foreach($result as $r): 
        ?>
        <tr>
            <td><?php echo $cont; ?></td>
            <td><?php echo $r->titulo ?></td>
            <td><?php echo $r->class_id ?></td>
            <td><?php echo $r->fecha ?></td>
            <td><?php echo substr($r->horario,0,5) ?> hs</td>
            <td><?php echo $r->duracion ?> minutos</td>   
            <td><?php echo $r->descripcion ?></td>                                 
        </tr>                         
        <?php 
            $cont++;
            endforeach; 
        ?>  
        </table>             
        </div>                   
<?php else: ?>
    <div class="panel">
        <h6>La consulta no ha devuelto resultados.</h6>
    </div>
<?php endif; ?>        

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
