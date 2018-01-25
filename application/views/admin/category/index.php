				<div class="col-md-10">				
					<div class="container">
						<h1 align="center">CATEGORY</h1>
						<a class="btn btn-success" href="<?php echo admin_url('category/insert')?>">INSERT</a>
						<br><br>
						<div class="table-responsive">
		      				<table class="table table-bordered">
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($list as $dm) { ?>
									<tr>
										<td><?php echo $dm->id ?></td>
										<td><?php echo $dm->ten_dm ?></td>
										<td><a class="btn btn-warning"  href="<?php echo admin_url('category/edit/'.$dm->id);?>">EDIT</a></td>
										<td><a  class="btn btn-danger" href="<?php echo admin_url('category/delete/'.$dm->id);?>">DELETE</a></td>
									</tr>
									<?php } ?>
							</table>							
						</div><!--end .content-->
					</div>
				</div>