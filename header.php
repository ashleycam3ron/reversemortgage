<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!-->

<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="google-site-verification" content="x7blBH9ahP_we8nsFFNeMfSZS8Tq1ty8qEGQ2FjfKls" />
    <title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>
</head>
<body <?php body_class();?>>

	  <nav class="navbar navbar-fixed-top">
		  <div class="sm-header text-right">
			  <div class="container">
				  <span class="hidden-xs">Set up a personal appointment</span>
				  <a href="tel:1.800.REVERSE"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>1.800.REVERSE</a>
			  </div>
		  </div>
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="<?php echo esc_url( home_url() );?>" id="logo" title="<?php bloginfo('name');?>" href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name');?>"><h1 class="hidden"><?php bloginfo('name');?></h1></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse pull-right">
		        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    <div class="form-group has-feedback">
						<label for="search" class="sr-only">Search</label>
						<input type="text" class="form-control" name="search" id="search" placeholder="search">

				  		<span class="glyphicon glyphicon-search form-control-feedback"></span>
					</div>
				</form>

				<?php
					$args = array(
						'theme_location' => 'primary',
						'depth'		 => 3,
						'container'	 => 'nav',
						//'container_class'=>'navbar-collapse bs-navbar-collapse collapse',
						//'container_id'=>'primarynav',
						//'menu_class'	 => 'nav',
						'walker'	 => new BootstrapNavMenuWalker()
					);
					wp_nav_menu($args);
				?>
<!--
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form>
-->



			</div><!--/.navbar-collapse -->
	        <div class="clear"></div>
	    </nav>

    <a id="appt" class="fancybox" href="#schedule"></a>
    <div id="schedule" style="display: none;">
	    <?php echo do_shortcode('[gravityform id="4" title="true" ajax="true"]'); ?>
    </div>


<?php if (!is_front_page()){
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
	//$thumb_url = $thumb_url_array[0];
	//$default = get_stylesheet_directory_uri()."/images/bg.jpg";
	?>

	<header class="page-header" style="background:url(<?php echo $thumb_url_array[0] ?>) no-repeat right center;background-size:initial;">
		<?php if (is_page(6)){ ?>
			<h1 class="page-title">About My Company</h1>
			<span>Service, Integrity, Professionalism, and Value</span>
		<?php }else{
			the_title( '<h1 class="page-title">', '</h1>' );
			} ?>
	</header><!-- .entry-header -->
 <?php } ?>