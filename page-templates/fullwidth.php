<?php
/*
Template Name: Full Width
*/
?>
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
					<div class="entry col-sm-12">
						<?php the_title('<h2>', '</h2>');?>						
						<?php the_content();?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<aside id="sidebar-left" class="col-sm-3 col-sm-pull-9">
		<?php get_sidebar();?>
	</aside>
</div>
<?php get_footer();?>