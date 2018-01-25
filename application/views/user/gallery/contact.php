		
	<section class="listings">
		<div class="wrapper" style="margin-bottom:50px; ">
			<?php foreach($list as $baiviet){?>
				<h1><?php echo $baiviet->title;?></h1>
				<div style="float: left">
					<p><?php echo $baiviet->content;?></p>
				</div>
				<div style="float:right">
					<?php echo $baiviet->map;?>
				</div>
			<?php }?>
		</div>
	</section>	<!--  end listing section  -->
				