<?php

class Isalas_model extends CI_model
{
    function __construct()
    {
        parent::__construct();
        $this->api_requests = 'isalas_api_requests';
        $this->api_response = 'isalas_api_response';
        $this->attendees = 'isalas_attendees';
        $this->contactos = 'isalas_contactos';
        $this->salas = 'isalas_salas';

        $this->indexReq = array('method','class_id','title','start_time','duration','time_zone','presenter_email','presenter_id','presenter_name','presenter_default_controls',
                     'attendee_limit','control_category_id','create_recording','return_url','status_ping_url','language_culture_name','descripcion','attendee_list');        
        $this->indexResp = array('method','status','class_id','recording_url','presenter_email','presenter_url','add_attendeeStatus','attendeeTag','errorcode','errormsg');                   
    }

    function init_index($vec,$index)
    {
        // inicializa indices vacios        
        foreach ($index as $value)
        {
            if(!isset($vec[$value])){ $vec[$value] = ''; }
        }
        return $vec;        
    }
    
    // Inserta API request
    function insert_apiRequest($request)
    {
        $request = $this->init_index($request, $this->indexReq);
        //---------------------        
        //insert Tabla Request
        $datos = array(
           'method'=>$request['method'], 
           'class_id'=>$request['class_id'], 
           'titulo'=>$request['title'],
           'fecha'=>substr($request['start_time'],0,10),
           'horario'=>substr($request['start_time'],11,5),
           'duracion'=>$request['duration'],
           'timezone'=>$request['time_zone'],
           'presenter_email'=>$request['presenter_email'],
           'presenter_id'=>$request['presenter_id'],
           'presenter_name'=>$request['presenter_name'],
           'presenter_default_controls'=>$request['presenter_default_controls'],
           'attendee_limit'=>$request['attendee_limit'],
           'control_category_id'=>$request['control_category_id'],
           'create_recording'=>$request['create_recording'],
           'return_url'=>$request['return_url'],  
           'status_ping_url'=>$request['status_ping_url'],
           'language_culture_name'=>$request['language_culture_name'],
           'descripcion'=>$request['CKdescripcion'],       
           'attendee_list'=>$request['attendee_list'],            
//           'session_id' => $this->session->userdata('session_id'),
//           'session_ip_address' => $this->session->userdata('ip_address'),
//           'session_user_agent' => $this->session->userdata('user_agent'),
           'id_user'=>$_SESSION['isalas_user'],
           'timestamp'=>$request['timestamp'] 
        );
        $this->db->insert($this->api_requests, $datos);
        return mysql_insert_id();                    
    }
    
    function insert_apiResponse($response, $id_request)
    {
        $response = $this->init_index($response, $this->indexResp);        
        $datos = array(
            'id_request'=>$id_request,
            'method'=>$response['method'],
            'status'=>$response['status'],
            'class_id'=>$response['class_id'],
            'recording_url'=>$response['recording_url'],
            'presenter_email'=>$response['presenter_email'],
            'presenter_url'=>$response['presenter_url'],
            'add_attendeeStatus'=>$response['add_attendeeStatus'],
            'attendeeTag'=>$response['attendeeTag'],
            'errorcode'=>$response['errorcode'],
            'errormsg'=>$response['errormsg'],
            'timestamp'=>$response['timestamp']                        
        );
        $this->db->insert($this->api_response,$datos);
        return mysql_insert_id();               
    }        

    function insertSala($request, $response, $id_response)
    {
        $request = $this->init_index($request, $this->indexReq);
        $response = $this->init_index($response, $this->indexResp);        
            $datos = array(
                'id_response'=>$id_response,
                'titulo'=>$request['title'],
                'fecha'=>substr($request['start_time'],0,10),
                'horario'=>substr($request['start_time'],11,5),
                'duracion'=>$request['duration'],
                'timezone'=>$request['time_zone'],
                'presenter_id'=>$request['presenter_id'],
                'presenter_name'=>$request['presenter_name'],
                'presenter_default_controls'=>$request['presenter_default_controls'],
                'attendee_limit'=>$request['attendee_limit'],
                'control_category_id'=>$request['control_category_id'],
                'create_recording'=>$request['create_recording'],
                'return_url'=>$request['return_url'],  
                'status_ping_url'=>$request['status_ping_url'],
                'language_culture_name'=>$request['language_culture_name'],
                'descripcion'=>$request['CKdescripcion'],             
                'class_id'=>$response['class_id'],
                'user_id'=>$_SESSION['isalas_user_id'],
                'presenter_email'=>$response['presenter_email'],            
                'recording_url'=>$response['recording_url'],
                'presenter_url'=>$response['presenter_url'],
                'timestamp'=>date('Y-m-d H:i:s'),
                'status'=>$response['status']            
            );
            $this->db->insert($this->salas,$datos); 
            return mysql_insert_id();                      
    }

