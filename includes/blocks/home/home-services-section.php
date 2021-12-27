<?php 
$hss_image=get_field('hss_image');
$hss_htext=get_field('hss_htext');
$hss_ptext=get_field('hss_ptext');
?>
<!-- =============== Services =============== -->
<section id="Services" class="">
    <div class="container">            
        <div class="row">
			      <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated"         data-wow-delay=".5s">
            <?php if(!empty($hss_image)){?>
            <img src="<?php echo $hss_image; ?>" class="img-left"/>  
            <?php }?>
            </div>     
            <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
            <h2><?php echo $hss_htext;?></h2>
				    <?php echo $hss_ptext; ?>
            </div>
        </div>
    </div>   
		<!-- =============== container end =============== -->		
</section>	