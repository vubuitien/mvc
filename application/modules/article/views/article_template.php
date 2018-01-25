<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		#body{margin:10px auto; width: 800px; font-size: 90%; }
		form {width: 600px; margin: 40 auto;}
		form div{padding: 0 0 5px 0;}
		label {width: 120px; display: block; float: left; clear: left; font-weight: bold;}
		span.error p{width: auto; padding: 0 0 0 120px; font-style: italic; color: red; font-size: 90%;}
		span.success {color: green;}
		.form{ width: 150px;}
	</style>
	<meta charset="utf-8">
	<title>Thủ thuật Việt Nam | Hướng dẫn tích hợp CKEditor vào CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/ckeditors/ckeditor.js"></script>
</head>
<body>
	<div id="body">
		<h2>Hướng dẫn tích hợp CKEditor vào CodeIgniter</h2>
		<form action="" method="post" id="form">
			<fieldset>
				<legend>Hướng dẫn tích hợp CKEditor vào CodeIgniter</legend>
				<div>
					<span class="right"><textarea id="txt_content" name="txt_content"  style="width:100%; height:200px;"></textarea></span>
                 
				</div>
				<div><input type="submit" id="save" value="Save changes" /></div>
			</fieldset>
		</form>
	</div>
</body>
</html>
<script type="text/javascript">
	$(function() {				    				    
		if(CKEDITOR.instances['txt_content']) {						
			CKEDITOR.remove(CKEDITOR.instances['txt_content']);
		}
		CKEDITOR.config.width = 600;
	    CKEDITOR.config.height = 150;
		CKEDITOR.replace('txt_content',{});
	})
</script>