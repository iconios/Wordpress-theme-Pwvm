<?php
/*
	Template Name: Vacancies Template
*/
?>



<?php get_header(); ?>

<!-- ========================= VACANCIES CONTENT ==================================== -->
	<div class="container">
		<div class="panel-group vacancies-group">
			
			<?php
					$args = array(
						'post_type' => 'vacancy'
					);
					
					$vacancy_query = new WP_Query( $args );
				?>
				<?php if(have_posts()) : while($vacancy_query->have_posts()) : $vacancy_query->the_post(); ?>

			
			<div class="panel panel-default vacancies-panel" id="vacancies-list-1">
				<div class="panel-heading vacancies-head">
					<h3><strong>Job Title: </strong><?php the_title(); ?></h3>
					<p><strong>Post Date: </strong><?php the_time('F j, Y'); ?> | <strong>Post-Expiry Date: </strong><?php if(get_field('post_expiry_date'))
																														{
																															$date = DateTime::createFromFormat('Ymd', get_field('post_expiry_date'));
																															echo $date->format('F j, Y');
																														}	 
																													?>
				</p>
				</div>
				<div class="panel-body">
					<p><strong>Brief Description: </strong><?php echo get_the_excerpt(); ?></p>
				</div>
				<div class="panel-footer vacancies-foot">
					<a href="<?php the_permalink(); ?>" class="btn btn-md btn-primary view-more">View Details</a>
				</div>
			</div>
		
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		
		</div>
	</div>

<?php get_footer(); ?>