<?php

function ps_register_nav_menus() {
	register_nav_menus( array(
		'primary_menu' => __( 'Menu Principal', 'text_domain' ),
	) );
}
add_action( 'after_setup_theme', 'ps_register_nav_menus', 0 );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
