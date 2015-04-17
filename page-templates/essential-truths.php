<?php
/*
Template Name: Essential Truths
*/

?>
<?php get_header();?>

<div id="main" class="truths">

	<div class="container">
		<div class="row">
			<aside class="col-xs-10 col-xs-offset-1 col-sm-3 col-sm-offset-0 meeting">
				<h2>Want to know the most important facts about a Reverse Mortgage?</h2>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</aside>
			<div class="col-xs-11 col-xs-offset-1 col-sm-8 content">
				<div class="row">

					<?php
						$args = array( 'post_type' => 'truths', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
							get_template_part( 'content', 'truths' );
						endwhile; ?>


				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
    jQuery(".entry").hide();
    jQuery(".entry-header").click(function () {
        jQuery(this).next(".entry").slideToggle(500);
        jQuery(this).toggleClass("expanded");
    });
</script>

<?php get_footer();?>


