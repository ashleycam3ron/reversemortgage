<?php
/*
Template Name: About Page
*/

?>
<?php get_header();?>

<div id="main" class="row">

	<div class="col-sm-12 bg">
		<div class="col-sm-11 col-sm-push-2 col-md-8 col-md-push-4">
			<div class="content col-sm-12">
				<div class="row">
					<div class="entry col-sm-6 col-lg-7">

						<?php while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile; ?>
					</div>
					<div class="col-xs-8 col-xs-push-2 col-sm-3 col-md-4 col-lg-3 col-sm-push-1 quote">
						<?php the_field('quote'); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="title">
			<h3>Robert "Bob" Rustigian</h3>
			<p>Reverse Mortgage Advisor<br/>
			NMLS I.D. 191926</p>
		</div>
	</div>

<!-- !Pledge -->
	<div class="col-sm-12 pledge">
	<?php // check if the repeater field has rows of data
		if( have_rows('statement') ): ?>
		<h2>My Pledge</h2>
		<p>At the very core of my relationship with you is my pledge of trust to:</p>
		<ul class="col-md-10 col-md-offset-2">
		 	<?php
		    while ( have_rows('statement') ) : the_row(); ?>
			<li class="col-xs-6 col-sm-4 col-md-2">
		        <img src="<?php the_sub_field('icon'); ?>">
		        <p><?php the_sub_field('text'); ?></p>
			</li>
		   <?php endwhile; ?>
		   <li class="clearfix"></li>
		</ul>
		<?php else :
	    // no rows found
		endif; ?>
	</div>

<!-- !Testimonials -->
	<div class="col-sm-11 testimonials">
	<?php // check if the repeater field has rows of data
		if( have_rows('testimonials') ): ?>
		<ul class="col-md-11 col-md-offset-1">
		 	<?php
		    while ( have_rows('testimonials') ) : the_row(); ?>
			<li class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0">
		        <img class="img-responsive img-circle pull-right" src="<?php the_sub_field('image'); ?>">
		        <p class="pull-left"><?php the_sub_field('quote'); ?></p>
			</li>
		   <?php endwhile; ?>
		</ul>
		<?php else :
	    // no rows found
		endif; ?>
	</div>

<!--
	<aside id="sidebar-left" class="col-sm-3 col-sm-pull-9">
		<?php get_sidebar();?>
	</aside>
-->
</div>


<?php get_footer();?>


