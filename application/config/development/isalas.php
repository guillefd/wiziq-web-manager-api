<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//system_url
$config['isalas_subfolder_url'] = '';

//system email sender 
$config['isalas_smtp_host'] = 'ssl://mail.land2web.com';
$config['isalas_smtp_user'] = 'no_reply@land2web.com';
$config['isalas_smtp_pass'] = 'VcAuNH^FoTyW';
$config['isalas_smtp_port'] = 465;
$config['isalas_system_name'] = isset($_SESSION['isalas_name']) ? $_SESSION['isalas_name'] : '';
$config['isalas_system_url'] = 'www.isalas.com';
$config['isalas_system_email'] = 'no_reply@isalas.com.ar';
$config['isalas_system_email_support'] = 'support@isalas.com.ar';


//profile
$config['isalas_url'] = 'meeting.isalas.com.ar';
$config['isalas_no_reply_address'] = 'no_reply@isalas.com.ar';
$config['isalas_no_reply_name'] = 'iSalas - Salas Virtuales';
$config['isalas_timezone'] = 'America/Argentina/Buenos_Aires';
$config['isalas_session_max_limit_valida'] = 432000; // 5 dias 
$config['isalas_admin_email'] = 'isalas@eytech.com.ar';
$config['isalas_admin_pass'] = 'eytisalas012';
$config['isalas_admin_name'] = 'iSalas Admin';

// datos de envio EMAIL
$config['isalas_publisher_email'] = 'info@isalas.com.ar';
$config['isalas_publisher_name'] = 'iSalas';
$config['isalas_publisher_tel'] = '+54(11) 4343.2057';
$config['isalas_publisher_contact_email'] = 'info@isalas.com.ar';

// API Wiziq
$config['isalas_wiziq_secretAccessKey'] = "teWkIAdSrdwurYxe7aAtCw==";
$config['isalas_wiziq_access_key'] = "ocFRe6qFZNc=";
$config['isalas_wiziq_webServiceUrl'] = "http://class.api.wiziq.com/";
// Wiziq users
$config['isalas_wiziq_presenter_email'] = array("isalas@eytech.com.ar",
												"isalas2@eytech.com.ar",
												"isalas3@eytech.com.ar",
												"isalas4@eytech.com.ar"
												);
//
$config['isalas_wiziq_return_url'] = "http://meeting.isalas.com.ar/room/logout";
$config['isalas_wiziq_attendee_limit'] = 50;



/* End of file XXX.php */
/* Location: ./application/controllers/XXX.php */
