<?php
/*
	Template Name: Portal Template

*/
?>



<?php get_header(); ?>

	<!-- ========================= CONTENT ==================================== -->
	<div class="container" id="portal-container">
		<div class="row" id="portal-row">
			<div class="col-sm-12 center-block panel panel-primary" id="portal-col">
			
			<?php  
				
				if (have_posts()) : while(have_posts()) : the_post();
		
			?>
				<h3>Client Login</h3>
				<p><?php the_content(); ?>
				</p>
				<form method="post" action="clientaccess.php">
					<div class="panel-body" id="portal-body">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/logo.jpg' ?>" alt="Pwvm Logo" />
						<div id="portal-input">
							<label id="username">Username</label><br>
							<input type="text" name="user" id="input-name" placeholder="Your username, please!" required="required" size="40" autofocus="autofocus"><br>
							<label>Password</label><br>
							<input type="password" name="password" id="input-password" required="required"><br>
							<input class="btn btn-default btn-md view-more center-block" type="submit" id="portal-login" value="Login"> 					
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>