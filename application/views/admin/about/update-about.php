				<div class="col-md-10">				
					<div class="container">
						<br>
						<div class="col-md-4 add-dm">
							<h4 class="text-center">Edit About<font color='red'><?php echo $this->session->flashdata('mess')?></font></h4>
						</div>
						<div class="clearfix"></div>
						<br>

						<form method="post">
							<div class="form-group">
							    <label>Title</label>
							    <input name="title" class="form-control" type="text" value="<?php echo $info->title?>">						
							</div>
							<div class="form-group">
							    <label>Content</label>
							    <textarea name="content" class="form-control" id="" cols="30" rows="10"><?php echo $info->content?></textarea>				
							</div>
							<div class="form-group">
								 <input name="ok" value="SAVE" class="btn btn-success btn-block" type="submit">
							</div>
						</form>
					</div><!--end .content-->
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