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

			

			<div id="about-us" class="padded">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</div>
			<div id="team" class="padded">
				<?php 
					$query = new WP_Query(array(
					    'post_type' => 'team',
					    'posts_per_page' => -1,
					    'post_status' => 'publish'
					));           
					while ($query->have_posts()) :
					    $query->the_post();
					    $team_member_name = get_the_title();
					    $team_member_role = get_field( "team_role" );
					    $team_member_text = get_field( "team_text" );
					    $post_id = get_the_ID();
					    $team_member_image = wp_get_attachment_image($post_id);

				?>
				    

						Name: <?php echo $team_member_name; ?> <br />
						Role: <?php echo $team_member_role; ?> <br />
						Text: <?php echo $team_member_text; ?> <br />
						Image: <?php echo $team_member_image; ?> <br />
						
						<?php if (has_post_thumbnail( $query->ID ) ): ?>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'single-post-thumbnail' ); ?>
						  <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

						  </div>
						<?php endif; ?>
				
				<?php 
					endwhile;
					wp_reset_query();
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
