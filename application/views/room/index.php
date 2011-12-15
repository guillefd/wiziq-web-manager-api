<div class="container">
    <div class="row">
        <div class="twelve columns">
            <br>
        </div>        
    </div>
    <div class="row">
            <div class="eight columns centered">
                <div class="panel">
                    <h4 class="subheader">Bienvenido a la Sala Virtual</h4>
                     <table>
                                <thead>
                                    <tr>
                                        <th colspan="2"><h5><?=$infoSala->titulo ?></h5></th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="25%">ID #</td>
                                        <td><?=$infoSala->class_id ?></td>
                                    </tr>                  
                                    <tr>
                                        <td width="25%">Descripcion</td>
                                        <td><?=$infoSala->descripcion ?></td>
                                    </tr>                        
                                    <tr>
                                        <td>Fecha</td>
                                        <td><?=$infoSala->fecha ?></td>              
                                    </tr>
                                    <tr>
                                        <td>Horario</td>
                                        <td><?=substr($infoSala->horario,0,5) ?> hs</td>                  
                                    </tr>                                
                                    <tr>
                                        <td>Duracion</td>
                                        <td><?=$infoSala->duracion ?> minutos</td>                  
                                    </tr>                
                                </tbody>    
                            </table>
                    <div align="center"><a href="<?=base_url().'room/participar/'.$infoSala->class_id ?>" target="_blank" class="nice large radius blue button">Ingresar a la Sala Virtual</a></div>
                    
                </div>			
            </div>
    </div>  

</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
