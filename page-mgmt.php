<?php
/*
	Template Name: Team Template
*/
?>

	<?php get_header(); ?>
	
	<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="member-container">
		<div class="row">
			<div class="col-xs-12">
			
			<?php $mgmt_id = 84 ?>
			<?php
				$args = array(
					'post_type' => 'team',
					'order' => 'ASC'
				);
				
				$team_query = new WP_Query( $args );
			?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h3 id="team-head">Our Management Team</h3>
				<p id="team-body"><?php echo get_the_content( $mgmt_id ); ?></p>
			<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="row" id="team-row">
			<div class="panel-group" id="accordion">
			
			<?php if(have_posts()) : while($team_query->have_posts()) : $team_query->the_post(); ?>
			<?php $team_picture = get_field('member_picture'); ?>
			
				<div class="col-md-3 col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $team_query->current_post; ?>">
								<img class="img-responsive team-pix center-block" src="<?php echo $team_picture['url']; ?>" alt="<?php echo $team_picture['alt']; ?>" />
								<p class="team-name"><?php echo get_field('member_name'); ?></p>
								<h5 class="team-role"><?php the_title(); ?></h5>
							</a>
						</div>
						<div id="collapse-<?php echo $team_query->current_post; ?>" class="panel-collapse collapse in">
							<div class="panel-body">
								<h2 class="member-name"><?php echo get_field('member_name'); ?></h2>
								<h3 class="member-role"><?php the_title(); ?></h3>
								<p class="member-profile"><?php echo get_the_content(); ?></p>
							</div>
						</div>
					</div>
				</div>
				<hr class="visible-xs">
				
				<?php endwhile; endif; ?>	
				<?php wp_reset_postdata(); ?>
				
			</div>
		</div>
	</div>
	
		
	<?php get_footer(); ?>	