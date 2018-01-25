				<div class="col-md-10">
					<br>			
					<div class="container">
						<div class="col-md-5 add-dm">
							<h4>Add Category <font color='red'><?php echo $this->session->flashdata('mess')?></font></h4>
						</div>
						<br>
						<div class="clearfix"></div>
						<br>
						<form method="post">
							<div class="form-group">
							    <label>Name</label>
							    <input name="ten_dm" class="form-control" type="text" value="<?php set_value('ten_dm')?>">						
							</div>
							<div class="form-group">
								 <input name="ok" value="SAVE" class="btn btn-success btn-block" type="submit">
							</div>
						</form>
					</div><!--end .content-->
				</div>
