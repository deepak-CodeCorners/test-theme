<?php  
$hgs_text = get_field('hgs_text');
$hgs_texts = get_field('hgs_texts');
$hgs_gallerys = get_field('hgs_gallerys');
// print_r($hgs_gallerys);

?>
<!-- =============== Gallery =============== -->
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
	<div class="title">
		<h2><?php echo $hgs_text;?></h2>				
		<p><?php echo $hgs_texts;?></p>
	</div>
			
	<div class="big-demo go-wide" data-js-module="filtering-demo">
	<div class="container">            
            <div class="row">
  <div class="filter-button-group button-group js-radio-button-group">
  <?php foreach($hgs_gallerys as $keys=>$hgs_gallery):?>
    <button class="button <?php echo $keys==0 ? 'is-checked':'';?>" data-filter="<?php echo $hgs_gallery['btn_filter'];?>"><?php echo $hgs_gallery['btn_text'];?></button>
  <?php endforeach;?>
  </div>
</div>
</div>


<div class="grid baguetteBoxThree gallery">
	<?php
	// echo "<pre>";
	// print_r($hgs_gallerys);
	// echo "</pre>";
	?>
	<?php foreach($hgs_gallerys as $keys=>$hgs_gallery):?>
      <div class="element-item <?php echo $hgs_gallery['hgs_class'];?> " data-category="post-transition">

	  <a href="<?php echo $hgs_gallery['image_button']['url']; ?>"> 
	  <img src="<?php echo $hgs_gallery['g_image'];?>"/>

	  <?php //print_r($hgs_gallery);?>      
		<div class="hover-img"> 
		<h2><?php echo $hgs_gallery['image_text']; ?></h2>
		<i class="fa fa-camera camera"></i>
		</div>
	  </a>
      </div>
	  <?php endforeach; ?>      
  </div>
</div>
</section>
<!-- end gallery -->