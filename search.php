<?php get_header();?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		  $image = $image[0]; ?>
<?php else :
	$image = get_field('default_featured_image', 'option'); ?>
<?php endif; ?>

<div class="row">
	<div class="col-sm-9 col-sm-push-3">
		<div class="row">
			<div id="banner" class="col-sm-12" style="background: url(<?php echo $image; ?>) no-repeat center bottom;">
				<?php if(function_exists('yoast_breadcrumb')) yoast_breadcrumb('<ol id="breadcrumb">','</ol>');?>
			</div>
			<div class="content col-sm-12">
				<div class="row">
					
					<div class="entry col-sm-7 col-lg-8">
						<h2>Search Results</h2>
						<?php if(have_posts()) : while(have_posts()): the_post();?>
						<div>
							<a href="<?php the_permalink();?>"><?php the_title('<h3>', '</h3>');?></a>
							<p><?php the_excerpt();?></p>
						</div>
						<?php endwhile; endif;?>
						<?php pagination();?>
					</div>
					
					<?php get_sidebar('widgets');?>
				</div>
			</div>
		</div>
	</div>
	<aside id="sidebar-left" class="col-sm-3 col-sm-pull-9">
		<?php get_sidebar();?>
	</aside>
</div>
<?php get_footer();?>