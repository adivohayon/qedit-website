<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Qedit
 */
?>
<?php /* Template Name: About Us */ ?>


<?php get_header(); ?>
	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			

			<div id="about-us">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</div>
			<div id="team" class="padded">
				<h2>OUR TEAM</h2>

				<?php 
					$query = new WP_Query(array(
					    'post_type' => 'team',
					    'posts_per_page' => -1,
					    'post_status' => 'publish'
					));
					$counter = 0;           
					while ($query->have_posts()) :
					    $query->the_post();
					    $team_member_name = get_the_title();
					    $team_member_role = get_field( "team_role" );
					    $team_member_text = get_field( "team_text" );
					    $post_id = get_the_ID();
					    $team_member_image = wp_get_attachment_image($post_id);

					    if ($counter % 3 === 0) echo '<div class="row">';

				?>
					
						<div class="team-member col-sm-4">
							<?php 
								if (has_post_thumbnail( $query->ID ) ):
							  		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'single-post-thumbnail' ); 
							?>
									<img src="<?php echo $image[0]; ?>" alt="<?php echo $team_member_name; ?>" class="circle">
								<?php endif; ?>
							<h3><?php echo $team_member_name; ?></h3>
							<h4/><?php echo $team_member_role; ?></h4>
							<p class="description"><?php echo $team_member_text; ?></p>
						</div>
					
						
				
				<?php 
					$counter++;
					if ($counter % 3 === 0) echo '</div>';
					endwhile;
					wp_reset_query();
				?>

				<!-- /.row -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
