 <? if(isset($_SESSION['sys_msg_ok']) && $_SESSION['sys_msg_ok']): ?>
<br>
    <div class="alert-box success">
        <?=$_SESSION['sys_msg_ok']; 
           unset($_SESSION['sys_msg_ok']); ?>
    </div>
<? endif ?> 
<br>
<div class="row">
    <div class="six columns"> 
        <h2>Mi cuenta</h2>
        <div class="panel">
            <table>
                <tbody>
                    <tr>
                        <td><strong><strong>Usuario</strong></td>                        
                        <td><?=$account->nombreusuario ?></td>
                        <td><strong>Nombre</strong></td>                        
                        <td><?=$account->nombre.' '.$account->apellido ?></td>                                           
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><?=$account->email ?></td>
                        <td><strong>Ubicación</strong></td>                        
                        <td><?=$account->ciudad.', '.$account->pais; ?></td>                                                
                    </tr>                                       
                    <tr>
                        <td><strong>Fecha alta</strong></strong></td>
                        <td><?=$account->fecha_alta ?></td>
                        <td><strong>Fecha validez</strong></td>
                        <td><?=$account->fecha_validez; ?></td>                                                
                    </tr>                  
                </tbody>
            </table>  
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Créditos | <a href="<?=$base_url_page.'/salas/historial' ?>">Ver historial</a></th>
                    </tr>                
                </thead>                
                <tbody>
                    <tr>
                        <td>Totales</td>
                        <td><?=$account->creditos ?></td>
                    </tr>                         
                    <tr>
                        <td>Utilizados</td>
                        <td><?= count($account->salas_agendadas); ?></td>    
                    </tr> 
                    <tr>
                        <td>Disponibles</td>
                        <td><?=($account->creditos) - (count($account->salas_agendadas)); ?></td>                                                                    
                    </tr>                  
                </tbody>
            </table>                       
        </div>
    </div>        
</div>  

        

<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */