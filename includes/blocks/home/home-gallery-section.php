<?php 
$hgs_head=get_field('hgs_head');
$hgs_para=get_field('hgs_para');
$hgs_buttons=get_field('hgs_buttons');
?>
<!-- =============== Gallery =============== -->
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
	<div class="title">
		<h2><?php echo $hgs_head; ?></h2>				
		<p><?php echo $hgs_para; ?></p>
	</div>
			
	<div class="big-demo go-wide" data-js-module="filtering-demo">
		<div class="container">            
			<div class="row">
				<div class="filter-button-group button-group js-radio-button-group">
				<button class="button is-checked" data-filter="*">show all</button>
				
				<?php foreach($hgs_buttons as $key => $hgs_button):?>
					<button class="button <?php echo $key == 'is-checked' ? 'active':'';?>" data-filter="<?php echo $hgs_button['filter_class'] ?>"><?php echo $hgs_button['btn_text']; ?></button>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


  <div class="grid baguetteBoxThree gallery">
  <?php foreach($hgs_buttons as $key => $hgs_btn):?>
	
	<?php foreach($hgs_btn['hgs_image']['gallery'] as $key => $images):?>
		<div class="element-item transition <?php echo $hgs_btn['hgs_image']['gallery_class']; ?>" data-category="post-transition">
		<a href="<?php echo $images; ?>">	 
		<img src="<?php echo $images; ?>"/>      
			<div class="hover-img"> 
			<h2><?php echo $hgs_btn['gallery_htext']; ?></h2>
			<i class="fa fa-camera camera"></i>
			</div>
		</a>
		</div>  
	  <?php endforeach; ?>  
	<?php endforeach; ?>
  </div>

 
</div>


</section>
