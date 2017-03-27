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
					<h2>Latest Posts</h2>
					<?php
						$args = array(
							'numberposts' => 4,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'include' => '',
							'exclude' => '',
							'meta_key' => '',
							'meta_value' =>'',
							'post_type' => 'post',
							'post_status' => 'publish',
							'suppress_filters' => true
						);
						$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
						$counter = 0;
						foreach( $recent_posts as $recent ) :
							setup_postdata($recent);
							$content= $recent["post_content"];
							$excerpt = wp_trim_words( 
								$content, 
								$num_words = 20, 
								$more = '<div class="read-more"><a href="' . get_permalink($recent["ID"]) . '">Read More</a></div>' 
							);
							if ($counter % 2 === 0) echo '<div class="row">'; 	           
					?>
							<!-- HTML stuff -->
							<div class="col-sm-6 col-xs-12">
								<div class="image-container">
									<?php
										if ( has_post_thumbnail($recent["ID"]) ) {
							               echo get_the_post_thumbnail($recent["ID"], 'Latest Posts');
							           }
									?>
								</div>
								<div class="post-container">
									<h5><?=$recent["post_title"]; ?></h5>
									<div class="post-details">
										<?=get_the_date();?> by <?=get_the_author();?>
									</div>
									<p class="description"><?php echo $excerpt; ?></p>
								</div>
							</div>
							
					<?php
							$counter++;
							if ($counter % 2 === 0) echo '</div>';
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
