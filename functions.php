<?php 
function be_theme_scripts(){
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'','all');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/font/css/font-awesome.min.css',array(),'','all');
    wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.min.css',array(),'','all');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'','all');
    wp_enqueue_style('owl.carousel',get_template_directory_uri().'/assets/owl-carousel/owl.carousel.css',array(),'','all');
    wp_enqueue_style('owl.theme',get_template_directory_uri().'/assets/owl-carousel/owl.theme.css',array(),'','all');
    wp_enqueue_style('isotope',get_template_directory_uri().'/assets/css/isotope-docs.css',array(),'','all');
    wp_enqueue_style('baguetteBox',get_template_directory_uri().'/assets/css/baguetteBox.css',array(),'','all');

    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.js',array(),'1.0.0',true);
    wp_enqueue_script('isotope',get_template_directory_uri().'/assets/js/isotope-docs.min.js',array(),'1.0.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.0.0',true);
    wp_enqueue_script('easing',get_template_directory_uri().'/assets/js/jquery.easing.min.js',array(),'1.0.0',true);
    wp_enqueue_script('fittext',get_template_directory_uri().'/assets/js/jquery.fittext.js',array(),'1.0.0',true);
    wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js',array(),'1.0.0',true);
    wp_enqueue_script('owl.carousel',get_template_directory_uri().'/assets/owl-carousel/owl.carousel.js',array(),'1.0.0',true);
    wp_enqueue_script('baguetteBox',get_template_directory_uri().'/assets/js/baguetteBox.js',array(),'1.0.0',true);
    wp_enqueue_script('plugins',get_template_directory_uri().'/assets/js/plugins.js',array(),'1.0.0',true);
    wp_enqueue_script('creative',get_template_directory_uri().'/assets/js/creative.js',array(),'1.0.0',true);
    wp_enqueue_script('nicescroll',get_template_directory_uri().'/assets/js/jquery.nicescroll.min.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','be_theme_scripts');

function custom_new_menu(){
    register_nav_menus(
        array(
            'Primary-Menu'=>'My Custome Menu',
        )
    );
}
add_action('init','custom_new_menu');

function custom_blocks($categories,$post){
    return array_merge(
        $categories,
        array(
            array(
                'slug'=>'home-blocks',
                'title'=>__('Home Blocks','home-blocks'),
            ),
            array(
                'slug'=>'inner-page-blocks',
                'title'=>__('Inner Page Blocks','inner-pages-blocks'),
            ),
        )
    );  
}
add_filter('block_categories','custom_blocks',10,2);

function register_acf_block_types(){
include('includes/registered-blocks/home-blocks.php');
include('includes/registered-blocks/inner-page-blocks.php');
}
if(function_exists('acf_register_block_type')){
add_action('acf/init','register_acf_block_types');
}

//Theme options with ACF Plugin
//header and footer same for all menus customize with theme option:
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page();
        acf_add_options_sub_page('Header');
        acf_add_options_sub_page('Footer');
    
        acf_add_options_page(array(
            'page_title'    => 'Theme Options',
            'menu_title'    => 'Theme Options',
            'menu_slug'     => 'theme-options',
            'capability'    => 'edit_posts',
            'redirect'      => true
        ));
    
        acf_add_options_sub_page(array(
            'page_title'    => 'Header Settings',
            'menu_title'    => 'Header Setting',
            'parent_slug'   => 'theme-options',
        ));
    
        acf_add_options_sub_page(array(
            'page_title'    => 'Footer Settings',
            'menu_title'    => 'Footer Settings',
            'parent_slug'   => 'theme-options',
        ));

        acf_add_options_sub_page(array(
            'page_title'    => 'Page Settings',
            'menu_title'    => 'Page Settings',
            'parent_slug'   => 'edit.php',
        ));

    }

    //nav link adding class:
    add_filter('wp_nav_menu', 'add_classes_on_a');
    function add_classes_on_a($ulclass) {
        return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
    }
?>


