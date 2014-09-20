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
                                        <th colspan="2"><h5><?php echo $infoSala->titulo ?></h5></th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td width="25%">ID #</td>
                                        <td><?php echo $infoSala->class_id ?></td>
                                    </tr>                  
                                    <tr>
                                        <td width="25%">Descripcion</td>
                                        <td><?php echo $infoSala->descripcion ?></td>
                                    </tr>                        
                                    <tr>
                                        <td>Fecha</td>
                                        <td><?php echo $infoSala->fecha ?></td>              
                                    </tr>
                                    <tr>
                                        <td>Horario</td>
                                        <td><?php echo substr($infoSala->horario,0,5) ?> hs</td>                  
                                    </tr>                                
                                    <tr>
                                        <td>Duracion</td>
                                        <td><?php echo $infoSala->duracion ?> minutos</td>                  
                                    </tr>                
                                </tbody>    
                            </table>
                            <p>
                               <strong>Requisitos para participar de la sala virtual:</strong><br>
                                       - PC / Notebook o similar con sistema operativo Windows o Mac.<br>
                                       - Conexión a internet de banda ancha.<br>
                                       - Parlantes o auriculares (recomendado).<br>
                                       - Micrófono (solo es requisito si va a hablar durante la sesión).<br>
                            </p>
                            <p>Por favor acceda al siguiente link para comprobar que su sistema cumple con todos los requisitos.<br>
                               <div align="center"><a href="http://meeting.isalas.com.ar/test/" target="_blank" class="nice small white radius button">Click aquí para comprobar su sistema</a></div>
                            </p>
                            <p>
                               <div align="center"><a href="http://meeting.isalas.com.ar/check/" target="_blank" class="nice small white radius button">Ver la Guía de Resolución de Problemas</a></div>
                            </p>                            
                    <div align="center"><a href="<?php echo base_url().'room/participar/'.$infoSala->class_id ?>" target="_blank" class="nice large radius blue button">Ingresar a la Sala Virtual</a></div>
                    &nbsp;                                        
                </div>			
            </div>
    </div>  

</div>


<?php

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
