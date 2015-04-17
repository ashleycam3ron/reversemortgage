<footer id="footer" class="text-left">
  	<div class="col-xs-10 col-xs-push-2 col-sm-5 col-md-3 col-sm-push-0">
      <h1 class="widget-title signature"><span class="avatar"></span>Bob Rustigian</h1>
      <p>Reverse Mortgage Advisor<br>
		 Procifico Mortgage Ventures, LLC</p>
	  <p class="col-sm-9 col-sm-offset-3"><a href="tel:1.800.REVERSE"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>1.800.REVERSE</a></p>
	  <p class="col-sm-9 col-sm-offset-3"><a href="mailto:bob.rustigian@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>bob.rustigian@gmail.com</a></p>
    </div>
	<div class="col-sm-7 col-md-5">
		<?php echo do_shortcode('[gravityform id="2" title="true" description="true" ajax="true"]'); ?>
	</div>
	<div class="col-sm-12 col-md-3">
		<h1 class="widget-title">Connect</h1>
		<ul id="connect">
			<li class="Facebook"><a href="#">Facebook</a></li>
			<li class="LinkedIn"><a href="#">LinkedIn</a></li>
			<li class="Google"><a href="#">Google+</a></li>
		</ul>
		<p class="copyright">&copy; 2015 Bob Rustigian. All Rights Reserved.</p>
	</div>
	<div class="clear"></div>
  </footer>
</div> <!-- /container -->

<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.fancybox').fancybox({
			padding: 0,
			maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		minWidth : 320,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
		});
	});


	jQuery(window).on("scroll touchmove", function () {
	    jQuery('.navbar').toggleClass('tiny', jQuery(document).scrollTop() > 0);
	});
</script>

<?php wp_footer();?>

</body>
</html>