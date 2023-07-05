<?php

function blog_init() {
    $labels = array(
      'name'               => 'Blog',
      'singular_name'      => 'Blog',
      'add_new'            => 'Adicionar Novo',
      'add_new_item'       => 'Adicionar novo blog',
      'edit_item'          => 'Editar Blog',
      'new_item'           => 'Novo Blog',
      'all_items'          => 'Todos os Blog',
      'view_item'          => 'Ver Blog',
      'search_items'       => 'Buscar Blog',
      'not_found'          => 'N&atilde;o encontrado',
      'not_found_in_trash' => 'N&atilde;o encontrado',
      'parent_item_colon'  => '',
      'menu_name'          => 'Blog'
    );
  
    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'menu_icon'          => 'dashicons-format-status',
      'rewrite'            => array( 'slug' => 'blog' ),
      'capability_type'    => 'post',
      'menu_position'      => 1,
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
    );
  
    register_post_type( 'blog', $args );
  
    $labels = array(
      'name'              => __( 'Colunistas'),
      'singular_name'     => __( 'Colunista'),
      'search_items'      =>  __( 'Buscar' ),
      'popular_items'     => __( 'Mais usados' ),
      'all_items'         => __( 'Todos os colunistas' ),
      'parent_item'       => null,
      'parent_item_colon' => null,
      'edit_item'         => __( 'Adicionar novo' ),
      'update_item'       => __( 'Atualizar' ),
      'add_new_item'      => __( 'Adicionar novo Colunista' ),
      'new_item_name'     => __( 'Nova' )
      );
  
    register_taxonomy("colunistas", array("blog"), array(
      "hierarchical"      => true, 
      "labels"            => $labels, 
      "singular_label"    => "Colunista", 
      "rewrite"           => true,
      "add_new_item"      => "Adicionar novo Colunista",
      "new_item_name"     => "Novo Colunista",
    ));
  }
  add_action( 'init', 'blog_init' );
