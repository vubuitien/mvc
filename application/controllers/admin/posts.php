<?php 
	class Posts extends MY_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('post_model');
		}
		function insert()
		{
			$this->load->model('category_model');
			$dmbv = $this->category_model->get_list();
			$data = array();
			$data['temp'] = 'admin/post/insert-post';
			$data['dmbv'] = $dmbv;
			// neu submit form mà co du lieu post len
			if($this->input->post())
			{
				$this->form_validation->set_rules('title',"Tiêu đề bài viết",'required');	
				$this->form_validation->set_rules('content',"Nội dung bài viết",'required');
				$this->form_validation->set_rules('cat',"Danh mục",'required');
				$this->form_validation->set_rules('price',"Giá tiền",'required');
				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					if(!empty($_FILES['img']['name'])){
		                $config['upload_path'] = './uploads/posts';
		                $config['allowed_types'] = 'gif|jpg|png|jpeg';
		                $config['max_size']     = '2048';
		                $config['max_width'] = '1024';
		                $config['max_height'] = '768';
		                $config['file_name'] = $_FILES['img']['name'];
		                $this->load->library('upload', $config);
		                $this->upload->initialize($config);
		                if($this->upload->do_upload('img')){
		                    $uploadData = $this->upload->data();
		                    $image = $uploadData['file_name'];
		                }else{
		                    $image = '';
		                }
		            }else{
		                $image = '';
		            }
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$price = $this->input->post('price');
					$img = $image;
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title, 'noi_dung'=>$content, 'tien'=>$price, 'img'=>$img, 'id_dm'=>$cat
						);
					$this->post_model->create($dulieu);
					redirect(admin_url('posts/index'));
					}		
				}
				$this->load->view('admin/index',$data);
		}
		function index()
		{
			$input = array();
			$data['list'] = $this->post_model->get_list($input);
			$data['temp'] = 'admin/post/index' ;
			$this->load->view('admin/index',$data);
		}
		function delete()
		{
			$id = $this->uri->segment(4);
			$this->post_model->delete($id);
			$this->session->set_flashdata('mess','Đã xóa thành công');
			redirect(admin_url('posts/index'));
		}
		function edit()
		{
			$id = $this->uri->segment(4);
			$id = intval($id);
			$info = $this->post_model->get_info($id);
			$this->load->model("category_model");
			$listdm = $this->category_model->get_list();
			$data = array();
			$data['info'] = $info;
			$data['listdm'] = $listdm;
		
			if($this->input->post())
			{
				$this->form_validation->set_rules('title',"Tiêu đề bài viết",'required');	
				$this->form_validation->set_rules('content',"Nội dung bài viết",'required');
				$this->form_validation->set_rules('price',"Giá tiền",'required');
				$this->form_validation->set_rules('cat',"Danh mục",'required');	

				//khi nhập liệu chính xác
				if($this->form_validation->run())
				{
					if(!empty($_FILES['img']['name'])){
		                $config['upload_path'] = './uploads/posts';
		                $config['allowed_types'] = 'gif|jpg|png|jpeg';
		                $config['max_size']     = '2048';
		                $config['max_width'] = '1024';
		                $config['max_height'] = '768';
		                $config['file_name'] = $_FILES['img']['name'];
		                $this->load->library('upload', $config);
		                $this->upload->initialize($config);
		                if($this->upload->do_upload('img')){
		                    $uploadData = $this->upload->data();
		                    $image = $uploadData['file_name'];
		                }else{
		                    $image = '';
		                }
		            }else{
		                $image = '';
		            }
		            
					$title = $this->input->post('title');
					$content = $this->input->post('content');
					$price = $this->input->post('price');
					$img = $image;
					$cat = $this->input->post('cat');

					$dulieu = array(
						'tieu_de'=>$title, 'noi_dung'=>$content, 'tien'=>$price, 'img'=>$img, 'id_dm'=>$cat
						);
					$this->post_model->update($id,$dulieu);
					$this->session->set_flashdata('mess','Đã sửa thành công');
					redirect(admin_url('posts/index'));
					$title = $info->tieu_de;
					$conetnt = $info->noi_dung;
					$img = $info->img;
					$price = $info->tien;
				}		
			}
				$data['temp'] = 'admin/post/update-post';
				$this->load->view('admin/index',$data);

		}
	}
?>