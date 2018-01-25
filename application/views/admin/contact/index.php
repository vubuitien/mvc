				<div class="col-md-10">				
					<div class="container">
						<h1 align="center">CONTACT</h1>
						<a class="btn btn-success" href="<?php echo admin_url('contact/insert')?>">INSERT</a>
						<br><br>
						<div class="table-responsive">
		      				<table class="table table-bordered">
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Content</th>
										<th>Map</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($list as $dm) { ?>
									<tr>
										<td><?php echo $dm->id ?></td>
										<td><?php echo $dm->title ?></td>
										<td><?php echo $dm->content ?></td>
										<td><?php echo $dm->map ?></td>
										<td><a class="btn btn-warning"  href="<?php echo admin_url('contact/edit/'.$dm->id);?>">EDIT</a></td>
										<td><a  class="btn btn-danger" href="<?php echo admin_url('contact/delete/'.$dm->id);?>">DELETE</a></td>
									</tr>
									<?php } ?>
							</table>							
						</div><!--end .content-->
					</div>
				</div>