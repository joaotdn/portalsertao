<?php

function podcast_sertao() {
    $labels = array(
      'name'               => 'Podcast',
      'singular_name'      => 'Podcast',
      'add_new'            => 'Adicionar Novo',
      'add_new_item'       => 'Adicionar novo podcast',
      'edit_item'          => 'Editar podcast',
      'new_item'           => 'Novo podcast',
      'all_items'          => 'Todos os podcasts',
      'view_item'          => 'Ver podcast',
      'search_items'       => 'Buscar podcast',
      'not_found'          => 'N&atilde;o encontrado',
      'not_found_in_trash' => 'N&atilde;o encontrado',
      'parent_item_colon'  => '',
      'menu_name'          => 'Podcasts'
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'menu_icon'          => 'dashicons-media-audio',
      'rewrite'            => array( 'slug' => 'podcasts' ),
      'capability_type'    => 'post',
      'menu_position'      => 1,
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'thumbnail' )
    );
  
    register_post_type( 'podcasts', $args );
  }
  add_action( 'init', 'podcast_sertao' );
