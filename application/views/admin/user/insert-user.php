				<div class="col-md-10">
					<br>			
					<div class="container">
						<div class="col-md-5 add-dm">
							<h4>Registration<font color='red'><?php echo $this->session->flashdata('mess')?></font></h4>
						</div>
						<br>
						<div class="clearfix"></div>
						<br>
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
							    <label>Username</label>
							    <input type="text" name="username" class="form-control">
							    <span><?php echo form_error('username');?></span>					
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control">	
								<span><?php echo form_error('password');?></span>
							</div>
							<div class="form-group">
								<label>Avata</label>
								<input type="file" name="avata" class="form-control">
								<span><?php echo form_error('avata');?>
							</div>
							<div class="form-group">
								 <input name="ok" value="SAVE" class="btn btn-success btn-block" type="submit">
							</div>
						</form>
					</div><!--end .content-->
				</div>
