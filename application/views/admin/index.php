<html>
	<head>
		<?php $this->load->view('admin/pages/head')?>
	</head>
	<body>
		<?php $this->load->view('admin/pages/top')?>
			<div class="container-fluid">    
  				<div class="row">
					<?php $this->load->view('admin/pages/menu')?>
					<?php $this->load->view($temp)?>
				</div>
			</div>
		<?php $this->load->view('admin/pages/footer')?>
	</body>
	
</html>