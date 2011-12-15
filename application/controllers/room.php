<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller {
    
   public function __construct()
   {
        parent::__construct();
        session_start();    
        $this->page_name = 'room';        
        $this->load->model('isalas_model');
        $this->load->helper('form');        
        $this->session_max_valid = $this->config->item('isalas_session_max_limit_valida');
        date_default_timezone_set($this->config->item('isalas_timezone'));           
        //debugger
        //$this->output->enable_profiler(TRUE);

   }   

    public function _remap($method,$params = array())
    {
        switch ($method)
        {                 
            case 'index': call_user_func_array(array($this, $method), $params);
                         break;             
            case 'presenter': call_user_func_array(array($this, $method), $params);
                         break;      
            case 'participar': call_user_func_array(array($this, $method), $params);
                         break;                       
            case 'login': call_user_func_array(array($this, $method), $params);
                         break;                        
            case 'validar': call_user_func_array(array($this, $method), $params);
                         break;                       
            case 'logout': call_user_func_array(array($this, $method), $params);
                         break;                        
                     
            default: redirect('/404');                      
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
    
    public function _init_form_login_validation()
    {
        $this->form_validation->set_rules('email','Email','trim|email|required');
        $this->form_validation->set_rules('clave','Clave','trim|required');                       
    }     
    
    public function presenter($id=NULL)
    {
        if(!isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']==5)
        {
            $_SESSION['login_msg']='Acceso no autorizado';
            redirect('login');
        }            
        if(!empty($id))
        {
            $result = $this->isalas_model->getSalaId($id);
            if(!empty($result))
            {
                $data['row'] = $result;
            }else
                {
                redirect('/404');
                }
            $this->load->view('room/room',$data);
        }else
            {
                redirect('/404');
            }    
        
    }   

    public function index($id=NULL)
    {
        if(!isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']>=1 && !isset($_SESSION['isalas_id_attendee']))
        {
            $_SESSION['login_msg']='Acceso no autorizado';
            redirect('room/login'.$id);
        }            
        if(isset($_SESSION['isalas_class_id']))
        {
            $infoSala = $this->isalas_model->getSalaClassId($id);
            $data['infoSala'] = $infoSala[0]; 
            //inicia template
            $tpl = init_tmpl($this->page_name);
            $meta = $this->_init_meta();  
            $tpl = array_merge($tpl,$meta);
            $view = 'room/index';
            load_view($tpl, $data, $view);  
        }else if(!empty($id))
            {
                    $_SESSION['login_msg']='Por favor complete con sus datos para ingresar.';
                    redirect('room/login/'.$id);
            }else
                {
                    $_SESSION['login_msg']='Identificador de sala inválido.';
                    redirect('room/login/');                                    
                }    
        
    }    
    
    public function participar($id=NULL)
    {
        if(!isset($_SESSION['isalas_logged']) && !isset($_SESSION['isalas_rol']) && !isset($_SESSION['isalas_id_attendee']))
        {
            $_SESSION['login_msg']='Por favor complete con sus datos para ingresar.';
            redirect('room/login/'.$id);
        }            
        if(isset($_SESSION['isalas_class_id']))
        {
            $data[]='';
            $this->load->view('room/participar',$data);
        }else if(!empty($id))
            {
                    $_SESSION['login_msg']='Por favor complete con sus datos para ingresar.';
                    redirect('room/login/'.$id);
            }else
                {
                    $_SESSION['login_msg']='Identificador de sala inválido.';
                    redirect('room/login/');                                    
                }    
        
    }

   public function login($id=NULL)
   {
        if(isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']>=1 && isset($_SESSION['isalas_id_attendee']))
        { 
            redirect('room/participar/'.$id);         
        } 
        $data['class_id']=$id;
        //inicia template
        $tpl = init_tmpl($this->page_name);
        $meta = $this->_init_meta();  
        $tpl = array_merge($tpl,$meta);
        $view = 'room/login';
        load_view($tpl, $data, $view);  
   }   

   public function validar($id=NULL)
   {
        $this->load->library('form_validation');
        //$this->form_validation->set_error_delimiters('<div class="alert-box error">', '</div>');        
        $this->_init_form_login_validation();
        if ($this->form_validation->run() == FALSE)
        {
            $_SESSION['login_msg'] = validation_errors();
            redirect('room/login/'.$id);
        }else
            {
                if($this->_check_datos_attendee($id))
                {
                    $reg=$this->_check_datos_attendee($id);
                    if($reg->habilitado==1)
                    {
                        $_SESSION['isalas_rol']=1;
                        $_SESSION['isalas_attendee_name']=$reg->nombre;
                        $_SESSION['isalas_id_attendee']=$reg->id_attendee;                    
                        $_SESSION['isalas_class_id']=$reg->class_id;
                        $_SESSION['isalas_attendee_url'] = $reg->attendee_url;
                        $_SESSION['isalas_logged']="true";                    
                        redirect('room/index/'.$id);
                    }else
                        {
                            $_SESSION['login_msg']='Usuario deshabilitado';
                            redirect('room/login/'.$id);                        
                        }
                }else
                    {
                        $_SESSION['login_msg']='Email y Clave no son válidos';
                        redirect('room/login/'.$id);
                    }    
            }    
   }
   
   public function _check_datos_attendee($class_id)
   {
       $reg = $this->isalas_model->getAttendeeId($class_id,$this->input->post('email'));           
       return $reg;
   }
   
   public function logout($id=NULL)
   {
       //$this->session->sess_destroy();
       session_destroy();
       redirect('room/login/'.$id);
   }   

}   

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
