<?php get_header();?>

<!-- !Main Jumbotron -->
    <div class="jumbotron text-center">
      <div class="container">
	    <div class="col-md-8 col-md-offset-2">
        <h1>Home secured and a future of possibilities.</h1>
        <p>If you're 62 or older – and looking for money to finance a home improvement, pay off your current mortgage, supplement your retirement income, or pay for healthcare expenses – you may be considering a reverse mortgage.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center">

<!-- !Company -->
	<?php if( have_rows('us') ): ?>
	  <div class="company">
		  <div class="container">
			<?php while ( have_rows('us') ) : the_row(); ?>
		      <h1><?php the_sub_field('heading'); ?></h1>
		      <p><?php the_sub_field('sub'); ?></p>

		      <img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/5-star.png" class="img-responsive center-block" alt="5 Star Service">
		      <div class="col-md-4">
			      <a class="row" href="#">
			        <img width="270" height="auto" src="<?php echo  get_stylesheet_directory_uri(); ?>/images/proficio.png">
			        <img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/proficio-credits.png">
			      </a>
		      </div>
		      <div class="col-md-7">
			  <?php if( have_rows('points') ): ?>
		      <ul>
			      <?php while ( have_rows('points') ) : the_row(); ?>
			      <li><?php the_sub_field('text'); ?></li>
			      <?php endwhile; ?>
		      </ul>
		      <?php endif; ?>
		      </div>
		      <?php endwhile; ?>
		   </div>
	  </div>
	<?php endif; ?>

<!-- !Products -->
 	<?php if( have_rows('products') ): ?>
      <div id="products">
	    <div class="container">
	      <h1>Our Products</h1>
	      <p>How our specialization in Reverse Mortgages benefits you</p>
	      <p><i>Just</i> Reverse Mortgages</p>

	      <?php while ( have_rows('products') ) : the_row(); ?>
	        <div class="col-sm-6 col-md-4">
		      <img src="<?php the_sub_field('image'); ?>" class="img-responsive center-block" alt="">
	          <h2><?php the_sub_field('title'); ?></h2>
	          <p><?php the_sub_field('copy'); ?></p>
	        </div>
          <?php endwhile; ?>
        <p><a class="btn btn-default" href="#" role="button">Show Me How This Will Benefit Me</a></p>
	    </div>
      </div>
	  <?php endif; ?>

<!-- !Get Started -->
	<?php if( have_rows('start') ): ?>
	  <div class="container-fluid start">
		  <?php while ( have_rows('start') ) : the_row(); ?>
		  <div class="col-md-4 col-md-offset-2">
		      <h1><?php the_sub_field('title'); ?></h1>
		      <p><?php the_sub_field('text'); ?></p>
		      <p><a class="btn btn-default" href="#" role="button">Request Free Information</a></p>
		  </div>
		  <?php endwhile; ?>
	  </div>
	  <?php endif; ?>


<!-- !Subscribe -->
	  <div class="subscribe">
		  <div class="row">
		      <h1>Keep me in the loop</h1>
		      <p>Receive personalized emails in your inbox with the latest tips and updates</p>
		      <p><a class="btn btn-info" href="#" role="button">Subscribe</a></p>
		      <span><i>We respect your privacy</i></span>
		  </div>
	  </div>

<?php get_footer();?>