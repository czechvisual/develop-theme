<?php

namespace developtheme\config\setup;

function add_theme_supports()
{
    // Load textdomain

    load_theme_textdomain( app()['textdomain'], get_template_directory() . '/languages' );

    // Add support for custom logo

    add_theme_support('custom-logo');

    // Add support for head <title> tag

    add_theme_support('title-tag');

    // Enable support for Post Thumbnails

    add_theme_support('post-thumbnails');

    // Switch default core markup

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
}
add_action('after_setup_theme', __NAMESPACE__ . '\add_theme_supports');
