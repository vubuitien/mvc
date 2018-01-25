<?php 
	class Category extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('category_model');
		}
		function insert()
		{
			$data = array();
			$data['temp'] = 'admin/category/insert-cate';
			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('ten_dm',"Tên danh mục",'required');	
	
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('ten_dm');
					$dulieu = array(
						'ten_dm'=>$tendm
						);
					$this->category_model->create($dulieu);
					$this->session->set_flashdata('mess','thành công');
					redirect(admin_url('category/index'));
					}		
				}
				$this->load->view('admin/index',$data);
		}	
		function index()
		{
			$input = array();
			$data['list'] = $this->category_model->get_list($input);
			$data['temp'] = 'admin/category/index' ;
			$this->load->view('admin/index',$data);
		}
		function edit()
		{
			$id = $this->uri->segment(4);
			$id = intval($id);
			$info = $this->category_model->get_info($id);
			$data = array();
			$data['info'] = $info;
		
			if($this->input->post())
			{
				$this->form_validation->set_rules('title',"Tên danh mục",'required');		
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					$tendm = $this->input->post('title');

					$dulieu = array(
						'ten_dm'=>$tendm
						);
					$this->category_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Đã sửa thành công');
					$info->ten_dm = $tendm;
					redirect(admin_url('category/index'));

				}		
			}
				$data['temp'] = 'admin/category/update-cate';
				$this->load->view('admin/index',$data);

		}

		function delete()
		{
			$id = $this->uri->segment(4);
			$this->category_model->delete($id);
			$this->session->set_flashdata('mess','Đã xóa thành công');
			redirect(admin_url('category/index'));
		}

	}	
?>