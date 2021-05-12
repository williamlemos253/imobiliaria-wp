<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-imob
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<header id="masthead" class="site-header">
	<div class="container"> 
		<div class="right-align">
		
		</div>
	</div>


		<nav class="menu">
			<div class="container">

				<a href="<?php echo get_home_url(); ?>">
					<?php 
							if ( function_exists( 'the_custom_logo' ) ) {
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
								echo '<img class="brand-logo" src="' . esc_url( $custom_logo_url ) . '" alt="" >';
							}	
					?>
				</a>

	
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'menu_id' 			=> 'primary-menu',
						'theme_location'    => 'primary',
						'depth'             =>  1,
						'container'         => 'div',
						'menu_class' 		=> 'right hide-on-med-and-down',
						'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
					));
				?>
			</div>
			
		</nav>
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
