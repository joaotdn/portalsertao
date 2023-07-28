<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/google-analytics'); ?>
    <?php get_template_part('parts/head-content'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    get_template_part('parts/header-blog');
    get_template_part('parts/offcanvas');
    get_template_part('parts/scroll-menu');
    ?>