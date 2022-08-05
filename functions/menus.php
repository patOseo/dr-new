<?php

function davidoff_custom_new_menu() {
  register_nav_menus(
    array(
      'footer-menu-1' => __( 'Footer Menu 1' ),
      'footer-menu-2' => __( 'Footer Menu 2' )
    )
  );
}
add_action( 'init', 'davidoff_custom_new_menu' );