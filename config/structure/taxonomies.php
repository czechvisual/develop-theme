<?php

namespace developtheme\config\structure;

// Registers `book_genre` custom taxonomy

function register_book_genre_taxonomy()
{
    register_taxonomy('book_genre', 'book', [
        'rewrite' => [
            'slug' => 'books/genre',
            'with_front' => true,
            'hierarchical' => true,
        ],
        'hierarchical' => true,
        'public' => true,
        'labels' => [
            'name' => _x('Žánry', 'taxonomy general name', app()['textdomain']),
            'singular_name' => _x('Žánr', 'taxonomy singular name', app()['textdomain']),
            'search_items' => __('Vyhledat žánry', app()['textdomain']),
            'all_items' => __('Všechny žánry', app()['textdomain']),
            'parent_item' => __('Nadřazený žánr', app()['textdomain']),
            'parent_item_colon' => __('Nařazený žánr:', app()['textdomain']),
            'edit_item' => __('Upravit žánr', app()['textdomain']),
            'update_item' => __('Aktualizovat žánr', app()['textdomain']),
            'add_new_item' => __('Přidat nový', app()['textdomain']),
            'new_item_name' => __('Nový žánr', app()['textdomain']),
            'menu_name' => __('Žánry', app()['textdomain']),
        ],
    ]);
}
add_action('init', __NAMESPACE__ . '\register_book_genre_taxonomy');
