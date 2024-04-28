<!-- =============================================== NEWS ============================================ -->
	
	<div class="container" id="news-container">
		<h3 id="news-head">NEWS</h3>
		<hr id="news-border">
		<div class="row" id="news-real">
			<div class="col-md-2 col-sm-3" id="news-real-col">
			
		<?php 
			$args = array(
				'post_type' => 'post',
				'posts_per_page'  => 1,
				'order'  => 'DESC'
			);
			
			$news_query = new WP_Query( $args );
			
			if (have_posts()) : while($news_query->have_posts()) : $news_query->the_post();

		?>
				<h4 id="news-date"><?php the_time('F j, Y'); ?></h4>
				<img class="img-responsive visible-xs" alt="news image" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full'); } ?>"/>
				<img class="img-responsive thumbnail hidden-xs" alt="news image" src="<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('thumbnail'); } ?>"/>
			
			</div>
			<div class="col-md-10 col-sm-9">
				<h4 id="news-topic"><?php the_title(); ?></h4>
				<p id="news-body"><?php echo get_the_excerpt(); ?></p>
			</div>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn btn-md btn-primary view-more" id="news-view-more">View More</a>
	</div>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>