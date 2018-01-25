<div class="col-md-10">				
					<div class="container">
						<br>
						<div class="col-md-4 add-dm">
							<h4 class="text-center">Edit Category<font color='red'><?php echo $this->session->flashdata('mess')?></font></h4>
						</div>
						<div class="clearfix"></div>
						<br>

						<form method="post">
							<div class="form-group">
							    <label>Name</label>
							    <input name="title" class="form-control" type="text" value="<?php echo $info->ten_dm?>">						
							</div>
							<div class="form-group">
								 <input name="ok" value="SAVE" class="btn btn-success btn-block" type="submit">
							</div>
						</form>
					</div><!--end .content-->
				</div>