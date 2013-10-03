<?php

function email_template($tpl,$nombre,$titulo,$descripcion,$fecha,$horario,$url,$clave,$timezone)
{
    $CI =& get_instance();  
    switch($tpl)
    {
        case 'invitacion':
                            $template = '<html><head>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                                        <title>Invitación a Sala Virtual</title>                                                                         
                                        </head>
                                        <body>
                                        <table width="80%" border="0" cellspacing="5" cellpadding="15" style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">
                                          <tr style="background-color:#ededed;color:#069">
                                            <td><h3>Hola '.$nombre.'</h3></td>
                                          </tr>
                                          <tr style="background-color:#ccc;color:#333;">
                                            <td><p><h3>Has sido invitado a participar de una Sala Virtual.</h3></p>
                                          </td>
                                          </tr>
                                          <tr style="background-color:#ccc;color:#333;">
                                            <td><p><strong>Detalles de la Sala Virtual:</strong></p>
                                                <p>
                                                	Titulo: '.$titulo.'<br>
                                                    Fecha: '.$fecha.'<br>
                                                    Horario: '.$horario.' (Zona horaria: '.$timezone.' )<br>
                                                    <p>
													'.$descripcion.'                                                     
                                                    </p>
                                                </p>
                                                <hr>
                                                <p><strong>Importante:</strong>
                                                <br />Record&aacute;&nbsp;utilizar los datos de acceso que correspondan al horario de participaci&oacute;n.</p><p><strong>Recomendaciones t&eacute;cnicas:</strong><br />Por favor lee detenidamente&nbsp;las&nbsp;recomendaciones y requisitos t&eacute;cnicos previo al ingreso a la sala, para que evites cualquier inconveniente durante la sesi&oacute;n.</p>                                            
                                                <p>
                                                <strong>Requisitos para participar de la sala virtual:</strong><br>
                                                - Navegador de Internet (Browser): Firefox actualizado ó Internet Explorer 8+<br>
                                                - PC / Notebook o similar con sistema operativo Windows o Mac.<br>
                                                - Conexión a internet de banda ancha.<br>
                                                - Auriculares o headset para escuchar el audio.<br>
                                                - Micrófono (solo es requisito si va a hablar durante la sesión).<br>
                                                </p>
                                                <p>
                                                <strong>Comprueba tu Sistema</strong><br>                                                
                                                Por favor accedé al siguiente link para comprobar que su sistema cumple con todos los requisitos.<br>
                                                <p align="center"> <a href="http://meeting.isalas.com.ar/test/" style="background: #62656e; color: white; display: inline-block; width: auto; text-align: center;text-decoration:none;border:10px solid #62656e;">Click aquí para comprobar su sistema</a></p> 
                                                ( o copiá y pegá el siguiente link en tu navegador: http://meeting.isalas.com.ar/test )
                                                </p>
                                                <p>
                                                    <strong>Guía de Resolución de Problemas</strong><br>
                                                    Si experimentas problemas durante la sesión, visita la<br>
                                                    <p align="center"> <a href="http://meeting.isalas.com.ar/check/" style="background: #62656e; color: white; display: inline-block; width: auto; text-align: center;text-decoration:none;border:5px solid #62656e;">Guia de Resolucíón de Problemas</a></p> 
                                                    <a href="http://meeting.isalas.com.ar/check/" target="_blank">Guia de Resolucíón de Problemas</a>.
                                                </p>
                                                <p>
                                                <hr>
                                                </p>
                                                <p>
                                                    <strong>ACCEDER A LA SALA VIRTUAL | Tus datos de acceso</strong>
                                                </p>
												<p>
													Tu clave de acceso: <strong>'.$clave.'</strong>
												</p>                         
                                                <p align="center"> <a href="'.$url.'" style="background: #154cda; color: white; display: inline-block; width: auto; text-align: center;text-decoration:none;border:10px solid #154cda;">Ingresar a la Sala Virtual</a></p>            
                                                Si el link no funciona, por favor copiá y pegá la siguiente dirección en tu navegador:<br>
                                                '.$url.'  
                                                <p>
                                                <hr>
                                                </p>
                                                <p>
                                                El equipo de iSalas.
                                                </p>                      
                                          </td>
                                          </tr>                                          
                                          <tr style="background-color:#ededed; font-size:0.8em; text-align:center;color:#069">
                                            <td>'.date('Y').' :: '.$CI->config->item('isalas_publisher_name').'
                                            <p><span>Has recibido este correo porque has sido invitado a participar de una Sala Virtual, por favor no responda el presente correo.</span></p>
                                            </td>
                                          </tr>
                                        </table>
                                        </body>
                                        </html>';
                             break;  
    }
    return $template;
}

function gen_email_params($motivo,$reg)
{
    $CI =& get_instance();
    switch($motivo)
    {
        case 'invitacion': 
                                $r['destinatario'] = $reg['email']; 
                                $r['asunto'] = 'Invitación para participar de una Sala Virtual - '.$reg['titulo'];
                                $r['mensaje'] = email_template($motivo,$reg['nombre'],$reg['titulo'],$reg['descripcion'],$reg['fecha'],$reg['horario'],$reg['url'],$reg['clave'],$reg['timezone']);
                                $r['from'] = $CI->config->item('isalas_system_email');
                                $r['from_name'] = $_SESSION['isalas_name']; //$CI->config->item('isalas_publisher_name'); 
                                break;                                                        
    }
    
    return $r;   
}

function enviar_email($r)
{
    $CI =& get_instance();
    $CI->load->library('email');    
    $CI->email->from($r['from'],$r['from_name']);
    $CI->email->to($r['destinatario']); 
    $CI->email->subject($r['asunto']);
    $CI->email->message($r['mensaje']);	
    return $CI->email->send();
}


/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
