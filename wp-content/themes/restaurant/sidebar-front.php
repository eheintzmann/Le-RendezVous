<?php
/**
 * The sidebar containing the front page widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
//if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
	//return;

// If we get this far, we have widgets. Let do this.
?>
<div id="secondary" class="home-widget" role="complementary">
	<?php if( !dynamic_sidebar( 'sidebar-2' ) ) : //show informative text if no widget ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Nos pizzas', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="pizzas"><img alt="Nos pizzas" src="<?php _e( get_stylesheet_directory_uri() . '/images/Pizza_310_207.jpg' ); ?>" /></a>
		<?php _e('<ul style="list-style-type:disc; padding:1em;" ><li>Petite pizza (26cm) : 6€90</li><li>Grande pizza (33cm) : 9€90</li><li>Pate fraîche maison</li><li>Sauce tomate maison</li></ul>', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-3' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Nos pâtes', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="pates"><img alt="Nos pâtes" src="<?php _e( get_stylesheet_directory_uri() . '/images/Pates_310_207.jpg' ); ?>" /></a>
		<?php _e('<ul style="list-style-type:disc; padding:1em;" ><li>Spaghettis</li><li>Pennes</li><li>Lasagnes</li><li>Sauce bolognaise maison</li></ul>', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>

	<?php if( !dynamic_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget">
		<h3 class="widget-title"><?php _e( 'Nos assiettes', 'restaurant' ); ?></h3>
		<div class="textwidget">
		<a href="assiettes"><img alt="Nos assiettes" src="<?php _e( get_stylesheet_directory_uri() . '/images/Assiette_310_207.jpg' ); ?>" /></a>
		<?php _e('<ul style="list-style-type:disc; padding:1em;" ><li>Viandes (steak, kebab)</li><li>Calamars</li><li>Mergez</li><li>Cordon bleu</li></ul>', 'restaurant'); ?></div>
		</div><!-- .widget -->
	<?php endif; ?>
</div><!-- #secondary -->
