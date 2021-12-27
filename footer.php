<?php 
$hfs_links=get_field('hfs_links');
//print_r($hfs_links);
$hfs_copytxt=get_field('hfs_copytxt');
$hfs_button=get_field('hfs_button');
//print_r($hfs_button);
$btn_txt=get_field('btn_txt');
$hfs_address1=get_field('hfs_address1');
$hfs_address2=get_field('hfs_address2');
$hfs_phone=get_field('hfs_phone');
$hfs_email=get_field('hfs_email');
$hfs_email_link=get_field('hfs_email_link');
$email_text=get_field('email_text');
$link=get_field('link');
$link_txt=get_field('link_txt');
?>

<!-- Footer -->
    <footer id="footer">
	<!-- =============== container =============== -->
    <div class="container">
			    <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">

					<ul class="social-links">
                    <?php foreach($hfs_links as $key=>$hfs_link): ?>
						<li><a data-wow-delay="<?php echo $key == 0 ? 'active':'';?>" class="wow fadeInUp animated" href="<?php echo $hfs_link['hfs_button']['url'];?>" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-<?php echo $hfs_link['hfs_class'];?>"></i></a></li>

                        <?php endforeach;?>
					</ul>

                    <p class="copyright">
                    <?php echo $hfs_copytxt;?><a href="<?php echo $hfs_button['url']; ?>"><?php echo $btn_txt; ?></a>
					</p>

				</div>
				<div data-wow-delay=".6s" class="col-xs-12 col-sm-6 col-md-6 wow bounceIn  animated" style="visibility: visible; animation-delay: 0.6s; animation-name: bounceIn;">

					  <section class="widget widget_text" id="text-15">
                         <h3 class="widget-title"><?php echo $hfs_address1; ?></h3> <div class="textwidget"><?php echo $hfs_address2;?><br>
                        <p><?php echo $hfs_phone;?><br>
                        <?php echo $hfs_email; ?><a href="<?php echo $hfs_email_link['url'];?>"><?php echo $email_text;?></a></p>
                        <a href="<?php echo $link['url']; ?>"><?php echo $link_txt; ?></a> →</div>
                    </section>

				</div>
			</div>
    </div><!-- =============== container end =============== -->
	</footer>    
<script>
    
    jQuery(document).ready(function($) {
  
	var nice = $("html").niceScroll();  // The document page (body)
	
	$("#div1").html($("#div1").html()+' '+nice.version);
    
    $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

    $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
    $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)
	
    $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper
    
  });
</script>
<script>
window.onload = function() {
    if(typeof oldIE === 'undefined' && Object.keys)
        hljs.initHighlighting();

    baguetteBox.run('.baguetteBoxOne');
    baguetteBox.run('.baguetteBoxTwo');
    baguetteBox.run('.baguetteBoxThree', {
        animation: 'fadeIn'
    });
    baguetteBox.run('.baguetteBoxFour', {
        buttons: false
    });
    baguetteBox.run('.baguetteBoxFive', {
        captions: function(element) {
            return element.getElementsByTagName('img')[0].alt;
        }
    });
};
</script>

<?php wp_footer(); ?>

</body>
</html>