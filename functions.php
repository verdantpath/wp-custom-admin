<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function wpt_admin_color_schemes() {

  $theme_dir = get_stylesheet_directory_uri();

  wp_admin_css_color(
    'treehouse',
    __( 'Treehouse' ),
    $theme_dir . '/admin-colors/treehouse/colors.css',
    array( '#384047', '#5BC67B', '#838cc7', '#ffffff' )
  );
}
add_action('admin_init', 'wpt_admin_color_schemes');

function wpt_remove_menus() {
  remove_menu_page( 'edit.php' ); //posts
  remove_menu_page( 'upload.php' ); //media
  remove_menu_page( 'edit-comments.php' ); //comments
}
add_action( 'admin_menu', 'wpt_remove_menus' );
