<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Qedit
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="sidebar"  role="complementary">

	<div id="logo">
		<img src="<?php echo get_template_directory_uri(); ?>/images/qedit-logo.png" alt="Qedit Logo">	
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'qedit' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'qedit' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'qedit' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'qedit' ), 'qedit', '<a href="https://automattic.com/" rel="designer">Adiv Ohayon</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</aside><!-- #secondary -->
