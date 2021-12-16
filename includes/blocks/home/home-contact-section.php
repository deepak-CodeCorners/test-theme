<?php 
$hcs_head=get_field('hcs_head');
$hcs_para=get_field('hcs_para');

?>

<section id="contact">
	<!-- =============== container =============== -->
		<div class="container">
			    <div class="row">
                <div class="title">
				<h2><?php echo $hcs_head; ?></h2>
				<p><?php echo $hcs_para; ?></p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">
                <?php 
                    echo do_shortcode('[contact-form-7 id="180" title="Contact Form Be"]');
                ?>
                <div class="ajax-response"></div>
				</div>              
			</div>
		</div><!-- =============== container end =============== -->
	</section>