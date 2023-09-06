<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/google-analytics'); ?>
    <?php get_template_part('parts/head-content'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v17.0&appId=3296324287290689&autoLogAppEvents=1" nonce="8DCL3lgG"></script>
    <?php
    get_template_part('parts/header-podcasts');
    get_template_part('parts/offcanvas');
    get_template_part('parts/scroll-menu');
    ?>