<?php 
	class Administrators extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{		
			$this->data['temp'] = 'admin/administrators';			
			$this->load->view('admin/index',$this->data);
		}

	}
?>