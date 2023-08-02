<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('parts/google-analytics'); ?>
    <?php get_template_part('parts/head-content'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    get_template_part('parts/radios-online-player');
    get_template_part('parts/header');
    get_template_part('parts/offcanvas');
    get_template_part('parts/scroll-menu');
    ?>

    <?php 
        if (is_home() && get_field('ps_texto_destacado_ativar', 'option')) : 
            $tag = get_field('ps_texto_destacado_chapeu', 'option');
            $title = get_field('ps_texto_destacado_texto', 'option');
            $link = get_field('ps_texto_destacado_link', 'option');
    ?>
        <article class="container mt-5 mb-5 mb-md-none">
            <div class="row">
                <div class="col-12 text-center ps-big-feature">
                    <div class="w-100 p-3 bg-dark rounded-2">
                        <?php
                        if ($tag) {
                            echo "<p class=\"ps-big-feature--tag\">{$tag}</p>";
                        }
                        ?>
                        <h1 class="font-title ps-big-feature--title m-0 text-white">
                            <?php if ($link) { echo "<a href=\"{$link}\" title=\"{$title}\" class=\"text-white\">{$title}</a>"; } else { echo $title; } ?>
                        </h1>
                    </div>
                </div>
            </div>
        </article>
    <?php endif; ?>