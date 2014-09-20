<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller 
{    
	public function __construct()
	{
	    parent::__construct();
	    if (!$this->ion_auth->is_admin())
	    {
	    	$this->session->set_flashdata('message','No tiene permiso para acceder aqui');
	    	redirect('admin');
	    }
	    $this->load->helper('template');
	    $this->load->helper('language');
	}

	public function _init_meta()
	{
	    //genera variables META para pagina actual
	    $val['descripcion'] = "iSalas";
	    $val['keywords'] = "Sala Virtual";
	    $meta = init_meta($val);
	    return $meta;        
	}

	public function index()
	{
		$data[] = '';
		$tpl = init_tmpl('manage');
		$meta = $this->_init_meta();
		$tpl = array_merge($tpl,$meta);
		$view = 'manage/index';
		load_view($tpl,$data,$view);
	}



}