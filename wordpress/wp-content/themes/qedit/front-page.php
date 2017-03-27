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

				<!--=================================
				=            Audit Trail            =
				==================================-->
				<div id="home">
					<div class="slider-container">
						<?php masterslider(1); ?>
					</div>
				</div>
				<!-- /#home -->

				<!--============================
				=            Prover            =
				=============================-->
				<div id="prover">
					<h2 class="padded">Our Technology</h2>
					<div class="slider-container">
						<?php masterslider(1); ?>
					</div>
				</div>
				<!-- /#prover -->

				<!--==================================
				=            Latest Posts            =
				===================================-->
				<div class="latest-posts padded">
					<?php
						$args = array(
							'numberposts' => 4,
							'offset' => 0,
							'category' => 0,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'include' => '',
							'exclude' => '',
							'meta_key' => '',
							'meta_value' =>'',
							'post_type' => 'post',
							'post_status' => 'draft, publish, future, pending, private',
							'suppress_filters' => true
						);
						$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
						foreach( $recent_posts as $recent ) : 
					?>
							<!-- HTML stuff -->
							<div class="col-sm-6 col-xs-12">
								<h5><?=$recent["post_title"]; ?></h5>
							</div>
							
							<!-- echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> '; -->
					<?php
						endforeach;
						wp_reset_query();
					?>

				</div>
				<!-- /.latest-posts -->

				<!--================================
				=            Contact Us            =
				=================================-->
				<div id="contact-us" class="padded">
					Contact Us
				</div>
				<!-- /#contact-us -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
	
	

<?php

get_footer();
