<?php

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

function custom_dashboard_widgets(){
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	add_meta_box( 'custom_help_widget', 'Theme Support', 'custom_dashboard_help', 'dashboard', 'side', 'high' );
}
add_action('wp_dashboard_setup', 'custom_dashboard_widgets');


register_nav_menus(array(
	'primary' => __('Primary Menu', 'reversemortgage'),
	'social' => __('Social Links', 'reversemortgage')
));

add_theme_support('post-thumbnails');

function custom_search_url_rewrite() {
	if(is_search() && ! empty( $_GET['s'])) {
		wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
		exit();
	}
}
add_action('template_redirect', 'custom_search_url_rewrite');


function unregister_default_widgets() {
	 unregister_widget('WP_Widget_Pages');
	 unregister_widget('WP_Widget_Calendar');
	 unregister_widget('WP_Widget_Archives');
	 unregister_widget('WP_Widget_Links');
	 unregister_widget('WP_Widget_Meta');
	 unregister_widget('WP_Widget_Search');
	 unregister_widget('WP_Widget_Categories');
	 unregister_widget('WP_Widget_Recent_Posts');
	 unregister_widget('WP_Widget_Recent_Comments');
	 unregister_widget('WP_Widget_RSS');
	 unregister_widget('WP_Widget_Tag_Cloud');
	 //unregister_widget('WP_Nav_Menu_Widget');
	 //unregister_widget('Twenty_Eleven_Ephemera_Widget');
}
 add_action('widgets_init', 'unregister_default_widgets', 11);

$inc = scandir(dirname(__FILE__).'/functions');
foreach($inc as $k=>$v){
	if($k>1 && is_file(dirname(__FILE__) . '/functions/'.$v)) include(dirname(__FILE__).'/functions/'.$v);
}

?>