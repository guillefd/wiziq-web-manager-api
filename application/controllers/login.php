<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    
   public function __construct()
   {
        parent::__construct();
        session_start();                
        $this->page_name = 'login';
        $this->load->helper('form');
        date_default_timezone_set($this->config->item('isalas_timezone'));
        if(isset($_SESSION['url_anterior']) != current_url()){ $_SESSION['url_anterior']=  current_url(); };        
        //debugger
        //$this->output->enable_profiler(TRUE);

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
    public function _init_form_login_validation()
    {
        $this->form_validation->set_rules('usuario','Usuario','trim|required');
        $this->form_validation->set_rules('clave','Clave','trim|required');                       
    }      
   
   public function index()
   {
        if(isset($_SESSION['isalas_logged']) && $_SESSION['isalas_rol']>1){ redirect('admin'); } 
        $data[]='';
        //inicia template
        $tpl = init_tmpl($this->page_name);
        $meta = $this->_init_meta();  
        $tpl = array_merge($tpl,$meta);
        $view = 'login';
        load_view($tpl, $data, $view);  
   }
   
   public function validar()
   {
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert-box error">', '</div>');        
        $this->_init_form_login_validation();
        if ($this->form_validation->run() == FALSE)
        {
            $this->index();
        }else
            {
                $result = $this->login_model->consultaUsuario($this->input->post('usuario'),$this->input->post('clave'));
                if($result)
                {
                    if($result->fecha_validez >= date('Y-m-d'))
                    {    
                        //valida ADMIN
                        $_SESSION['isalas_rol']=5;
                        $_SESSION['isalas_user']=$result->nombreusuario;
                        $_SESSION['isalas_user_id']=$result->user_id;
                        $_SESSION['isalas_name']=$result->nombre;						
                        $_SESSION['isalas_logged']="true";
                        redirect('admin');
                    }else
                        {
                            $_SESSION['login_msg']='Esta cuenta ha expirado.';
                            $this->index();    
                        }
                }else
                    {
                        $_SESSION['login_msg']='Usuario y/o Clave no son válidos';
                        $this->index();
                    }    
            }    
   }
   
   public function logout()
   {
       //$this->session->sess_destroy();
       $_SESSION = array();
       session_destroy();
       redirect('login');
   }


    /**
    * Index Page for this controller.
    */
    public function account()
    {
      $this->load->model('login_model'); 
      $this->load->model('isalas_model');            
      $data['account']= $this->login_model->getUserById($_SESSION['isalas_user_id']);
      $data['account']->salas_agendadas = $this->isalas_model->salas_historial();
      //inicia template
      $tpl = init_tmpl('admin');
      $meta = $this->_init_meta();  
      $tpl = array_merge($tpl,$meta);
      $view = 'account';
      load_view($tpl, $data, $view);    
    }

}

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */