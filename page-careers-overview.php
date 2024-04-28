<?php
/*
	Template Name: Careers Overview Template
*/
?>

<?php get_header(); ?>
<!-- ========================= CAREERS OVERVIEW CONTENT ==================================== -->

	<div class="container" id="careers-overview-container">
		<div class="row">
			<div class="col-sm-12" id="careers-overview-col">
				<div id="careers-overview-img">
					
					<?php $careers_overview_id = 96 ?>
					<?php $vacancies_id = 98 ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<img src="<?php echo get_template_directory_uri() . '/assets/img/work.jpg' ?>" alt="work picture" />
					<div id="careers-overlay-img">
					</div>
				</div>
				<h3 id="careers-overview-head">Our Recruitment Process</h3>
				
				<p><?php echo get_the_content( $careers_overview_id ); ?></p>
				<a href="<?php echo get_permalink( $vacancies_id ); ?>" class="btn btn-md btn-primary view-more">View Available Vacancies</a>
				
				<?php endwhile; endif; ?>
				
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>