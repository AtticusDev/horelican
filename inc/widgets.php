<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function horelican_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'horelican' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'horelican' ),
		'before_widget' => '<section id="%1$s" class="widget card %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title card-header">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'horelican_widgets_init' );