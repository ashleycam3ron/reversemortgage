<?php
/*
Template Name: Company Page
*/

?>
<?php get_header();?>

<div id="main" class="row">

	<div class="container company">
		<div class="row">
			<div class="col-xs-10 col-xs-push-1 col-sm-3 col-sm-offset-1 left">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/proficio.png">
				<p>Our goal is to make the loan process as simple and worry-free as possible.</p>
			</div>
			<div class="col-xs-10 col-xs-push-1 col-sm-8">
				<div class="content col-sm-12">
					<div class="row">
						<div class="entry col-sm-9">

							<?php while ( have_posts() ) : the_post();
								get_template_part( 'content', 'page' );
							endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<?php get_footer();?>


