<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
   public function __construct()
   {
        parent::__construct();        
        session_start();
        if(isset($_SESSION['isalas_rol']) && $_SESSION['isalas_rol']<=1)
        {
            $_SESSION['login_msg']='Acceso no autorizado';
            redirect('login');
        } 
        if($_SESSION['url_anterior'] != current_url()){ $_SESSION['url_anterior']=  current_url(); };
        $this->page_name = 'admin';        
        $this->load->helper('form','xml');        
        $this->load->library('isalas');
        $this->load->model('isalas_model');
        $this->session_max_valid = $this->config->item('isalas_session_max_limit_valida');
        date_default_timezone_set($this->config->item('isalas_timezone'));
        //debugger
        //$this->output->enable_profiler(TRUE);

   }

       // REMAPEO DE URLS
    public function _remap($method,$params = array())
    {
        switch ($method)
        {                 
            case 'index': call_user_func_array(array($this, $method), $params);
                         break;                                
                           
            case 'agendar': return call_user_func_array(array($this, $method), $params);                
                                  break;                           

            case 'salas': return call_user_func_array(array($this, $method), $params);                
                                  break;    
                              
            case 'cuenta': return call_user_func_array(array($this, $method), $params);                
                                  break;                                  

            // case 'crear_sala': return call_user_func_array(array($this, $method), $params);                
            //                       break;     

            case 'add_participantes': return call_user_func_array(array($this, $method), $params);                
                                  break;                               
                              
            case 'crear_sala_ajax': return call_user_func_array(array($this, $method), $params);                
                                  break;  
                              
            case 'cancelar_sala_ajax': return call_user_func_array(array($this, $method), $params);                
                                  break;  
                              
            case 'send_invitaciones': return call_user_func_array(array($this, $method), $params);                
                                  break;                                
                              
            case 'send_invitacion_id': return call_user_func_array(array($this, $method), $params);                
                                  break; 

            default: redirect($this->page_name.'/index'); 
        }     
    }   

    // INICIALIZA PARAMETROS META TEMPLATE
    public function _init_meta()
    {
        //genera variables META para pagina actual
        $val['descripcion'] = "iSalas";
        $val['keywords'] = "Sala Virtual";
        $meta = init_meta($val);
        return $meta;        
    }    

    // REGLAS VALIDACION DE LOS FORM ITEMS CONSULTA
    public function _init_form_agendar_validation()
    {
        $this->form_validation->set_rules('titulo','Titulo','trim|required');
        $this->form_validation->set_rules('descripcion','Descripcion','trim');  
        $this->form_validation->set_rules('CKdescripcion','Descripcion','trim');                
        $this->form_validation->set_rules('fecha','Fecha','trim|required');
        $this->form_validation->set_rules('horario','Horario','trim|required');        
        $this->form_validation->set_rules('duracion','Duracion','trim|required');                   
    }     
    
    // REGLAS VALIDACION FORM AGENDAR - EDITANDO
    public function _init_form_agendaredit_validation()
    {
        $this->form_validation->set_rules('titulo','Titulo','trim|required');
        $this->form_validation->set_rules('descripcion','Descripcion','trim');                          
        $this->form_validation->set_rules('CKdescripcion','Descripcion','trim');   
    }  

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $data[]='';
        //inicia template
        $tpl = init_tmpl('admin');
        $meta = $this->_init_meta();  
        $tpl = array_merge($tpl,$meta);
        $view = 'backend/main';
        load_view($tpl, $data, $view);   
    }
    
    /**
     * Index Page for this controller.
     */
    public function agendar()
    {
        $this->load->model('login_model');
        $creditos = $this->login_model->consulta_creditos($_SESSION['isalas_user_id']);
        if($creditos>=1)
        {
            $this->load->helper('formoptions');
            $data['timezones_select']= options_list('timezones');
            //inicia template
            $tpl = init_tmpl('admin');
            $meta = $this->_init_meta();  
            $tpl = array_merge($tpl,$meta);
            $view = 'backend/agendar/agendar';
            load_view($tpl, $data, $view);   
        }
        else
        {
            $_SESSION['sys_msg'] = 'No dispone de créditos para agregar una reserva.';
            redirect('admin');             
        }            
    }    

    /**
     * Index Page for this controller.
     */
    public function salas($cat=NULL,$id=NULL)
    {
        $data['cat'] = $cat;
        switch($cat)
        {
            case 'hoy': $data['result'] = $this->isalas_model->salas_hoy();
                           break;                       
            case 'proximos': $data['result'] = $this->isalas_model->salas_proximas();
                            break;  
            case 'historial': $data['result'] = $this->isalas_model->salas_historial();
                            break;                              
            case 'participantes': if(!empty($id))
                                  {  
                                    $data['result']=$this->isalas_model->getSalaClassId($id);
                                    $data['result'] = $data['result'][0];
                                    if(!empty($data['result']))
                                    {
                                        $result_participantes = $this->isalas_model->consulta_participantes($id);
                                        $participantes_text = $this->_genera_lista_participantes_db($result_participantes);
                                        $data['valueSubmit'] = empty($result_participantes) ? 'Agregar' : 'Actualizar';
                                        $data['list_post'] = $this->input->post('lista') ? $this->input->post('lista') : $participantes_text;
                                    }else
                                        {                                    
                                            redirect('admin/salas');
                                        }
                                  }else 
                                      {
                                        redirect('admin/salas'); 
                                      }
                                  break; 
            case 'invitaciones': if(!empty($id))
                                  {  
                                    $data['result']=$this->isalas_model->getSalaClassId($id);
                                    $data['result'] = $data['result'][0];
                                    if(!empty($data['result']))
                                    {
                                        $result_participantes = $this->isalas_model->consulta_participantes($id);
                                        $participantes_text = $this->_genera_lista_participantes_db($result_participantes);
                                        if(empty($participantes_text)){ $_SESSION['sys_msg']="La lista de participantes esta vacia."; }
                                        $data['list_post'] = $this->input->post('lista') ? $this->input->post('lista') : $participantes_text;
                                        $data['participantes'] = $result_participantes;                                         
                                    }else
                                        {                                    
                                            redirect('admin/salas');
                                        }
                                  }else 
                                      {
                                        redirect('admin/salas'); 
                                      }
                                  break;                                   
            case 'view':   if(!empty($id))
                                  {  
                                    $data['result']=$this->isalas_model->getSalaClassId($id);
                                    $data['class_id'] = $id;
                                  }else
                                      {
                                        redirect('admin/salas');        
                                      }
                                  break;                                
                       
            default:      $data['result'] = $this->isalas_model->salas_hoy();
                          $data['cat'] = 'hoy';   
                          break;         
        }
        //inicia template
        $tpl = init_tmpl('admin');
        $meta = $this->_init_meta();  
        $tpl = array_merge($tpl,$meta);
        $view = 'backend/salas/salas';
        load_view($tpl, $data, $view);   
    }     


    public function editar_sala_ajax()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert-box warning">', '</div>');        
        $this->_init_form_agendaredit_validation();
        if ($this->form_validation->run() == FALSE)
        {
            $errors = validation_errors();
            // codificacion a UTF-8
            $errors = strip_tags($errors);
            $errors = htmlentities($errors,ENT_QUOTES | 'ENT_IGNORE','UTF-8');
            $result->etapa = 'erroresForm';
            $result->datos = $errors;
            echo(json_encode($result));
        }
        else
            {
                if( $this->isalas_model->updateSala( $this->input->post('class_id'), $this->input->post('titulo'), $this->input->post('descripcion') ) )
                {
                    $result->etapa = 'updateOK';
                    echo(json_encode($result));
                }    
            }
    }


    public function crear_sala_ajax()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert-box warning">', '</div>');        
        $this->_init_form_agendar_validation();
        if ($this->form_validation->run() == FALSE)
        {
            $errors = validation_errors();
            // codificacion a UTF-8
            $errors = strip_tags($errors);
            $errors = htmlentities($errors,ENT_QUOTES | 'ENT_IGNORE','UTF-8');
            $result->etapa = 'erroresForm';
            $result->datos = $errors;
            echo(json_encode($result));
        }
        else
            {
                $success = false;
                $presenters = $this->config->item('isalas_wiziq_presenter_email');
                $i = -1;
                while($i<count($presenters) && !$success)
                {
                    $i++;
                    $infoApi = $this->isalas->ScheduleClass($presenters[$i]);        
                    $apiResponse = $infoApi['responseItem'];  
                    $apiRequest = $infoApi['requestParameters'];
                    $idRequest = $this->isalas_model->insert_apiRequest($apiRequest);                    
                    $idResponse = $this->isalas_model->insert_apiResponse($apiResponse,$idRequest);                       
                    if($apiResponse['status'] == "ok")
                    {                    
                        $success = true;
                        $idSala = $this->isalas_model->insertSala($apiRequest,$apiResponse,$idResponse);                    
                        $result->etapa = 'apiOk';
                        $result->datos = 'La Clase ha sido creada con exito!';
                        $result->id = $idSala;
                        $result->class_id = $apiResponse['class_id'];
                        $result->titulo = $apiRequest['title'];
                        $result->descripcion = $apiRequest['CKdescripcion'];
                        $result->fecha = $apiRequest['start_time'];
                        $result->duracion = $apiRequest['duration'];                    
                        echo(json_encode($result));
                    }                  
                }
                if(!$success)
                {
                    $result->etapa = 'apiError';
                    $result->datos = $apiResponse['errormsg'];
                    echo(json_encode($result));                    
                } 
            }  
    }
    
  public function cancelar_sala_ajax()
    {
        
        if (!isset($_REQUEST['idSala']))
        {
            $errors = 'Identificador de sala inválido, vuelva a intentarlo por favor.';
            // codificacion a UTF-8
            $errors = strip_tags($errors);
            $errors = htmlentities($errors,ENT_QUOTES | 'ENT_IGNORE','UTF-8');
            $result->etapa = 'requestError';
            $result->datos = $errors;
            echo(json_encode($result));
        }
        else
            {
                $id_sala = $_REQUEST['idSala']; 
                $infoApi = $this->isalas->CancelarClass($id_sala);
                $apiRequest = $infoApi['requestParameters'];
                $apiResponse = $infoApi['responseItem'];
                $idRequest = $this->isalas_model->insert_apiRequest($apiRequest);                    
                $idResponse = $this->isalas_model->insert_apiResponse($apiResponse,$idRequest);                           
                if($apiResponse['status'] == "ok" || $apiResponse['errorcode']=='1033')
                {
                    $this->isalas_model->cancelSala($id_sala,$idResponse);                           
                    $result->etapa = 'apiOk';
                    $result->datos = 'La clase ha sido cancelada.'; 
                    $this->load->model('login_model');
                    //$this->login_model->sumarUnCredito($_SESSION['isalas_user_id']);                                     
                    echo(json_encode($result));
                }else
                    {
                        $result->etapa = 'apiError';
                        $result->datos = $apiResponse['errormsg'];
                        echo(json_encode($result));                    
                    }
            }
            
        //print_r($infoApi);
    }    
    
    public function add_participantes($class_id)
    {
        $lista=$this->_genera_lista_participantes_post();
        if ($lista== FALSE)
        {
            $_SESSION['sys_msg'] = 'El listado es invalido';
            $this->salas('participantes',$class_id);
        }
        else
            { 
                $salaInfo = $this->isalas_model->getSalaClassId($class_id);
                $result_participantes = $this->isalas_model->consulta_participantes($class_id);                
                $lista = $this->_extraeParticipantesExistentes($lista,$result_participantes);
                $_SESSION['sys_msg_ok'] = 'Los participantes se han ';                
                if(!empty($lista['agregar']))
                {
                    $salaInfo = $salaInfo[0];                
                    $this->_insert_attendees_db($lista['agregar'],$salaInfo); 
                    $_SESSION['sys_msg_ok'].= 'agregado ';                    
                }
                if(!empty($lista['borrar']))
                {             
                    $this->_delete_attendees_db($lista['borrar'], $class_id);
                    if(!empty($lista['agregar'])){ $_SESSION['sys_msg_ok'].= 'y ';  }                    
                    $_SESSION['sys_msg_ok'].= 'eliminado ';                    
                }                
                if(empty($lista['agregar']) && empty($lista['borrar'])){
                    $_SESSION['sys_msg_ok'] = 'La lista de participantes no se ha modificado.'; 
                }else{
                        $_SESSION['sys_msg_ok'].= 'correctamente.';                 
                        $xml = $this->_genera_attendee_XML($this->isalas_model->consulta_participantes($class_id));                        
                        $infoApi = $this->isalas->AddAttendeeClass($xml,$class_id); 
                        $apiRequest = $infoApi['requestParameters'];
                        $apiResponse = $infoApi['responseItem'];
                        $idRequest = $this->isalas_model->insert_apiRequest($apiRequest);                    
                        $idResponse = $this->isalas_model->insert_apiResponse($apiResponse,$idRequest); 
                        if($apiResponse['status'] == "ok")
                        {
                            $this->_guardaDatosAccesoAttendee($infoApi,$idResponse);
                        }                        
                     }                     
                     
                redirect('admin/salas/view/'.$class_id);                                 
            }
            
        //print_r($infoApi);
    }
    
  public function send_invitaciones($class_id)
    {
        $result=$this->isalas_model->consulta_participantes($class_id);
        if (empty($result))
        {
            $_SESSION['sys_msg'] = 'El listado es invalido';
            $this->salas('participantes',$class_id);
        }
        else
            { 
                $this->load->helper('emailer');
                $infoSala = $this->isalas_model->getSalaClassId($class_id);
                $infoSala = $infoSala[0];
                foreach($result as $r)
                {    
                    $reg['email'] = $r->email;
                    $reg['nombre'] = $r->nombre;
                    $reg['titulo'] = $infoSala->titulo;
                    $reg['fecha'] = $infoSala->fecha;
                    $reg['horario'] = $infoSala->horario;
					$reg['descripcion'] = $infoSala->descripcion;
					$reg['clave'] = $r->loginpw;
                    $reg['url'] = base_url().'room/index/'.$class_id;
                    $reg['timezone'] = $infoSala->timezone; 
                    $params = gen_email_params('invitacion',$reg);                                    
                    enviar_email($params);
                    //echo $r->email.' -> sent: '.enviar_email($params).'<br>';
                    //echo $this->email->print_debugger().'<br>';
                }
                $_SESSION['sys_msg_ok'] = 'Se han enviado las invitaciones correctamente!';
                redirect('admin/salas/view/'.$class_id);
            }
    }   


  public function send_invitacion_id($class_id,$attendee_id)
    {
        $result=$this->isalas_model->consulta_participantes($class_id);
        if (empty($result))
        {
            $_SESSION['sys_msg'] = 'La Sala es invalida';
            $this->salas('participantes',$class_id);
        }
        $attendee = $this->isalas_model->getAttendeeBYId($attendee_id);
        if (empty($attendee))
        {
            $_SESSION['sys_msg'] = 'La Participante es invalido';
            $this->salas('participantes',$class_id);
        }        
        else
            { 
                $this->load->helper('emailer');
                $infoSala = $this->isalas_model->getSalaClassId($class_id);
                $infoSala = $infoSala[0];
  
                $reg['email'] = $attendee->email;
                $reg['nombre'] = $attendee->nombre;
                $reg['titulo'] = $infoSala->titulo;
                $reg['fecha'] = $infoSala->fecha;
                $reg['horario'] = $infoSala->horario;
                $reg['descripcion'] = $infoSala->descripcion;
                $reg['clave'] = $attendee->loginpw;
                $reg['url'] = base_url().'room/index/'.$class_id;
                $reg['timezone'] = $infoSala->timezone; 
                $params = gen_email_params('invitacion',$reg);                                    
                enviar_email($params);
                //echo $attendee->email.' -> sent: '.enviar_email($params).'<br>';
                //echo $this->email->print_debugger().'<br>';

                $_SESSION['sys_msg_ok'] = 'Se ha enviado la invitacion a '.$attendee->email.' correctamente!';
                redirect('admin/salas/invitaciones/'.$class_id);
            }
    } 

    
    public function _genera_lista_participantes_post()
    {
        $listado = FALSE;
        if($this->input->post('lista'))
        {
            $string = $this->input->post('lista');
            $result = explode(",",$string);
            $this->load->library('form_validation');
            $listado = array();
            $tope = count($result)-1;
            for($i=0;$i<=$tope;$i++)
            {
                if($this->form_validation->valid_email(trim($result[$i])))
                {
                    array_push($listado,trim($result[$i]));
                    $i++;                 
                    array_push($listado,trim($result[$i]));
                }
            }
            if(empty($listado)){ $listado = FALSE; }
        }        
        return $listado;
    }
    
    public function _genera_lista_participantes_db($result_db)    
    {
        $text = "";
        foreach($result_db as $r)
        {
            $text.= $r->email.','.$r->nombre.','.chr(13).chr(10); 
        }    
        return $text;
    }
    
    public function _genera_attendee_XML($result_db)
    {   
        $start = "<attendee_list>";
        $end = "</attendee_list>";
        $list = "";
        foreach($result_db as $r)
        {      
            $list.= '<attendee>';
            $list.= '<attendee_id><![CDATA['.$r->id_attendee.']]></attendee_id>';
            $list.= '<screen_name><![CDATA['.$r->nombre.']]></screen_name>';
            $list.= '<language_culture_name><![CDATA['.$r->language_culture_name.']]></language_culture_name>';
            $list.= '</attendee>';
        }   
        $xml = $start.$list.$end;
        return $xml;

    }
    
    public function _extraeParticipantesExistentes($lista_form,$lista_db)
    {
        $result['agregar'] = array();
        $result['borrar'] = array();        
        $tope = count($lista_form)-1;
        for($i=0;$i<=$tope;$i++)
        {            
            $existe = FALSE;
            foreach($lista_db as $r)
            {
                $r->borrar = (!isset($r->borrar)) ? $r->borrar = TRUE : $r->borrar;
                if($r->email == $lista_form[$i])
                {
                    $existe = TRUE;
                    $r->borrar = FALSE;
                }
            }     
            if(!$existe)
            {
                array_push($result['agregar'], $lista_form[$i]);
                array_push($result['agregar'], $lista_form[$i+1]);                                        
            }        
            $i++;
        }    
        foreach($lista_db as $r)
        {
            if($r->borrar == TRUE)
            {
                array_push($result['borrar'], $r->email);
            }
        }          
        return $result;
        
    }        
    
    public function _insert_attendees_db($lista,$salaInfo)
    {
        $this->load->helper('cod_generador');
        $attendee['class_id'] = $salaInfo->class_id;
        $tope = count($lista)-1;
        for($i=0;$i<=$tope;$i++)
        {
            $attendee['email'] = $lista[$i];
            $i++;
            $attendee['nombre'] = $lista[$i];
            $attendee['language_culture_name'] = $salaInfo->language_culture_name;
            $attendee['clave'] = generaCodigo();            
            $this->isalas_model->insert_attendee($attendee);
        }      
    }

    public function _guardaDatosAccesoAttendee($resultApi,$idResponse)
    {
        $attendees = $resultApi['responseItem']['attendees'];       
        $status = $resultApi['responseItem']['status'];       
        foreach($attendees as $r)
        {
            $this->isalas_model->updateDatosAccesoAttendee($r,$idResponse,$status);            
        }
    }    

    public function _delete_attendees_db($lista,$class_id)
    {
        $tope = count($lista)-1;
        for($i=0;$i<=$tope;$i++)
        {      
            $this->isalas_model->delete_attendee($lista[$i],$class_id);
        }      
    }    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
