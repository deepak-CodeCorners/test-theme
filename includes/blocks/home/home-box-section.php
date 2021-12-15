<?php

$hbs_boxs=get_field('hbs_boxs');

?>
 <!-- =============== for box =============== -->		
	<section class="for-box">
	 <div class="container">
		<div class="row">
			<?php foreach($hbs_boxs as $key=>$hbs_box):?>
			<div class="col-xs-12 col-sm-6 col-md-3 wow rotateInDownLeft animated" data-wow-delay="<?php echo $key==0 ? 'action':'';?>">
			
				<div class="for-box-crecl">
					<i class="fa fa-<?php echo $hbs_box['icon_class']; ?>"></i>
				</div>
				<div class="clr<?php echo $key+1;?>">				
				<h2>
					<?php echo $hbs_box['hbs_text']; ?>
				</h2>
				</div>
				<div class="wbox">
					<?php echo $hbs_box['hbs_texts'];?>
					<a href="<?php echo $hbs_box['hbs_button']['url']; ?>" class="clr<?php echo $key+1;?>-a">+</a>
				</div>
				
			</div>
			<?php endforeach; ?>
			
		</div>
	 </div>
	</section>
	