<?php get_header();?>

<div class="row bg">
	<div class="col-sm-9 col-sm-push-3">
		<div class="row">
			<div class="content col-sm-12">
				<div class="row">
					<div class="entry col-sm-7 col-lg-8">

						<?php while ( have_posts() ) : the_post();
							get_template_part( 'content', 'page' );
						endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--
	<aside id="sidebar-left" class="col-sm-3 col-sm-pull-9">
		<?php get_sidebar();?>
	</aside>
-->
</div>

<?php get_footer();?>


