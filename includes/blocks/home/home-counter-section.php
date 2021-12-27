<?php 
$hcs_text=get_field('hcs_text');
$hcs_texts=get_field('hcs_texts');

?>
<!-- =============== Counter =============== -->
    <section class="counter">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
			<div class="title">
				<h2><?php echo $hcs_text;?></h2>				
				</div>
                <?php //print_r($hcs_texts); ?>

            <?php foreach($hcs_texts as $key=>$hcs_data): ?>
			 <div class="col-xs-12 col-sm-2 col-md-2 wow fadeInUp animated" data-wow-delay="<?php echo $key == 0 ? 'action':''; ?>">
                            <i class="fa fa-<?php echo $hcs_data['class_icons'] ?> size"></i>
							<h2><?php echo $hcs_data['hcs_hour'];?></h2>
							<span><?php echo $hcs_data['hcs_day'];?></span>
                  </div>
            <?php endforeach; ?>    
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>