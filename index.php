<?php get_header();?>

<div class="row">
	<div class="col-sm-9 col-sm-push-3">
		<div class="row">
				<?php if(function_exists('yoast_breadcrumb')) yoast_breadcrumb('<ol id="breadcrumb">','</ol>');?>
			</div>
			<div class="content col-sm-12">
				<div class="row">
					<div class="entry col-sm-7 col-lg-8">
						<?php the_content();?>
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