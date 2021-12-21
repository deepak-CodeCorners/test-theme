<?php  
$hss_carousels=get_field('hss_carousels');
//print_r($hss_carousels);
?>

<header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				

				<div id="owl-demo" class="owl-carousel header1">
                    <?php //print_r($hss_carousels); ?>
                <?php foreach( $hss_carousels as $key=>$hss_carousel):?>
				  <div>
				  <div class="col-xs-12 col-sm-6 col-md-6 header-text">
                
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s"><?php echo $hss_carousel['hss_head'];?></h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s"><?php echo $hss_carousel['hss_text']; ?></h3>
                    <p class="wow bounceIn animated" data-wow-delay=".60s"><?php echo $hss_carousel['hss_para'];?></p>
                    <p>
                        <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span><?php echo $hss_carousel['hss_btn_text'];?></span></i>
                        </div>
                    </p>
                    
					</div>               
				</div>
                <?php endforeach;?>
				</div>				 
				</div>       
        </div>
		<!-- =============== container end =============== -->
    </header>