<?php 
	class About extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('about_model');
		}
		function index()
		{
			$input = array();
			$data['list'] = $this->about_model->get_list($input);
			$data['temp'] = 'admin/menu/index' ;
			$this->load->view('user/pages/about',$data);
		}
	}	
?>