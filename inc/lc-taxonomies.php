<?php

function lc_register_taxes()
{

    $args = [
        "label" => "Sponsor Category",
        "labels" => [
            "name" => "Sponsor Categories",
            "singular_name" => "Sponsor Category",
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
        "show_in_graphql" => false,
    ];
    register_taxonomy("sptype", [ "sponsors" ], $args);

}
add_action('init', 'lc_register_taxes');
