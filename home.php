
<?php get_header(); ?>

<!--							NEWS
		======================================================================= -->	

	<div class="container" id="news-container">
		<div class="panel-group">
			<h3 id="news-head">NEWS</h3>
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php
				$image_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($image_id, 'large', true);
				$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
			?>
			<div class="row news-real">
				<div class="panel panel-default">
					<div class="panel-body news-section">
						<div class="col-md-2 col-sm-3">
							<section class="panel panel-default news-date-img">
								<div class="panel-head news-date">
									<h4><?php the_time('F j, Y'); ?></h4>
								</div>
								<div class="panel-body news-img">
									<img class="img-responsive" alt="<?php echo $image_alt_tag ?>" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>"/>
								</div>
							</section>
						</div>
						<div class="col-md-10 col-sm-9">
							<h4 class="news-head"><?php the_title(); ?></h4>
							<p class="news-body"><?php echo get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>" class="btn btn-md btn-primary view-more">View Details</a>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile; endif; ?>
			<?php if( get_next_posts_link() ) : next_posts_link( 'Older News »', 0 ); 
			endif; ?>
			<?php if( get_previous_posts_link() ) : previous_posts_link( '« Newer News' );
			endif; ?>
			
		</div>	
	</div>
	
	
	<?php get_footer(); ?>
				