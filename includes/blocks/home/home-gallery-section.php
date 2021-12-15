<?php  
$hgs_text = get_field('hgs_text');
$hgs_texts = get_field('hgs_texts');
$hgs_all = get_field('hgs_all');
$hgs_buttons = get_field('hgs_buttons');

?>
<!-- =============== Gallery =============== -->
<section id="Gallery" class="wow flipInX animated" data-wow-delay=".5s">
	<div class="title">
				<h2><?php echo $hgs_text;?></h2>				
				<p><?php echo $hgs_texts;?></p>
				</div>
			
	<div class="big-demo go-wide" data-js-module="filtering-demo">
	<div class="container">            
            <div class="row">
  <div class="filter-button-group button-group js-radio-button-group">
    <button class="button is-checked" data-filter="*">show all</button>
    <button class="button" data-filter=".webdesign">Web design</button>
    <button class="button" data-filter=".ecommerce">E-commerce</button>  
	 <button class="button" data-filter=".cms">Cms</button>  
	<button class="button" data-filter=".logo">Logo</button>  
  </div>
</div>
</div>


  <div class="grid baguetteBoxThree gallery">
	  <?php foreach($hgs_buttons as $key=>$hgs_button):?>
      <div class="element-item <?php echo $hgs_button['hgs_class'];?> " data-category="post-transition">
	  <a href="assets/img/gallery/emp-2.jpg">	 
        	<img src="<?php echo $hgs_button['hgs_button1'];?>"/>     
		<div class="hover-img"> 
		<h2><?php echo $hgs_button['image_text']; ?></h2>
		<i class="fa fa-camera camera"></i>
		</div>
	  </a>
      </div>
	  <?php endforeach; ?>      
      <!-- <div class="element-item post-transition ecommerce " data-category="post-transition">
	  <a href="assets/img/gallery/emp-2.jpg">	 
        <img src="assets/img/gallery/emp-2.jpg"/>    
		<div class="hover-img"> 
		<h2>E-commerce</h2>
		<i class="fa fa-camera camera"></i>
		</div>		
	  </a>
      </div>
      <div class="element-item post-transition webdesign " data-category="post-transition">
	  <a href="assets/img/gallery/emp-3.jpg">	 
		<img src="assets/img/gallery/emp-3.jpg"/>       
		<div class="hover-img"> 
		<h2>Website Design</h2>
		<i class="fa fa-camera camera"></i>
		</div>		
		</a>
      </div>
	 <div class="element-item transition ecommerce " data-category="post-transition">
	   <a href="assets/img/gallery/emp-4.jpg">	 
	    <img src="assets/img/gallery/emp-4.jpg"/>       
		<div class="hover-img"> 
		<h2>E-commerce</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>		
      </div>      
      <div class="element-item post-transition logo " data-category="post-transition">
         <a href="assets/img/gallery/emp-5.jpg">	 
	    <img src="assets/img/gallery/emp-5.jpg"/>       
		<div class="hover-img"> 
		<h2>Logo</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
      <div class="element-item post-transition cms " data-category="post-transition">
		 <a href="assets/img/gallery/emp-6.jpg">	 
	    <img src="assets/img/gallery/emp-6.jpg"/>       
		<div class="hover-img"> 
		<h2>CMS</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item post-transition logo " data-category="post-transition">
         <a href="assets/img/gallery/emp-7.jpg">	 
	    <img src="assets/img/gallery/emp-7.jpg"/>       
		<div class="hover-img"> 
		<h2>Logo</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item transition cms " data-category="post-transition">
	   <a href="assets/img/gallery/emp-8.jpg">	 
	    <img src="assets/img/gallery/emp-8.jpg"/>       
		<div class="hover-img"> 
		<h2>CMS</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>      
      <div class="element-item post-transition ecommerce " data-category="post-transition">
         <a href="assets/img/gallery/emp-9.jpg">	 
	    <img src="assets/img/gallery/emp-9.jpg"/>       
		<div class="hover-img"> 
		<h2>E-commerce</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
      <div class="element-item post-transition webdesign " data-category="post-transition">
		 <a href="assets/img/gallery/emp-10.jpg">	 
	    <img src="assets/img/gallery/emp-10.jpg"/>       
		<div class="hover-img"> 
		<h2>Web Design</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>          
      </div>
	  <div class="element-item post-transition logo " data-category="post-transition">
         <a href="assets/img/gallery/emp-11.jpg">	 
	    <img src="assets/img/gallery/emp-11.jpg"/>       
		<div class="hover-img"> 
		<h2>Logo</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>
	  <div class="element-item transition cms " data-category="post-transition">
	   <a href="assets/img/gallery/emp-12.jpg">	 
	    <img src="assets/img/gallery/emp-12.jpg"/>       
		<div class="hover-img"> 
		<h2>CMS</h2>
		<i class="fa fa-camera camera"></i>
		</div>	
		</a>
      </div>       -->
  </div>
</div>
</section>
<!-- end gallery  -->