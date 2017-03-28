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
		<a href="<?=home_url()?>" title="QEDit - <?=get_bloginfo('description')?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/qedit-logo.png" alt="Qedit Logo"></a>	
	</div>
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'qedit' ); ?></button>
			<?php
				$menu = is_front_page() ? 'front-page' : 'other-pages';
				wp_nav_menu( array( 'theme_location' => $menu, 'menu_id' => 'primary-menu' ) ); 
			?>
		</nav><!-- #site-navigation -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</aside><!-- #secondary -->
