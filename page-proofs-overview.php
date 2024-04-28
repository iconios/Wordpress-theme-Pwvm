<?php
/*
	Template Name: Proofs Overview Template
*/
?>

<?php get_header(); ?>
<!-- ========================= CONTENT ======================================================= -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 proofs-img">
			
		<?php 
			
			if(have_posts()) : while(have_posts()) : the_post();

		?>
				<img src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>" alt="proofs-image" />
				<div id="proofs-overlay-img">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12" id="proofs-overview">
				<h3>Testimonials & Case Studies</h3>
				<p><?php the_content(); ?></p>
			</div>
		</div>
		
		<?php endwhile; endif; ?>
	</div>
	
<?php get_footer(); ?>