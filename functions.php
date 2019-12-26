<?php 
/* function settings */

//navigasi menu
function register_my_menus() {
    register_nav_menus(
		array(
			'menu-utama' => __( 'Menu Utama' ),
			'menu-tambahan' => __( 'Menu Tambahan' ),
            )
        );
        }
    add_action( 'init', 'register_my_menus');


//post thumbnail support
add_theme_support( 'post-thumbnails' );

//widget menu
function sidebar_cobaan() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Utama', 'cobaan' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Sidebar tampil dihalaman.', 'cobaan' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'sidebar_cobaan' );

?>