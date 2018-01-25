<?php 
	class User extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('user_model');
		}
		function registration()
		{
			$data = array();
			$data['temp'] = 'admin/user/insert-user';

			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('username',"Tai khoan",'required');	
				$this->form_validation->set_rules('password',"Mat khau",'required');	
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					if(!empty($_FILES['avata']['name'])){
		                $config['upload_path'] = './uploads/user';
		                $config['allowed_types'] = 'gif|jpg|png|jpeg';
		                $config['max_size']     = '2048';
		                $config['max_width'] = '1024';
		                $config['max_height'] = '768';
		                $config['file_name'] = $_FILES['avata']['name'];
		                $this->load->library('upload', $config);
		                $this->upload->initialize($config);
		                if($this->upload->do_upload('avata')){
		                    $uploadData = $this->upload->data();
		                    $image = $uploadData['file_name'];
		                }else{
		                    $image = '';
		                }
		            }else{
		                $image = '';
		            }
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$img = $image;

					$dulieu = array(
						'username'=>$username, 'password'=>$password, 'avata'=>$img
						);
					$this->user_model->create($dulieu);
					redirect(admin_url('user/index'));
					}		
				}
				$this->load->view('admin/index',$data);
		}
		function index()
		{
			$input = array();
			$data['list'] = $this->user_model->get_list($input);
			$data['temp'] = 'admin/user/index' ;
			$this->load->view('admin/index',$data);
		}
		function delete()
		{
			$id = $this->uri->segment(4);
			$this->user_model->delete($id);
			$this->session->set_flashdata('mess','Đã xóa thành công');
			redirect(admin_url('user/index'));
		}
		function edit()
		{
			$id = $this->uri->segment(4);
			$id = intval($id);
			$info = $this->user_model->get_info($id);
			$data = array();
			$data['info'] = $info;
		
			if($this->input->post())
			{
				$this->form_validation->set_rules('username',"Tiêu đề bài viết",'required');			
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					if(!empty($_FILES['avata']['name'])){
		                $config['upload_path'] = './uploads/user';
		                $config['allowed_types'] = 'gif|jpg|png|jpeg';
		                $config['max_size']     = '2048';
		                $config['max_width'] = '1024';
		                $config['max_height'] = '768';
		                $config['file_name'] = $_FILES['avata']['name'];
		                $this->load->library('upload', $config);
		                $this->upload->initialize($config);
		                if($this->upload->do_upload('avata')){
		                    $uploadData = $this->upload->data();
		                    $image = $uploadData['file_name'];
		                }else{
		                    $image = '';
		                }
		            }else{
		                $image = '';
		            }
		            
					$username = $this->input->post('username');
					$img = $image;

					$dulieu = array(
						'username'=>$username, 'avata'=>$img
						);
					$this->user_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Đã sửa thành công');
					redirect(admin_url('user/index'));
					$username = $info->username;
					$img = $info->img;
				}		
			}
				$data['temp'] = 'admin/user/update-user';
				$this->load->view('admin/index',$data);

		}
	}
?>