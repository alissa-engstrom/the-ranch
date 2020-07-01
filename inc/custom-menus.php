<?php

// custom navigation menus

function register_my_menus() {
  register_nav_menus(
    array(
      'primary-nav' => __( 'Primary Nav' ),
      'footer-about-rr' => __( 'About Recovery Ranch' ),
      'footer-resources' => __( 'Resources' ),
      'footer-locations' => __( 'Locations' ),
      'footer-contact' => __( 'Contact Us' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );
