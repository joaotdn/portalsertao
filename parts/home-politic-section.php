<?php
$category_id = get_cat_ID('Politica');
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
<section class="epb-politic epb-section container">
    <header class="row epb-section__header mb-4">
        <div class="col-12 d-flex justify-content-between border-bottom ">
            <h1 class="epb-section__header--title font-title fs-4 text-primary fw-semibold m-0">
                <a href="<?php echo get_category_link($category_id); ?>" title="Ver todas as notícias em Política">Política</a>
            </h1>
            <ul class="nav epb-section__header--tags m-0 ps-4 d-none d-md-flex">
                <?php foreach ($tags as $tag) : ?>
                    <li class="ps-1 nav-item">
                        <a href="<?php echo $tag->tag_link; ?>" title="Ir para <?php echo $tag->tag_name; ?>" class="badge text-bg-primary fw-light"><?php echo $tag->tag_name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo get_category_link($category_id); ?>" title="Leia mais notícias sobre Política" class="ms-auto">
                <i class="fa-solid fa-list"></i>
            </a>
        </div>
    </header>
    <div class="row epb-section__content">
        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>" class="col-12 col-md-6 bg-cover epb-section__content--big position-relative" style="background-image: url('<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ebp-thumb-large') ?>');">
            <div class="position-absolute p-3">
                <div class="col-12">
                    <p class="m-0 font-tag w-100">
                        <?php echo wp_get_post_tags($posts[0]->ID)[0]->name; ?>
                    </p>
                </div>
                <div class="col-12">
                    <h1 class="font-title fs-4 w-100 m-0">
                        <span><?php echo $posts[0]->post_title; ?></span>
                    </h1>
                </div>
            </div>
        </a>

        <div class="col-12 col-md-6 ps-md-4">
            <div class="row">
                <div class="col-12">
                    <p class="m-0 font-tag">
                        <?php echo wp_get_post_tags($posts[1]->ID)[0]->name; ?>
                    </p>
                    <h1 class="font-title fs-4 fs-lg-2">
                        <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[1]->post_title; ?>">
                            <?php echo $posts[1]->post_title; ?>
                        </a>
                    </h1>
                    <p class="text-excerpt">
                        <small><?php echo substr(get_the_excerpt($posts[1]->ID), 0, 200); ?> [...]</small>
                    </p>
                </div>

                <figure class="col-3 text-center my-4">
                    <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[2]->post_title; ?>" class="d-inline-block">
                        <img src="<?php echo get_the_post_thumbnail_url($posts[2]->ID, 'ebp-thumb-small') ?>" alt="<?php echo $posts[2]->post_title; ?>">
                    </a>
                </figure>
                <div class="col-9">
                    <p class="m-0 font-tag">
                        <?php echo wp_get_post_tags($posts[2]->ID)[0]->name; ?>
                    </p>
                    <h1 class="font-title fs-6 fs-lg-5">
                        <a href="<?php echo get_the_permalink($posts[2]->ID); ?>" title="<?php echo $posts[2]->post_title; ?>"><?php echo $posts[2]->post_title; ?></a>
                    </h1>
                    <p class="text-excerpt">
                        <small><?php echo substr(get_the_excerpt($posts[2]->ID), 0, 200); ?> [...]</small>
                    </p>
                </div>
                <div class="col-12">
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
    </div>
</section>