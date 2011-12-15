<?php

function email_template($tpl,$nombre,$titulo,$fecha,$horario,$url,$clave)
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
                                                    Horario: '.$horario.'                                                    
                                                </p>
												<p>
													Tu clave de acceso: <strong>'.$clave.'</strong>
												</p>                         
                                                <p><a href="'.$url.'" >Click aquí para ingresar a la Sala Virtual</a></p>                       
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
                                $r['asunto'] = 'Invitación para participar de una Sala Virtual';
                                $r['mensaje'] = email_template($motivo,$reg['nombre'],$reg['titulo'],$reg['fecha'],$reg['horario'],$reg['url'],$reg['clave']);
                                $r['from'] = $CI->config->item('isalas_system_email');
                                $r['from_name'] = $CI->config->item('isalas_publisher_name'); 
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

function init_email()
{
    $CI =& get_instance();
    $CI->load->library('email'); 
    $config['smtp_host'] = $CI->config->item('lp_smtp_host');
    $config['smtp_user'] = $CI->config->item('lp_smtp_user');
    $config['smtp_pass'] = $CI->config->item('lp_smtp_pass');
    $config['smtp_port'] = $CI->config->item('lp_smtp_port');  
    $CI->email->initialize($config);
    
}

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
