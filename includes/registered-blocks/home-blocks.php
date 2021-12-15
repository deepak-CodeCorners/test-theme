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
    'render_template'=>'includes/blocks/home/home-services-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-services-section','quote'),
));  

acf_register_block_type(array(
    'name'        =>'Home Box Section',
    'title'        =>__('Home Box Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/home/home-box-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-box-section','quote'),
));

acf_register_block_type(array(
    'name'        =>'Home Counter Section',
    'title'        =>__('Home Counter Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/home/home-counter-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-counter-section','quote'),
));

acf_register_block_type(array(
    'name'          =>'Home Gallery Section',
    'title'         =>__('Home Gallery Section'),
    'description'   =>__(''),
    'render_template'=>'includes/blocks/home/home-gallery-section.php',
    'category'      =>'home-blocks',
    'icon'          =>'admin-comments',
    'keywords'      =>array('home-gallery-section', 'quote'),
));

?>