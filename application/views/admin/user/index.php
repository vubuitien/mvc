				<div class="col-md-10">				
					<div class="container">
						<h1 align="center">USER</h1>
						<a class="btn btn-success" href="<?php echo admin_url('user/registration')?>">Registration</a>
						<br><br>
						<div class="table-responsive">
		      				<table class="table table-bordered">
									<tr>
										<th>ID</th>
										<th>Username</th>
										<th>Avata</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
									<?php foreach($list as $user) { ?>
									<tr>
										<td><?php echo $user->id ?></td>
										<td><?php echo $user->username ?></td>
										<td><img width="100" height="100" src="<?php echo base_url("uploads/user/".$user->avata) ?>"></td>
										<td><a class="btn btn-warning"  href="<?php echo admin_url('user/edit/'.$user->id);?>">EDIT</a></td>
										<td><a  class="btn btn-danger" href="<?php echo admin_url('user/delete/'.$user->id);?>">DELETE</a></td>
									</tr>
									<?php } ?>
							</table>							
						</div><!--end .content-->
					</div>
				</div>