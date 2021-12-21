<?php 
$iss_image=get_field('iss_image');
$iss_head=get_field('iss_head');
$iss_para1=get_field('iss_para1');
$iss_para2=get_field('iss_para2');
?>

	<!-- =============== Services =============== -->
    <section id="Services" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
			 <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft animated" data-wow-delay=".5s">
                     <img src="<?php echo $iss_image; ?>" class="img-left"/>               
                  </div>     
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                   <h2><?php echo $iss_head;?></h2>
				   <p><?php echo $iss_para1; ?></p>
				   <p><?php echo $iss_para2;?></p>
                  </div>
                 
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>	