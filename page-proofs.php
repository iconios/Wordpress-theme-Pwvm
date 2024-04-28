<?php
/*
	Template Name: Proofs Template
*/
?>

<?php get_header(); ?>
<!-- ========================= PROOFS CONTENT ==================================== -->
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 proofs-img">
			
			<?php 
			$order = get_post_field( 'menu_order', $post_id);
			
			?>
		
			<?php
				$args = array(
					'post_type' => 'proof',
					'meta_key'   => 'menu_link',
					'meta_value' => $order,
					'meta_compare' => '=',					
					'posts_per_page' => 1,
				);
				
				$proof_query = new Wp_Query( $args );
								
				if(have_posts()) : while($proof_query->have_posts()) : $proof_query->the_post();
				
				$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
				$proof_picture_1 = get_field('testimonial_one_picture');
				$proof_picture_2 = get_field('testimonial_two_picture');
				$proof_picture_3 = get_field('testimonial_three_picture');
			?>
			
				<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>" alt="<?php echo $image_alt_tag; ?>" />
				<div id="proofs-overlay-img">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" id="proofs-estate">
				<h3><?php the_title(); ?></h3>
				<h6><strong>Number of Units: </strong><?php echo get_field(units_number); ?> | <strong>Location: </strong><?php echo get_field(estate_location); ?> | <strong>Service Period: </strong><?php echo get_field(service_period); ?></h6>
				<h4>History </h4>
				<p><?php the_content(); ?>
				</p>
				<h4>Current State </h4>
				<p><?php echo get_field(current_state); ?></p>
			</div>
		</div>
		<div class="row" id="estate-testimonials">
			<div class="col-xs-12" id="estate-testimonials-head">
				<h4>Testimonials From Some Residents / Home-owners: </h4>
			</div>
			<div class="col-sm-4 estate-proofs">
				<img src="<?php echo $proof_picture_1['url']; ?>" class="center-block" alt="<?php echo $proof_picture_1['alt']; ?>" />
				<h3><?php echo get_field(testimonial_one_name); ?></h3>
				<h5>Title: <?php echo get_field(testimonial_one_title); ?></h5>
				<p><q><?php echo get_field(testimonial_one_report); ?> </q>
				</p>
			</div>
			<div class="col-sm-4 estate-proofs">
				<img src="<?php echo $proof_picture_2['url']; ?>" class="center-block" alt="<?php echo $proof_picture_2['alt']; ?>" />
				<h3><?php echo get_field(testimonial_two_name); ?></h3>
				<h5>Title: <?php echo get_field(testimonial_two_title); ?></h5>
				<p><q><?php echo get_field(testimonial_two_report); ?> </q>
				</p>
			</div>
			<div class="col-sm-4 estate-proofs">
				<img src="<?php echo $proof_picture_3['url']; ?>" class="center-block" alt="<?php echo $proof_picture_3['alt']; ?>" />
				<h3><?php echo get_field(testimonial_three_name); ?></h3>
				<h5>Title: <?php echo get_field(testimonial_three_title); ?></h5>
				<p><q><?php echo get_field(testimonial_three_report); ?> </q>
				</p>
			</div>
		</div>
	</div>
	
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
	
	
<?php get_footer(); ?>