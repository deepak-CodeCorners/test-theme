<?php 

acf_register_block_type(array(
    'name'          =>'Home About Section',
    'title'         =>__('Home About Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/home/home-about-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-about-section','quote'),
));

acf_register_block_type(array(
    'name'          =>'Home Services Section',
    'title'         =>__('Home Services Section'),
    'description'   =>__(''),
    'renser_template'=>'includes/blocks/home/home-services-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-services-section','quote'),
));
?>