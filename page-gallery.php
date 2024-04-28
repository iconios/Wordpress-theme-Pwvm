<?php
/*
	Template Name: Image Gallery Template
*/
?>



<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="img-gallery-container">
		<div class="row">
			<div class="col-xs-12 img-gallery-col">
				<h3 id="img-gallery-head">Our Image Gallery</h3>
				
				<?php $img_gallery_id = 92 ?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<p id="img-gallery-body"><?php echo get_the_content(); ?></p>
				
				<?php endwhile; endif; ?>
				
			</div>
		</div>
		<div class="row" id="img-gallery-row">
			<div class="col-xs-12 img-gallery-col">
			
			<?php 
				$args = array(
					'post_type' => 'galleryparameter'
				);
				
				$gallery_query = new WP_Query( $args );

			?>
			
				<div id="img-gallery-rss">
				
				<?php if(have_posts()) : while($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
				
					<object data="<?php echo get_field('object_data'); ?>"> 
						<param name="<?php echo get_field('param1_name'); ?>" value="<?php echo get_field('param1_value'); ?>" /> 
						<param name="<?php echo get_field('param2_name'); ?>" value="<?php echo get_field('param2_value'); ?>" /> 
						<param name="<?php echo get_field('param3_name'); ?>" value="<?php echo get_field('param3_value'); ?>" /> 
						<embed type="<?php echo get_field('embed_type'); ?>" src="<?php echo get_field('embed_src'); ?>" flashvars="<?php echo get_field('embed_flashvars'); ?>" allowFullScreen="<?php echo get_field('embed_allowfullscreen'); ?>" /> 
					</object>
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
					<br />
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>