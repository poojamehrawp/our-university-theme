<?php 
function university_files(){
    wp_enqueue_script('Bootstrap_js','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('Bootstrap_js','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js');
    wp_enqueue_style('google_fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('bootstrap_css','//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('Bootstrap_js','//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
  
    wp_enqueue_style('university_main_style',get_stylesheet_uri());
  
}



add_action('wp_enqueue_scripts','university_files');   


function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');
?>