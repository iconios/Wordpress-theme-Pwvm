<!-- =============== WELCOME SECTION ======================== -->
	<div class="container" id="welcome-container">
		<div class="row" id="welcome-row">
			<div class="col-sm-12">
			
				<?php 	$welcome_id = 162;
						$whoweare_id = 80;
				?>
				
				<h3><?php echo get_the_title( $welcome_id ); ?></h3>
				<hr id="welcome-border">
			</div>
			<p><?php
					// query for the who-we-are page
					$welcome_query = new WP_Query( array( 'page_id' => $whoweare_id ) );
					// "loop" through query (even though it's just one page) 
					while ( $welcome_query->have_posts() ) : $welcome_query->the_post();
					the_content();
					endwhile;
				?>
			
				<?php // reset post data (important!)
					wp_reset_postdata(); 
				?>
			</p>
			<a href="<?php echo get_post_permalink( $whoweare_id ); ?>" class="btn btn-md btn-primary view-more">View More</a>
		</div>
	</div>
		
		
		

