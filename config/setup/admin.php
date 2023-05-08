<?php

namespace developtheme\config\setup;

// Binds JS handlers to make Theme Customizer preview reload changes asynchronously

function customize_preview_js() {
    wp_enqueue_script( 'customizer', get_template_directory_uri() . '/public/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', __NAMESPACE__ . '\customize_preview_js' );




