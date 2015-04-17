<?php get_header();?>
<?php $image = get_field('default_featured_image', 'option'); ?>
<div class="row">
	<div class="col-sm-9 col-sm-push-3">
		<div class="row">
			<div id="banner" class="col-sm-12" style="background: url(<?php echo $image; ?>) no-repeat center bottom;">
				<?php if(function_exists('yoast_breadcrumb')) yoast_breadcrumb('<ol id="breadcrumb">','</ol>');?>
			</div>
			<div class="content col-sm-12">
				<div class="row">
					<div class="entry col-sm-12">
						<h2>We Can't Find That Page</h2>
						<p>It looks like we got lost somewhere.  Try using the navigation bar or search window.</p>
<img src="http://www.accuratuslabs.com/wordpress/wp-content/uploads/2015/02/Accuratus_Labs_404.png" alt="Accuratus Labs 404 Page" width="100%"/>
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