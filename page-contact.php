<?php
/*
	Template Name: Contact Template
*/
?>

<?php get_header(); ?>

<!-- ========================= CONTENT ==================================== -->
	<div class="container">
		<div class="row" id="contact-row">
			<div class="col-sm-9" id="contact-col">
				<h3>Contact Us</h3>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<p><?php echo get_the_content(); ?></p>
				<form class="row" id="form-col" method="post" name="contactform">
					<div class="col-sm-6" id="name-col">
						<label>NAME:<span>*</span></label>
						<input type="text" name="name" required="required" size="40" autofocus="autofocus">
					</div>
					<div class="col-sm-6" id="email-col">
						<label>EMAIL:<span>*</span></label>
						<input type="email" name="email" required="required">
					</div>
					<div class="col-sm-12" id="message-col">
						<label>MESSAGE:<span>*</span></label>
						<textarea name="message" required="required"></textarea>
						<label>HOW MUCH IS (1 + 2) x 3?<span>*</span></label>
						<input type="number" name="answer" required="required" min="0">
					</div>
					<input type="submit" class="btn btn-default btn-sm pull-right" id="send-btn" name="send" value="SEND" formtarget="_blank" formaction="send_message.php">'
					<input type="reset" class="btn btn-default btn-sm pull-left" id="reset-btn" name="reset" value="RESET">
				</form>
			</div>
			<div class="col-sm-3" id="contact-side">
				<section id="email-section">
					<h4 class="side-heads">EMAIL</h4>
					<p class="side-bodies">info@pwvm-services.com</p>
				</section>
				<section id="tel-section">
					<h4 class="side-heads">TELEPHONE</h4>
					<p class="side-bodies">+234-01-212-1717</p>
					<p class="side-bodies">+234-01-212-1139</p>
				</section>
				<section id="address-section">
					<h4 class="side-heads">ADDRESS</h4>
					<p class="side-bodies">Primewaterview Gardens 1, Off Itedo Road, Ikate Roundabout, Lekki, Lagos, Nigeria</p>
				</section>
				
				<?php endwhile; endif; ?>
				<?php 
					$args = array(
						'post_type' => 'socialmedium'
					); 
				
				$social_query = new WP_Query( $args );
				if(have_posts()) : while($social_query->have_posts()) : $social_query->the_post();
				
				?>
				
				<div id="contact-smedia" class="center-block">
					<a href="<?php echo get_field('facebook_account'); ?>" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
					<span>
						<a href="<?php echo get_field('twitter_account'); ?>" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
					</span>
					<span>
						<a href="<?php echo get_field('linkedin_account'); ?>" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a>
					</span>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				
				</div>
			</div>
		</div>
	</div>
		





<?php get_footer(); ?>