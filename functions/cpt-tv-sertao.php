<?php

function tv_sertao_init() {
    $labels = array(
      'name'               => 'Vídeo',
      'singular_name'      => 'Vídeo',
      'add_new'            => 'Adicionar Novo',
      'add_new_item'       => 'Adicionar novo vídeo',
      'edit_item'          => 'Editar vídeo',
      'new_item'           => 'Novo vídeo',
      'all_items'          => 'Todos os vídeos',
      'view_item'          => 'Ver vídeo',
      'search_items'       => 'Buscar vídeo',
      'not_found'          => 'N&atilde;o encontrado',
      'not_found_in_trash' => 'N&atilde;o encontrado',
      'parent_item_colon'  => '',
      'menu_name'          => 'TV Sertão'
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'menu_icon'          => 'dashicons-format-video',
      'rewrite'            => array( 'slug' => 'tv-sertao' ),
      'capability_type'    => 'post',
      'menu_position'      => 1,
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author' )
    );
  
    register_post_type( 'tvsertao', $args );
  
    $labels = array(
      'name'              => __( 'Programas'),
      'singular_name'     => __( 'Programa'),
      'search_items'      =>  __( 'Buscar' ),
      'popular_items'     => __( 'Mais usados' ),
      'all_items'         => __( 'Todos os programas' ),
      'parent_item'       => null,
      'parent_item_colon' => null,
      'edit_item'         => __( 'Adicionar novo' ),
      'update_item'       => __( 'Atualizar' ),
      'add_new_item'      => __( 'Adicionar novo programa' ),
      'new_item_name'     => __( 'Novo' )
      );
  
    register_taxonomy("programas", array("tvsertao"), array(
      "hierarchical"      => false, 
      "labels"            => $labels, 
      "singular_label"    => "Programa", 
      "rewrite"           => true,
      "add_new_item"      => "Adicionar novo programa",
      "new_item_name"     => "Novo programa",
    ));
  }
  add_action( 'init', 'tv_sertao_init' );
