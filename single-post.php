
<?php get_header(); ?>

<!--							SINGLE
		======================================================================= -->	

<div class="container" id="news-single-container">
		<div class="row" id="news-single-row">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		
			<div class="col-sm-9" id="news-single-col">
				<h4 id="news-single-head"><?php the_title(); ?></h4>
				<h6 id="news-single-date"><?php the_time('F j, Y') ?></h6>
				<img class="img-responsive center-block" alt="news image" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>" />
				<p id="news-single-body"><?php the_content(); ?><span>&hellip;</span></p>
				
					<?php if( get_next_posts_link() ) : next_posts_link( 'Older Entries »', 0 ); endif; ?>
					<?php if( get_previous_posts_link() ) : previous_posts_link( '« Newer Entries' ); endif; ?>
				
			</div>
			<div class="col-sm-3 hidden-xs">
				<div class="panel panel-group" id="news-single-side">
					<div class="panel panel-default">
						<div class="panel-body">
						
						<?php
							$prevPost = get_previous_post();
							$prevThumbnail = get_the_post_thumbnail( $prevPost->ID );
							$nextPost = get_next_post();
							$nextThumbnail = get_the_post_thumbnail( $nextPost->ID );
						?>
						
						<?php
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, 'large', true);
							$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
						?>
						
							<a href="<?php the_permalink( $prevPost->ID ); ?>"><img class="img-responsive center-block" alt="prev post" src="<?php if($prevThumbnail){ echo $prevThumbnail; } ?></a>
						</div>
						<div class="panel-footer">
							<h4><a href="<?php the_permalink( $prevPost->ID ); ?>"><?php the_title( $prevPost->ID ); ?></a></h4>
							<p><a href="<?php the_permalink( $prevPost->ID ); ?>"><?php echo get_the_excerpt( $prevPost->ID ); ?></a>
							</p>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="<?php the_permalink( $nextPost->ID ); ?>"><img class="img-responsive center-block" alt="next post" src="<?php if($nextThumbnail){ echo $nextThumbnail; } ?></a>
						</div>
						<div class="panel-footer">
							<h4><a href="<?php the_permalink( $nextPost->ID ); ?>"><?php the_title( $nextPost->ID ); ?></a></h4>
							<p><a href="<?php the_permalink( $nextPost->ID ); ?>"><?php echo get_the_excerpt( $nextPost->ID ); ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php endwhile; endif; ?>
				
<?php get_footer(); ?>