<?php
/*
	Template Name: Org Structure Template
*/
?>

<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="org-structure-container">
		<div class="row">
			<div class="col-xs-12" id="org-structure-col">
				<h3 id="org-structure-head">Our Organizational Structure</h3>
				<?php $org_structure_id = 86 ?>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<p id="org-structure-body"><?php echo get_the_content( $org_structure_id ); ?>
				</p>
				<img class="img-responsive" id ="org-structure-img" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>"/>
			</div>
				<?php endwhile; endif; ?>
		</div>
	</div>
		

<?php get_footer(); ?>