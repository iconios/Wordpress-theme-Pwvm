<!-- ================================== EXECUTIVE TEAM ======================================= -->
	<div class="container" id="team-container">
		<div class="row">
			<h3 id="team-head">EXECUTIVE MANAGEMENT TEAM</h3>
			<hr id="team-border">
			<div class="responsive">
			
		<?php  
			
			$args = array( 
						'post_type'   => 'team',
						'order'   => 'ASC'
						);
						$team_query = new WP_Query( $args ); 
			
			if (have_posts()) : while ($team_query->have_posts()) : $team_query->the_post();  
		
			$team_image = get_field('member_picture');
		?>
				<div>
					<a href="<?php the_permalink(); ?>">
						<img class="img-responsive team-pix center-block" src="<?php echo $team_image['url']; ?>" alt="<?php echo $team_image['alt']; ?>"/>
						<h3 class="team-name"><?php echo get_field('member_name'); ?></h3>
						<h5 class="team-role"><?php echo the_title(); ?></h5>
					</a>
				</div>
			
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		
			</div>
		</div>
	</div>
	
	
	