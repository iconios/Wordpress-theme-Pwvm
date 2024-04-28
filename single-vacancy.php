

<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="vacancies-single-container">
		<div class="row" id="vacancies-single-row">
			<div class="col-sm-9" id="vacancies-single-col">
			
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
				<h3><?php the_title(); ?></h3>
				<p><strong>Job Type: </strong><?php echo get_field('job_type'); ?></p>
				<p><strong>Qualification: </strong><?php echo get_field('qualification'); ?></p>
				<p><strong>Experience: </strong><?php echo get_field('experience'); ?></p>
				<p><strong>Location: </strong><?php echo get_field('location'); ?></p>
				<p><strong>Job Field: </strong><?php echo get_field('job_field'); ?></p>
				<h4>Role Summary: </h4>
				<p><?php echo get_the_content(); ?></p>
				<h4>Qualifications / Requirements: </h4>
				<p><?php echo get_field('qualifications_requirements'); ?></p>
				<h4>Essential Responsibilities: </h4>
				<p><?php echo get_field('essential_responsibilities'); ?></p>
				<h4>Method of Application: </h4>
				<p><?php echo get_field('method_of_application'); ?></p>
			
			<?php endwhile; endif; ?>
			
			
			</div>
			<div class="col-sm-3" id="vacancies-single-side">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">Latest Jobs</h4>
					</div>
					<div class="panel-body">
					
					<?php
						$args = array( 
							'numberposts' => '3',
							'post_type' => 'vacancy'
						);
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<p><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a></p><hr> ';
						}
						wp_reset_query();
					?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<?php get_footer(); ?>