<?php
/*
Template Name: News & Insights
*/

?>
<?php get_header();?>

<div id="main" class="news row">

	<div class="container">
		<div class="row">
			<aside class="col-sm-3 calculator">
				<?php the_field('calculator'); ?>
			</aside>
			<div class="col-sm-8 col-sm-offset-1 content">
				<div class="row">
					<div class="entry">
					<?php
						$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'orderby' => 'date', 'order' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							get_template_part( 'content', 'news' );
						endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- !Subscribe -->
	  <div class="subscribe">
		  <div class="row">
		      <h1>Keep me in the loop</h1>
		      <p>Receive personalized emails in your inbox with the latest tips and updates</p>
		      <p><a class="btn btn-info" href="#" role="button">Subscribe</a></p>
		      <span>We respect your privacy</span>
		  </div>
	  </div>

<?php get_footer();?>


