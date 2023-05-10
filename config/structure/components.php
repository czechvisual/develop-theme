<?php

namespace developtheme\config\structure;

function origin_partials($partials_name) {
    ob_start();
    global $origin_theme_directory;
    $path_prefix = (strpos($origin_theme_directory, '/origin') === false) ? 'origin/' : '';
    $path = $origin_theme_directory . '/' . $path_prefix . 'partials' . '/' . $partials_name . '.php';

    include($path);
    return ob_get_clean();
}

function origin_component($component_name, $component_variant, $variables = [], $content_callback = null) {
    extract($variables);
    ob_start();

    if ($content_callback !== null) {
        $template_content = $content_callback();
    }

    global $origin_theme_directory;
    $path_prefix = (strpos($origin_theme_directory, '/origin') === false) ? 'origin/' : '';
    $path = $origin_theme_directory . '/' . $path_prefix . 'components' . '/' . $component_name . '/' . $component_variant . '.php';

    include($path);
    return ob_get_clean();
}


