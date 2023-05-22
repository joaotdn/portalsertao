<?php
$category_id = get_cat_ID('Variedades');
$posts = get_posts(array(
    'posts_per_page' => 4,
    'cat' => $category_id,
    'meta_query'     => array(
        'relation'        => 'AND',
        array(
            'key'        => 'epb_destaques',
            'value'      => 'destaque1',
            'compare'    => '!='
        ),
        array(
            'key'        => 'epb_destaques',
            'value'      => 'destaque2',
            'compare'    => '!='
        ),
        array(
            'key'        => 'epb_destaques',
            'value'      => 'destaque3',
            'compare'    => '!='
        )
    )
));
$tags = get_category_tags(array('categories' => $category_id));
?>
<section class="epb-varieties epb-section container">
    <header class="row epb-section__header mb-4">
        <div class="col-12 d-flex justify-content-between border-bottom ">
            <h1 class="epb-section__header--title font-title fs-4 text-info fw-semibold m-0">
                <a href="<?php echo get_category_link($category_id); ?>" title="Ver mais notícias em Variedades" class="text-info">Variedades</a>
            </h1>
            <ul class="nav epb-section__header--tags m-0 ps-4 d-none d-md-flex">
                <?php foreach ($tags as $tag) : ?>
                    <li class="ps-1 nav-item">
                        <a href="<?php echo $tag->tag_link; ?>" title="Ir para <?php echo $tag->tag_name; ?>" class="badge text-bg-info fw-light"><?php echo $tag->tag_name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo get_category_link($category_id); ?>" title="Leia mais notícias em Variedades" class="ms-auto text-info">
                <i class="fa-solid fa-list"></i>
            </a>
        </div>
    </header>

    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ebp-thumb-horizontally'); ?>" alt="<?php echo $posts[0]->post_title; ?>">
                    </a>
                    <p class="mb-0 mt-3 font-tag">
                        <?php echo wp_get_post_tags($posts[0]->ID)[0]->name; ?>
                    </p>
                    <h1 class="font-title fs-6">
                        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>"><?php echo $posts[0]->post_title; ?></a>
                    </h1>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[1]->post_title; ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($posts[1]->ID, 'ebp-thumb-horizontally'); ?>" alt="<?php echo $posts[1]->post_title; ?>">
                    </a>
                    <p class="mb-0 mt-3 font-tag">
                        <?php echo wp_get_post_tags($posts[1]->ID)[0]->name; ?>
                    </p>
                    <h1 class="font-title fs-6">
                        <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[1]->post_title; ?>"><?php echo $posts[1]->post_title; ?></a>
                    </h1>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <p class="related-link d-flex align-items-stretchs fs-6 fs-lg-4">
                        <span class="related-link__icon d-inline-block">
                            <i class="fa-solid fa-arrow-right-to-bracket text-primary"></i>
                        </span>
                        <a href="<?php echo get_the_permalink($posts[2]->ID); ?>" title="<?php echo $posts[2]->post_title; ?>" class="d-inline-block ps-2">
                            <small>
                                <?php echo $posts[2]->post_title; ?>
                            </small>
                        </a>
                    </p>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <p class="related-link d-flex align-items-stretchs fs-6 fs-lg-4">
                        <span class="related-link__icon d-inline-block">
                            <i class="fa-solid fa-arrow-right-to-bracket text-primary"></i>
                        </span>
                        <a href="<?php echo get_the_permalink($posts[3]->ID); ?>" title="<?php echo $posts[3]->post_title; ?>" class="d-inline-block ps-2">
                            <small>
                                <?php echo $posts[3]->post_title; ?>
                            </small>
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="features-sidebar-ads text-center">
                        <figure class="ads--300 border bg-light d-inline-block">
                            <span class="text-"><small>Publicidade</small></span>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>