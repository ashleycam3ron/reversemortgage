<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title col-md-9 col-sm-offset-1">', '</h1>' ); ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-link col-sm-2">Read More</a>
			<div class="clearfix"></div>
		</header><!-- .entry-header -->
		<div class="col-md-9 col-sm-offset-1 excerpt">
			<?php if (has_post_thumbnail()){
				the_post_thumbnail('medium');
			}else{ ?>
				<img src="http://www.justreversemortgages.com/wordpress/wp-content/uploads/2015/04/133x100.png">
			<?php } ?>
			<?php the_excerpt(); ?>
		</div>
		<div class="clearfix"></div>

		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
