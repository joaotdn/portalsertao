<?php

function add_cities_taxonomy()
{
    $labels = array(
        'name'              => __('Municípios'),
        'singular_name'     => __('Município'),
        'search_items'      =>  __('Buscar'),
        'popular_items'     => __('Mais usados'),
        'all_items'         => __('Todos os Municípios'),
        'parent_item'       => null,
        'parent_item_colon' => null,
        'edit_item'         => __('Adicionar novo'),
        'update_item'       => __('Atualizar'),
        'add_new_item'      => __('Adicionar novo Município'),
        'new_item_name'     => __('Novo')
    );

    register_taxonomy('cities', array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'municipio'),
    ));
}
add_action('init', 'add_cities_taxonomy', 0);
