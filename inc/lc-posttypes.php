<?php

function lc_register_post_types()
{

    /**
     * Post Type: sponsors.
     */

    $args = [
        "label" => esc_html__("Sponsors", "lc-rbg2023"),
        "labels" => [
            "name" => esc_html__("Sponsors", "lc-rbg2023"),
            "singular_name" => esc_html__("Sponsor", "lc-rbg2023"),
        ],
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "sponsors", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor" ],
        "show_in_graphql" => false,
    ];

    register_post_type("sponsors", $args);

    /**
     * Post Type: charities.
     */

    $args = [
        "label" => "Charities",
        "labels" => [
            "name" => "Charities",
            "singular_name" => "Charity",
        ],
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "charities", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor" ],
        "show_in_graphql" => false,
    ];

    register_post_type("charities", $args);

    /**
     * Post Type: people.
     */

    $args = [
        "label" => "People",
        "labels" => [
            "name" => "People",
            "singular_name" => "Person",
        ],
        "description" => "",
        "public" => true,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => false,
        "query_var" => true,
        "supports" => [ "title" ],
        "show_in_graphql" => false,
    ];

    register_post_type("people", $args);

}

add_action('init', 'lc_register_post_types');

add_action('after_switch_theme', 'lc_rewrite_flush');
function lc_rewrite_flush()
{
    lc_register_post_types();
    flush_rewrite_rules();
}
