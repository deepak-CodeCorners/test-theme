<?php 
$hbs_htext=get_field('hbs_htext');
$hbs_ptext=get_field('hbs_ptext');
$hbs_images=get_field('hbs_images');

?>
<section id="blog" class="">
		<!-- =============== Blog container =============== -->
        <div class="container">            
            <div class="row">
				<div class="title">
				<h2><?php echo $hbs_htext; ?></h2>
				<p><?php echo $hbs_ptext; ?></p>
				</div>
                <?php foreach($hbs_images as $key=>$hbs_image):?>
                 <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp animated" data-wow-delay="<?php echo $key==0 ? 'action':'';?>">
                      <div class="blog-img">
						<img src="<?php echo $hbs_image['image']; ?>"/>
					  </div>
					  <div class="row">
					  <div class="data"><?php echo $hbs_image['date'];?></div>
					  <div class="month"><?php echo $hbs_image['month'];?> </div>
					  </div>
					  <div class="row">
					  <h3><?php echo $hbs_image['inner_head']; ?></h3>
					  <p><?php echo $hbs_image['inner_para']; ?></p>
					  <a href="<?php echo $hbs_image['hbs_button']['url']; ?>">MORE</a>
					  </div>
                  </div>
                  <?php endforeach;?>        
				
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>