	<!-- ============================================= FOOTER ==================================== -->
<footer class="footer clearfix">
    <div class="container" id="footer-up">
		<div class="row" id="footer-1">
			<div class="col-md-3 col-sm-4" id="pwvm-panel">
				<h4 class="pwvm-head"><?php bloginfo('name'); ?></h4>
				<hr>
				
				<?php 	
					$welcome_id = 162;
					$whoweare_id = 80;
				?>
				
			<p><?php
					// query for the who-we-are page
					$welcome_query = new WP_Query( array( 'page_id' => $whoweare_id ) );
					// "loop" through query (even though it's just one page) 
					while ( $welcome_query->have_posts() ) : $welcome_query->the_post();
					echo get_the_excerpt();
					endwhile;
				?>
			
				<?php // reset post data (important!)
					wp_reset_postdata(); 
				?>
			</p>
			</div>
			<div class="col-md-2 col-sm-4" id="company-list">
				<h4 class="company-head">Company</h4>
				<hr>
				<ul class="footer-list">
					
					<?php  
						$args = array(
							'exclude' => '82, 244, 246',
							'child_of' => 10,
							'post_type' => 'page',
							'echo' => true,
							'title_li' => ''
						);
						
						wp_list_pages( $args );
					?>
				
				</ul>
			</div>
			<div class="col-md-3 col-sm-4" id="product-list">
				<h4 class="product-head">Services</h4>
				<hr>
				<ul class="footer-list">
					
					<?php  
						$args = array(
							'exclude' => '33',
							'child_of' => 6,
							'post_type' => 'page',
							'echo' => true,
							'title_li' => ''
						);
						
						wp_list_pages( $args );
					?>
				
				</ul>
			</div>
			<div class="col-md-2 col-sm-12" id="tweet-list">
				<h4 class="tweet-head">Tweets</h4>
				<hr>
				
				<?php $args = array(
					'post_type' => 'socialmedium',
					'posts_per_page' => 1
				);

				$social_query = new WP_Query( $args );
				if(have_posts()) : while ( $social_query->have_posts() ) : $social_query->the_post();
				
				?>
				
				<a class="twitter-timeline" data-height="300" data-theme="dark" data-link-color="#B28D00" href="<?php echo get_field('twitter_rss_feed'); ?>">Tweets by IFMA</a> 
				<script async src="<?php echo get_template_directory_uri() . '/assets/js/widgets.js' ?>" charset="utf-8" type="application/javascript"></script>
				
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				
			</div>
			<div class="col-md-2 col-sm-12" id="cert-list">
				<h4 class="cert-head">Certifications</h4>
				<hr>
				<div class="cert-body img-responsive">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ifma.jpg" alt="ifma logo" class="img-responsive" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 last-col" id="footer-down">
				<p id="last-line">&#169; Copyright 2017 - <?php echo date('Y') ?>. Pwv Management Services Ltd. All Rights Reserved. 
					<span>
						<a id="tos" href="#">Terms of Service.</a>
					</span>
					<span>
						<a id="Pp" href="#"> Privacy Policy.</a>
					</span>
					<span>Designed By <a id="white" href="#">M.I Works [TekAids]</a></span>
				</p>
			</div>
		</div>
	</div>
</footer>
	
	<?php wp_footer(); ?> 	
	    
    </body>
</php>