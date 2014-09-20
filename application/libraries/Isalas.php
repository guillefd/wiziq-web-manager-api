<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Isalas
{

    public function __construct()
    {
        $CI = & get_instance();
        $this->secretAcessKey=$CI->config->item('isalas_wiziq_secretAccessKey');
        $this->access_key=$CI->config->item('isalas_wiziq_access_key');
        $this->webServiceUrl=$CI->config->item('isalas_wiziq_webServiceUrl');
    }
    
    public function init_array($vec,$id)
    {
        $vec = array();
        switch($id)
        {
            case 'req': $index = array('method','title','start_time','duration','time_zone','presenter_email','presenter_id','presenter_name','presenter_default_controls',
                     'attendee_limit','control_category_id','create_recording','return_url','status_ping_url','language_culture_name','descripcion');
                        break; 

            case 'resp': $index = array('method','status','class_id','recording_url','presenter_mail','presenter_url','errorcode','errormsg');    
                        break;
        }
        foreach ($index as $value)
        {
            $vec[$value] = NULL;
        }        
        return $vec;
    }
    
    public function ScheduleClass($presenter_email)
    {
        $CI = & get_instance();                     
        $method = "create";
        $requestParameters["signature"]=$this->GenerateSignature($method,$requestParameters);
        #for teacher account pass parameter 'presenter_email'
        $requestParameters["presenter_email"] = $presenter_email;
        #for room based account pass parameters 'presenter_id', 'presenter_name'
        $requestParameters["presenter_id"] = $_SESSION['isalas_user_id'];
        $requestParameters["presenter_name"] = $_SESSION['isalas_name'];  
        $requestParameters["start_time"] = $CI->input->post('fecha').' '.$CI->input->post('horario');
        $requestParameters["title"]=$CI->input->post('titulo'); //Required
        $requestParameters["duration"]=formatoHora_a_minutos($CI->input->post('duracion')); //optional
        $requestParameters["time_zone"]=$CI->input->post('timezone'); //optional
        $requestParameters["presenter_default_controls"]=$CI->input->post('audiovideo'); //opcional
        $requestParameters["attendee_limit"]=$CI->config->item('isalas_wiziq_attendee_limit'); //optional
        $requestParameters["control_category_id"]=""; //optional
        $requestParameters["create_recording"]="true"; //optional
        $requestParameters["return_url"]=$CI->config->item('isalas_wiziq_return_url'); //optional
        $requestParameters["status_ping_url"]=""; //optional
        $requestParameters["language_culture_name"]=$CI->input->post('idioma');
        $timestamp = date('Y-m-d H:i:s');         
        try
        {
                $XMLReturn=$this->wiziq_do_post_request($this->webServiceUrl.'?method=create',http_build_query($requestParameters, '', '&')); 
        }
        catch(Exception $e)
        {	
                echo $e->getMessage();
        }        
        
        //Valores de retorno
        $requestParameters['method'] = $method;
        $requestParameters["timestamp"] = $timestamp;         
        $requestParameters['CKdescripcion'] = $CI->input->post('CKdescripcion');  
        if(!empty($XMLReturn))
        {           
                try
                {
                  $objDOM = new DOMDocument();
                  $objDOM->loadXML($XMLReturn);

                }
                catch(Exception $e)
                {
                  echo $e->getMessage();
                }
                $status=$objDOM->getElementsByTagName("rsp")->item(0);
                $attribNode = $status->getAttribute("status");
                if($attribNode=="ok")
                {
                        $methodTag=$objDOM->getElementsByTagName("method");
                            $responseItem['method'] = $methodTag->item(0)->nodeValue;
                        $class_idTag=$objDOM->getElementsByTagName("class_id");
                            $responseItem['class_id'] = $class_idTag->item(0)->nodeValue;
                        $recording_urlTag=$objDOM->getElementsByTagName("recording_url");
                            $responseItem['recording_url'] = $recording_urlTag->item(0)->nodeValue;
                        $presenter_emailTag=$objDOM->getElementsByTagName("presenter_email");
                            $responseItem['presenter_email'] = $presenter_emailTag->item(0)->nodeValue;
                        $presenter_urlTag=$objDOM->getElementsByTagName("presenter_url");
                            $responseItem['presenter_url'] = $presenter_urlTag->item(0)->nodeValue;
                }
                else if($attribNode=="fail")
                        {
                                $error=$objDOM->getElementsByTagName("error")->item(0);
                                $responseItem['errorcode'] = $error->getAttribute("code");	
                                $responseItem['errormsg'] = $error->getAttribute("msg");	
                        }        
                //valores de retorno
                $responseItem['status'] = $attribNode; 
        }//end if        
        else
            {
                $responseItem['status'] = 'fail';        
                //$responseItem['errormsg'] = 'XML empty';             
                $responseItem['errormsg'] = 'Error de comunicación con el servidor, si persiste por favor comúniques con soporte técnico (support@isalas.com.ar)';  
            }            
        $responseItem['timestamp'] = date('Y-m-d H:i:s');                    
        $data['responseItem'] = $responseItem; 
        $data['requestParameters'] = $requestParameters;                   
        return $data;
    }//end function  
    
    public function CancelarClass($class_id)
	{		
                $method = "cancel";
                $requestParameters["signature"]=$this->GenerateSignature($method,$requestParameters);                
		$requestParameters["class_id"] = $class_id;//optional               
		try
		{
			$XMLReturn=$this->wiziq_do_post_request($this->webServiceUrl.'?method=cancel',http_build_query($requestParameters, '', '&')); 
		}
		catch(Exception $e)
		{	
	  		echo $e->getMessage();
		}
                $timestamp = date('Y-m-d H:i:s');                  
 		if(!empty($XMLReturn))
 		{
 			try
			{
			  $objDOM = new DOMDocument();
			  $objDOM->loadXML($XMLReturn);
			}
			catch(Exception $e)
			{
			  echo $e->getMessage();
			}
			$status=$objDOM->getElementsByTagName("rsp")->item(0);
                        $attribNode = $status->getAttribute("status");
			if($attribNode=="ok")
			{
                            $methodTag=$objDOM->getElementsByTagName("method");
                                $responseItem['method'] = $methodTag->item(0)->nodeValue;
                            $cancelTag=$objDOM->getElementsByTagName("cancel")->item(0);
                                $responseItem['status'] = $cancelTag->getAttribute("status");
			}
			else if($attribNode=="fail")
			{
                            $error=$objDOM->getElementsByTagName("error")->item(0);
                            $responseItem['errorcode'] = $error->getAttribute("code");	
                            $responseItem['errormsg'] =  $error->getAttribute("msg");	
			}
                $requestParameters["timestamp"] = $timestamp;                           
                $responseItem['status'] = $attribNode;                        
                $data['responseItem'] = $responseItem;        
        }//end if        
        else
            {
                $responseItem['status'] = 'fail';        
                $responseItem['errormsg'] = 'XML empty';                
            }
        $requestParameters['method'] = $method;
        $responseItem['class_id'] = $class_id;                   
        $responseItem['timestamp'] = date('Y-m-d H:i:s');           
        $data['responseItem'] = $responseItem; 
        $data['requestParameters'] = $requestParameters;                   
        return $data;            
                
   }//end function 
   

    function AddAttendeeClass($attendee_xml,$class_id)
    {
            $XMLAttendee=$attendee_xml;
            $method = "add_attendees";
            $requestParameters["signature"]=$this->GenerateSignature($method,$requestParameters);
            $requestParameters["class_id"] = $class_id;//required
            $requestParameters["attendee_list"]=$XMLAttendee;
            try
            {
                    $XMLReturn=$this->wiziq_do_post_request($this->webServiceUrl.'?method=add_attendees',http_build_query($requestParameters, '', '&')); 
            }
            catch(Exception $e)
            {	
                    echo $e->getMessage();
            }
            $timestamp = date('Y-m-d H:i:s');             
            if(!empty($XMLReturn))
            {
                    try
                    {
                      $objDOM = new DOMDocument();
                      $objDOM->loadXML($XMLReturn);
                    }
                    catch(Exception $e)
                    {
                      echo $e->getMessage();
                    }
                    $status=$objDOM->getElementsByTagName("rsp")->item(0);
                    $attribNode = $status->getAttribute("status");
                    if($attribNode=="ok")
                    {
                            $methodTag=$objDOM->getElementsByTagName("method");
                            $responseItem['method']=$methodTag->item(0)->nodeValue;

                            $class_idTag=$objDOM->getElementsByTagName("class_id");
                            $responseItem['class_id']=$class_idTag->item(0)->nodeValue;

                            $add_attendeesTag=$objDOM->getElementsByTagName("add_attendees")->item(0);
                            $responseItem['add_attendeesStatus'] = $add_attendeesTag->getAttribute("status");

                            $attendeeTag=$objDOM->getElementsByTagName("attendee");
                            $responseItem['attendeeTag'] = $attendeeTag->length;                            
                            $length=$attendeeTag->length;
                            $responseItem['attendees'] = array();                            
                            for($i=0;$i<$length;$i++)
                            {
                                    $attendee_idTag=$objDOM->getElementsByTagName("attendee_id");
                                    $attendee_urlTag=$objDOM->getElementsByTagName("attendee_url");                                    
                                    $attendee['id']=$attendee_idTag->item($i)->nodeValue;
                                    $attendee['url']=$attendee_urlTag->item($i)->nodeValue;                                    
                                    array_push($responseItem['attendees'], $attendee);                                    
                            }
                    }
                    else if($attribNode=="fail")
                    {
                            $error=$objDOM->getElementsByTagName("error")->item(0);
                            $responseItem['errorcode'] = $error->getAttribute("code");	
                            $responseItem['errormsg'] =  $error->getAttribute("msg");		
                    }
                    $requestParameters["timestamp"] = $timestamp;                           
                    $responseItem['status'] = $attribNode;                        
                    $data['responseItem'] = $responseItem;                     
            }//end if
            else
                {
                    $responseItem['status'] = 'fail';        
                    $responseItem['errormsg'] = 'XML empty';                
                }
            $requestParameters['method'] = $method;               
            $responseItem['timestamp'] = date('Y-m-d H:i:s');           
            $data['responseItem'] = $responseItem; 
            $data['requestParameters'] = $requestParameters;                   
            return $data;                  
    }//end function   
   
   
    // AUTHBASE ----------------------------------------------------------------------
   
    public function GenerateTimeStamp()
    {
            return time();
    }

    public function GenerateSignature($methodName,&$requestParameters) 
    {
            $signatureBase="";
            $secretAcessKey = urlencode($this->secretAcessKey);
            $requestParameters["access_key"] = $this->access_key;
            $requestParameters["timestamp"] =$this->GenerateTimeStamp();
            $requestParameters["method"] = $methodName;

            foreach ($requestParameters as $key => $value)
            {
                    if(strlen($signatureBase)>0)
                    $signatureBase.="&";
                    $signatureBase.="$key=$value";
            }
            //echo "<br>signatureBase=".$signatureBase;
            return base64_encode($this->hmacsha1($secretAcessKey, $signatureBase));
    }

    public function hmacsha1($key,$data) 
    { 
            $blocksize=64;
            $hashfunc='sha1';
            if (strlen($key)>$blocksize)
                    $key=pack('H*', $hashfunc($key));
            $key=str_pad($key,$blocksize,chr(0x00));
            $ipad=str_repeat(chr(0x36),$blocksize);
            $opad=str_repeat(chr(0x5c),$blocksize);
            $hmac = pack(
                                    'H*',$hashfunc(
                                            ($key^$opad).pack(
                                                    'H*',$hashfunc(
                                                            ($key^$ipad).$data
                                                    )
                                            )
                                    )
                            );
            return $hmac;
    }   

    public function wiziq_do_post_request($url, $data, $optional_headers = null)
    {     
        $params = array('http' => array(
                                  'method' => 'POST',
                                  'content' => $data,
                                  'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                                              "Content-Length: " . strlen ( $data ) . "\r\n"                                  
                           ));
        if ($optional_headers !== null) 
        {
                $params['http']['header'] = $optional_headers;
        }
        $ctx = stream_context_create($params);         
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp) 
        {
            //throw new Exception("Problem with $url, $php_errormsg");
            log_message('error','Problem with $url');
        }
        $response = @stream_get_contents($fp);
        if ($response === false) 
        {
                //throw new Exception("Problem reading data from $url, $php_errormsg");
                log_message('error','Problem reading data from $url');
        }
         return $response;
    }

    

   
   
   
   
}
// END Isalas class

/* End of file Isalas.php */
/* Location: ./application/libraries/Isalas.php */
