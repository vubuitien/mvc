<?php 
	class Home extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			$this->load->model('post_model');
        	// lay du lieu tu bang pagination
	        $this->db->select('*');                  
	        $this->db->from('baiviet');
	        $this->db->order_by('id desc');     
	        // lay ra $limit row tu vi tri thu $offset 
	        $offset=$this->uri->segment(5);    
	        $query_poster = $this->db->get();   
			$input = array();
			$data['list'] = $this->post_model->get_list($input);
			$data['sobaitren1trang'] = $query_poster;
			$data['hello'] = $this->uri->segment(1);
			$data['temp'] = 'user/content' ;
			$this->load->view('user/index',$data);
		}
	}
?>