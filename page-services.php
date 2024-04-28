<?php
/*
	Template Name: Services Template
*/
?>

	<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 img-responsive service-img">
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>" class="img-responsive" alt="service-img" />
				<div class="overlay-img">
				</div>
			</div>
			<div class="col-sm-12">
				<h3 class="service-head"><?php the_title(); ?></h3>
				<p><?php echo get_the_content(); ?></p>
			</div>
				
				<?php endwhile; endif; ?>
				
		</div>
	</div>
	
	
	<?php get_footer(); ?>	