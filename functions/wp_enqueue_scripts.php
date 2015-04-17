<?php

add_action('wp_enqueue_scripts', 'enqueue');
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', NULL, '3.3.4');
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');
//enqueue scripts
	wp_enqueue_script(array('jquery','bootstrap','fancybox2'));

	//styles
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', NULL, '3.3.4');
	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');
	//Google Fonts
	wp_register_style('lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700');
	wp_register_style('crimson', 'http://fonts.googleapis.com/css?family=Crimson+Text:600');
//enqueue styles
	wp_enqueue_style(array('bootstrap','fancybox2','lato','crimson'));
	wp_enqueue_style('styles', get_stylesheet_uri());

}


?>