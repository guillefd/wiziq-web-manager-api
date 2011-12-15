<?php

class Login_model extends CI_model
{

    function __construct()
    {
        parent::__construct();
        $this->users = 'isalas_users';
    }
    
    // CONSULTA sala x ID
    function consultaUsuario($user,$pass) 
    {
        $q = $this->db->get_where($this->users,array('nombreusuario'=>$user,'clave'=>$pass));
        if($q->num_rows()>0)
        {
            $data = $q->row();
        }
        else
            {
                $data=FALSE;
            }
        return $data;            
    }      
    
}

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
