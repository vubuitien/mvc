			
	<section class="listings">
		<div class="wrapper">
								<h1>PRODUCT</h1>
				<div style="float: left">

					<ul class="properties_list">
				<?php foreach($sobaitren1trang->result() as $baiviet){?>
					<li>
						<a>
							<img style="width: 440px; height:330px;" src="<?php echo base_url("uploads/posts/".$baiviet->img) ?>">
						</a>
						<span class="price"><?php echo $baiviet->tien;?> VND/Kg</span>
						<div class="property_details">
							<h1>
								<a href="#"><?php echo $baiviet->tieu_de;?></a>
							</h1>
							<h2><?php echo $baiviet->noi_dung;?></h2>
						</div>
					</li>
					<?php }?>
				</ul>
				</div>
			
		</div>
	</section>	<!--  end listing section  -->
				