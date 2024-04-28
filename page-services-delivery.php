<?php
/*
	Template Name: Services Delivery Template
*/
?>

<!-- ========================= CONTENT ==================================== -->
	<?php get_header(); ?>
	
	<div class="container">	
		<div class="row">
		
		<?php  
				
		if (have_posts()) : while(have_posts()) : the_post();
		
		?>
		
			<div class="col-sm-12" id="service-body-0">
				<h3 id="service-head-0"><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
		
	<?php get_footer(); ?>	