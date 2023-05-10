<?php

namespace developtheme\config\structure;

function component($component_name, $component_variant, $variables = [], $content_callback = null) {
    extract($variables);
    ob_start();

    if ($content_callback !== null) {
        $template_content = $content_callback();
    }

    $template_directory = get_template_directory();
    $path_prefix = (strpos($template_directory, '/origin') === false) ? 'origin/' : '';
    $path = $path_prefix . 'components' . '/' . $component_name . '/' . $component_variant;

    include(locate_template($path . '.php'));
    return ob_get_clean();
}

function partials( $partials_name ) {
    ob_start();
    $template_directory = get_template_directory();
    $path_prefix = (strpos($template_directory, '/origin') === false) ? 'origin/' : '';
    $path = $path_prefix . 'partials' . '/' . $partials_name;

    include(locate_template($path . '.php'));
    return ob_get_clean();
}

