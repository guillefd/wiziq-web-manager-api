 <? if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
<br>
    <div class="alert-box success">
        <?=$_SESSION['sys_msg_ok']; 
           unset($_SESSION['sys_msg_ok']); ?>
    </div>
<? endif ?>   
<? if(!empty($result)): ?>
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
        <? 
            $cont = 1;
            foreach($result as $r): 
        ?>
        <tr>
            <td><?=$cont; ?></td>
            <td><?=$r->titulo ?></td>
            <td><?=$r->class_id ?></td>
            <td><?=$r->fecha ?></td>
            <td><?=substr($r->horario,0,5) ?> hs</td>
            <td><?=$r->duracion ?> minutos</td>   
            <td><?=$r->descripcion ?></td>                                 
        </tr>                         
        <? 
            $cont++;
            endforeach; 
        ?>  
        </table>             
        </div>                   
<? else: ?>
    <div class="panel">
        <h6>La consulta no ha devuelto resultados.</h6>
    </div>
<? endif; ?>        

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
