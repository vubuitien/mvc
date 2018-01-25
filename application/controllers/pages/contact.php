<?php 
	class Contact extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('contact_model');
		}
		function index()
		{
			$input = array();
			$data['list'] = $this->contact_model->get_list($input);
			$data['temp'] = 'admin/menu/index' ;
			$this->load->view('user/pages/contact',$data);
		}
	}	
?>