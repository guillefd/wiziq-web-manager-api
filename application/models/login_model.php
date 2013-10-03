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

    function getUserById($id=0)
    {
        $q = $this->db->get_where($this->users,array('user_id'=>$id));
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


    function consulta_creditos($user_id)
    {
        $q = $this->db->get_where($this->users,array('user_id'=>$user_id)); 
        if($q->num_rows()>0)
        {
            $data = $q->row('creditos');
        }
        else
            {
                $data=FALSE;
            }
        return $data;    
              
    }

     // actualiza valor creditos
     function descontarUnCredito($user_id)
     {           
        $q = 'UPDATE '.$this->users.' SET creditos = creditos - 1 WHERE user_id = '.$user_id; 
        return $this->db->query($q);
     }   

     // actualiza valor creditos
     function sumarUnCredito($user_id)
     {           
        $q = 'UPDATE '.$this->users.' SET creditos = creditos + 1 WHERE user_id = '.$user_id; 
        return $this->db->query($q);
     }      
    
}

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
