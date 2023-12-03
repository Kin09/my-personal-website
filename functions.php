<?php
function my_personal_website_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_personal_website_scripts' );
?>
