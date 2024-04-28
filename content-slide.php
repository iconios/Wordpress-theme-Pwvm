
<!--	IND. SERVICES
		======================================================================= -->
		
<div class="container" id="carousel-container">
		<div class="row">
			<div class="col-md-4 col-sm-6 img-responsive">
			
			<!-- ======   CAROUSEL_00 ======= -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					
					<?php
						$args = array('post_type' => 'slide', );
						$slider_query = new WP_Query( $args );
					?>
					
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); ?>
						
						<li data-target="#myCarousel" data-slide-to="<?php echo $slider_query->current_post; ?>" <?php if($slider_query->current_post == 0) : ?>class="active"<?php endif; ?>></li>
						
						<?php endwhile; endif; ?>
					
					</ol> 
					
					<?php rewind_posts(); ?>
					
					<div class="carousel-inner" role="listbox">
						
						<?php 
							if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); 
						
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, 'large', true);
							$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
						
						?>
						
						<div class="item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
							
							<!--	<img class="first-slide" src="banner-img/ba-01.jpg" alt="First slide">  -->
							<?php //the_post_thumbnail(); ?>
							
							<img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>">
							<div class="container">
								<div class="carousel-caption">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
						
						<?php endwhile; endif; ?>
					</div>
				 
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- /.carousel -->
			</div>
			<div class="col-md-4  col-sm-6 img-responsive hidden-xs">
			
				<!-- ======   CAROUSEL_01 ======= -->
				<div id="myCarousel01" class="carousel slide" data-ride="carousel">
					
					<?php
						$args = array('post_type' => 'second-slide', );
						$slider_query = new WP_Query( $args );
					?>
					
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); ?>
						
						<li data-target="#myCarousel01" data-slide-to="<?php echo $slider_query->current_post; ?>" <?php if($slider_query->current_post == 0) : ?>class="active"<?php endif; ?>></li>
						
						<?php endwhile; endif; ?>
					
					</ol> 
					
					<?php rewind_posts(); ?>
					
					<div class="carousel-inner" role="listbox">
						
						<?php 
							if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); 
						
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, 'large', true);
							$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
						
						?>
						
						<div class="item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
							
														
							<img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>">
							<div class="container">
								<div class="carousel-caption">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
						
						<?php endwhile; endif; ?>
					</div>
				 
					<a class="left carousel-control" href="#myCarousel01" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel01" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- /.carousel -->
			</div>
			<div class="col-md-4 img-responsive hidden-xs hidden-sm">
				
				<!-- ======   CAROUSEL_02 ======= -->
				<div id="myCarousel02" class="carousel slide" data-ride="carousel">
					
					<?php
						$args = array('post_type' => 'third-slide', );
						$slider_query = new WP_Query( $args );
					?>
					
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); ?>
						
						<li data-target="#myCarousel02" data-slide-to="<?php echo $slider_query->current_post; ?>" <?php if($slider_query->current_post == 0) : ?>class="active"<?php endif; ?>></li>
						
						<?php endwhile; endif; ?>
					
					</ol> 
					
					<?php rewind_posts(); ?>
					
					<div class="carousel-inner" role="listbox">
						
						<?php 
							if(have_posts()) : while($slider_query->have_posts()) : $slider_query->the_post(); 
						
							$image_id = get_post_thumbnail_id();
							$image_url = wp_get_attachment_image_src($image_id, 'large', true);
							$image_alt_tag = get_post_meta($image_id, 'wp_attachment_image_alt', true);
						
						?>
						
						<div class="item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
							
							<!--	<img class="first-slide" src="banner-img/ba-01.jpg" alt="First slide">  -->
							<?php //the_post_thumbnail(); ?>
							
							<img src="<?php echo $image_url[0]; ?>" alt="<?php echo $image_alt_tag; ?>">
							<div class="container">
								<div class="carousel-caption">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
						
						<?php endwhile; endif; wp_reset_query(); ?>
					</div>
				 
					<a class="left carousel-control" href="#myCarousel02" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel02" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- /.carousel -->
			</div>
		</div>
	</div>