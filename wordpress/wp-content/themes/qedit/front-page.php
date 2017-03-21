<?php
/**
 * The front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package Qedit
 */

get_header(); 

?>
	
	<div class="row">
		<?php get_sidebar(); ?>
		<div id="primary" class="content-area col-sm-12">
			<main id="main" class="site-main" role="main">
				<div id="home">
					<div class="slider-container">
						<?php masterslider(1); ?>
					</div>
				</div>
				<div id="prover">
					<h2 class="padded">Our Technology</h2>
					<div class="slider-container">
						<?php masterslider(1); ?>
					</div>
				</div>
				<div id="contact-us" class="padded">
					Contact Us
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
	
	

<?php

get_footer();
