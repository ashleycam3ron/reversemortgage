<aside id="sidebar" class="col-sm-5 col-lg-4">
	
	<?php if(is_active_sidebar('sidebar-widgets')) :?>
	<ul id="primary-sidebar" class="" role="complementary">
		<?php dynamic_sidebar('sidebar-widgets'); ?>
	</ul>
	<?php endif; ?>
	
</aside>
