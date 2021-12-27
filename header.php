<?php 
$hss_carousels = get_field('hss_carousels');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Be Free HTML5 Responsive Template | Template Stock</title>
	<?php wp_head(); ?>
</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
		<img width="256" height="32" src="<?php echo get_template_directory_uri();?>/assets/img/loading-cylon-red.svg">	
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu'=>'my-custom-menu',
                            'container'=>'div',
                            'menu_class'=>'nav navbar-nav navbar-right',
                        )
                    );
                ?>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header id="home" class="header">
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
				
				<div id="owl-demo" class="owl-carousel header1">
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