<?php  
$has_text=get_field('has_text');
$has_image=get_field('has_image');
$has_team_text=get_field('has_team_text');
$has_teams=get_field('has_teams');

?>
<!-- =============== About =============== -->
<section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInDown animated" data-wow-delay=".5s">
                   <h2>About Us</h2>
				   <?php echo $has_text; ?>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight animated" data-wow-delay=".5s">
                    <?php if(!empty($has_image)): ?>
                     <img src="<?php echo $has_image;?>"/>
                    <?php endif;?>               
                  </div>     
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>
	<section id="team" class="">
		<!-- =============== container =============== -->
        <div class="container">            
            <div class="row">
				<div class="title">
				<?php echo $has_team_text; ?>
				</div>
                <?php foreach($has_teams as $key=>$has_team):?>

                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInDown animated" data-wow-delay="<?php echo $key== 0 ? 'action':'';?>">
                   <div class="timg"><img src="<?php echo $has_team['team_image'];?>"></div>
				    <div class="t-box">
				   <h3><?php echo $has_team['team_name']; ?></h3>
				   <span><?php echo $has_team['team_role'];?></span>
                   
				   <ul class="social-links">  
						<li><a class="wow fadeInUp animated" href="<?php echo $has_team['fb_button']['url']; ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="<?php echo $has_team['tw_button']['url']; ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="<?php echo $has_team['g_button']['url']; ?>"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				   </div>
                  </div>
                  <?php endforeach; ?>
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>