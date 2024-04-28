<?php
/*
	Template Name: Downloads Template
*/
?>

<?php get_header(); ?>

<!-- ========================= CONTENT ======================================================= -->
	<div class="container" id="downloads-container">
		<div class="row">
			<div class="col-xs-12" id="downloads-col">
				<h3>Downloads</h3>
				
				<?php $downloads_id = 94 ?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<p><?php echo get_the_content( $downloads_id ); ?></p>
				
				<?php endwhile; endif; ?>
				
				<?php $args = array(
					'post_type' => 'download',
					'order' => 'DESC'
				);

				$download_query = new WP_Query( $args );
				
				?>
				<ul>
				
				<?php if(have_posts()) : while($download_query->have_posts()) : $download_query->the_post(); ?>
				
					<li><a href="<?php the_permalink(); ?>" download="<?php the_title(); ?><?php echo get_field('file_extension'); ?>" target="_blank"><?php the_title(); ?></a></li>
				
				<?php endwhile; endif; ?>	
				<?php wp_reset_postdata(); ?>
				
				</ul>
			</div>
		</div>
	</div>
	
	
	
	<?php get_footer(); ?>