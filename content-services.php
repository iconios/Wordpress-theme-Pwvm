<!-- ====================== SERVICES ========================================================== -->
	
	<div class="container" id="services-container">
		<div class="row" id="services-row">
			<h3 id="services-head-all">SERVICES</h3>
			<hr id="services-border">
			<div class="responsive_01">
				
				<?php
					$args = array( 
						'post_type'   => 'page',
						'post_parent' => 6,
						'post__not_in' => array( 33 ),
					);
					$services_query = new WP_Query( $args ); ?>
									
				<?php if(have_posts()) : while( $services_query->have_posts() ) : $services_query->the_post(); ?>
					
					<div class="col-sm-6 col-md-4 col-services">
						<h4><?php the_title(); ?></h4>
						<p><?php echo get_the_excerpt(); ?></p>
						<a class="btn btn-md btn-primary view-more" href="<?php the_permalink(); ?>">View More</a>
					</div>
						
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
					
			</div>
		</div> 
	</div>

	