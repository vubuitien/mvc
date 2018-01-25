
				<div class="col-md-10">
					<br>
					<div class="container">
						<div class="col-md-4 add-dm">
							<h4 class="text-center">Add Product</h4>
						</div>
						<br><br><br>
						<form method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="title" class="form-control">
								<span><?php echo form_error('title');?></span>
							</div>
							<div class="form-group">
								<label>Describe</label>
								<textarea name="content" class="form-control" id="" cols="30" rows="10" value="<?php set_value('content')?>"></textarea>
								<span><?php echo form_error('content');?></span>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="text" name="price" class="form-control">
								<span><?php echo form_error('price');?></span>
							</div>
							<div class="form-group">
								<label>Image</label>
								<input type="file" name="img" class="form-control">
								<span><?php echo form_error('img');?>
							</div>
							<div class="form-group">
								<label>Category</label>
								<select name="cat" class="form-control">
							        <?php foreach($dmbv as $row){ ?>
										<option value="<?php echo $row->id ?>"><?php echo $row->ten_dm?></option>
										<?php }?>
									</select>
							</div>
							<div class="form-group">
								<input type="submit" name="n_insert" value="INSERT" class="btn btn-success">
							</div>
						</form>
					</div>

				</div>
<script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['content']) {						
			CKEDITOR.remove(CKEDITOR.instances['content']);
		}
		
	    CKEDITOR.config.height = 150;
		CKEDITOR.replace('content',{});
	})
</script>