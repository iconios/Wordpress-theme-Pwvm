<?php
/*
	Template Name: About Template
*/
?>

<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="about-container">
		<div class="row" id="about-img-row">
			<div class="col-xs-12">
			
			<?php
					$whoweare_id = 80;
					$vis_mis_val_id = 82;
					$mission_id = 244;
					$values_id = 246;
			?>
			
			<?php
					$about_query_1 = new WP_Query( array( 'page_id' => $whoweare_id ) );
					while ( $about_query_1->have_posts() ) : $about_query_1->the_post();
			?>
			
				<div class="img-responsive" id="about-img-0">
					<img class="img-responsive" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>" alt="about-us image"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h3 class="about-head" id="Whoweare-head"><?php the_title(); ?></h3>
				<p class="about-body"><?php echo get_the_content(); ?></p>
				<h3 class="about-head">Our Vision</h3>
			<?php endwhile; ?>
			<?php // reset post data (important!)
				wp_reset_postdata(); 
			?>
			<?php
				$about_query_2 = new WP_Query( array( 'page_id' => $vis_mis_val_id ) );
				while ( $about_query_2->have_posts() ) : $about_query_2->the_post();
			?>
				<p class="about-body"><?php echo get_the_content(); ?></p>
				
			<?php endwhile; ?>
			<?php // reset post data (important!)
				wp_reset_postdata(); 
			?>
				
				<?php
					$about_query_3 = new WP_Query( array( 'page_id' => $mission_id ) );
					while ( $about_query_3->have_posts() ) : $about_query_3->the_post();
				?>
				
				<h3 class="about-head">Our Mission</h3>
				<p class="about-body"><?php echo get_the_content(); ?></p>
				
				<?php endwhile; ?>
				<?php // reset post data (important!)
					wp_reset_postdata(); 
				?>
				
				<?php
					$about_query_4 = new WP_Query( array( 'page_id' => $values_id ) );
					while ( $about_query_4->have_posts() ) : $about_query_4->the_post();
				?>
				
				<h3 class="about-head">Our Values</h3>
				<?php echo get_the_content(); ?>
								
				<?php endwhile; ?>
				<?php // reset post data (important!)
					wp_reset_postdata(); 
				?>
				
			</div>
		</div>
	</div>




<?php get_footer(); ?>