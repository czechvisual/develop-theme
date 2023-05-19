<?php

namespace developtheme\config\setup;

function load_theme_language_strigns(){
    load_theme_textdomain(app()['textdomain'], get_template_directory() . '/languages');
}
add_action('after_setup_theme', __NAMESPACE__ . '\load_theme_language_strigns');