    function updateSala($id, $titulo, $descripcion)
    {
        $data = array(
                      'titulo'=>$titulo,            
                      'descripcion'=>$descripcion,
            );
        $this->db->where('class_id',$id);
        $this->db->update($this->salas,$data);  
    }    

    function insert_attendee($attendee)
    {
        $datos = array(
            'class_id'=>$attendee['class_id'],
            'nombre'=>$attendee['nombre'],
            'email'=>$attendee['email'],            
            'timestamp'=>date('Y-m-d H:i:s'),
            'language_culture_name'=>$attendee['language_culture_name'],
            'habilitado'=>1,
            'loginpw'=>$attendee['clave']                     
        );
        $this->db->insert($this->attendees,$datos);
        return mysql_insert_id();               
    }      
    
 // actualiza datos
     function cancelSala($id,$idResponse)
     {           
        $data = array(
                      'status'=>'deleted',
                      'apiCancelResponse'=>$idResponse 
            );
        $this->db->where('class_id',$id);
        $this->db->update($this->salas,$data);  
     }    
      
    function salas_hoy()
    {
        //echo $_SESSION['isalas_user']; exit();
        $this->db->from($this->salas);
        $this->db->where('fecha', date('Y-m-d'));
        $this->db->where('status', 'ok');
        $this->db->where('user_id',$_SESSION['isalas_user_id']);
        $q = $this->db->get();        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }    
        }
        else
            {
                $data=array();
            }
        return $data;            
    }
    
    function salas_proximas()
    {
        $this->db->from($this->salas);
        $this->db->where('fecha >', date('Y-m-d'));
        $this->db->where('status', 'ok'); 
        $this->db->where('user_id',$_SESSION['isalas_user_id']);               
        $q = $this->db->get();        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }    
        }
        else
            {
                $data=array();
            }
        return $data;            
    }

    function salas_historial()
    {
        $this->db->from($this->salas);
        // $this->db->where('fecha <', date('Y-m-d'));
        $this->db->where('status', 'ok'); 
        $this->db->where('user_id',$_SESSION['isalas_user_id']);               
        $q = $this->db->get();        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }    
        }
        else
            {
                $data=array();
            }
        return $data;            
    }    
    

    function consulta_participantes($class_id)
    {
        $this->db->from($this->attendees);
        $this->db->where('class_id', $class_id);
        $q = $this->db->get();        
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }    
        }
        else
            {
                $data=array();
            }
        return $data;            
    }  

    // CONSULTA attendee x email
    function getAttendeeId($class_id,$email) 
    {
        $q = $this->db->get_where($this->attendees,array('class_id'=>$class_id,'email'=>$email));
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

    // CONSULTA attendee x ID
    function getAttendeeBYId($id) 
    {
        $q = $this->db->get_where($this->attendees,array('id_attendee'=>$id));
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

 // actualiza datos
     function updateDatosAccesoAttendee($row,$idResponse,$status)
     {           
        $data = array(
                      'id_response'=>$idResponse,
                      'attendee_url'=>$row['url'],            
                      'status'=>$status,
            );
        $this->db->where('id_attendee',$row['id']);
        $this->db->update($this->attendees,$data);  
     }       
    

 // 
     function delete_attendee($email,$class_id){
                  
        $this->db->where('email',$email);
        $this->db->where('class_id',$class_id);        
        $this->db->delete($this->attendees);  
     }    
    
    // CONSULTA sala x ID
    function getSalaId($id) 
    {
        $q = $this->db->get_where($this->salas,array('id_sala'=>$id));
        if($q->num_rows()>0)
        {
            $data = $q->row();
        }
        else
            {
                $data=array();
            }
        return $data;            
    }       

    // CONSULTA sala x ID
    function getSalaClassId($id) 
    {
        $q = $this->db->get_where($this->salas,array('class_id'=>$id));
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $row)
            {
                $data[] = $row;
            }    
        }else
            {
                $data=array();
            }
            return $data;            
    }      
    
    
    
    
}    

/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */