<?php 

$ia_head=get_field('ia_head');
$ia_para1=get_field('ia_para1');
$ia_para2=get_field('ia_para2');
$ia_image=get_field('ia_image');

?>
<!-- =============== About =============== -->
<section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
                   <h2><?php echo $ia_head;?></h2>
				   <p><?php echo $ia_para1;?></p>
				   <p><?php echo $ia_para2;?></p>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                    <?php if(!empty($ia_image)):?>
                     <img src="<?php echo $ia_image;?>"/> 
                     <?php endif;?>              
                  </div>     
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>
    <?php 
    ?>