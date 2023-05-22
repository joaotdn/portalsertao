<?php
$posts = get_posts(array(
    'posts_per_page' => 3,
    'orderby' => 'meta_value',
    'order'   => 'ASC',
    'meta_query'     => array(
        'relation'        => 'AND',
        array(
            'relation'        => 'OR',
            array(
                'key'        => 'epb_destaques',
                'value'      => 'destaque1',
                'compare'    => '='
            ),
            array(
                'key'        => 'epb_destaques',
                'value'      => 'destaque2',
                'compare'    => '='
            ),
            array(
                'key'        => 'epb_destaques',
                'value'      => 'destaque3',
                'compare'    => '='
            )
        )
    )
));
?>
<section class="epb-home-features container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-12 align-items-center d-flex justify-content-center">
                    <figure class="ads--720 p-2 border bg-light">
                        <span class="text-muted"><small>Publicidade</small></span>
                    </figure>
                </div>
                <div class="col-12 mt-3">
                    <p class="m-0 font-tag">
                        <?php echo wp_get_post_tags($posts[0]->ID)[0]->name; ?>
                    </p>
                    <h1 class="font-title fs-4 fs-lg-2">
                        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>">
                            <?php echo $posts[0]->post_title; ?>
                        </a>
                    </h1>
                    <p class="text-excerpt">
                        <small><?php echo substr(get_the_excerpt($posts[0]->ID), 0, 200); ?> [...]</small>
                    </p>
                </div>

                <div class="col-12 col-md-6 col-lg-8 mt-4">
                    <div class="row">
                        <figure class="col-12 col-lg-6 text-center">
                            <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[1]->post_title; ?>" class="d-inline-block">
                                <?php echo get_the_post_thumbnail($posts[1]->ID, 'ebp-thumb-medium'); ?>
                            </a>
                        </figure>
                        <div class="col-12 col-lg-6">
                            <p class="m-0 font-tag">
                                <?php echo wp_get_post_tags($posts[1]->ID)[0]->name; ?>
                            </p>
                            <h1 class="font-title fs-6 fs-lg-5">
                                <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo $posts[1]->post_title; ?>"><?php echo $posts[1]->post_title; ?></a>
                            </h1>
                            <p class="text-excerpt">
                                <small><?php echo substr(get_the_excerpt($posts[1]->ID), 0, 100); ?> [...]</small>
                            </p>
                        </div>

                        <div class="col-12 d-none d-lg-block">
                            <p class="m-0 font-tag">
                                <?php echo wp_get_post_tags($posts[2]->ID)[0]->name; ?>
                            </p>
                            <h1 class="font-title fs-4">
                                <a href="<?php echo get_the_permalink($posts[2]->ID); ?>" title="<?php echo $posts[2]->post_title; ?>">
                                    <?php echo $posts[2]->post_title; ?>
                                </a>
                            </h1>
                            <?php
                            $category = get_the_category($posts[2]->ID);
                            $posts = get_posts(array(
                                'posts_per_page' => 1,
                                'cat' => $category[0]->cat_ID,
                                'post__not_in' => array($posts[0]->ID, $posts[1]->ID, $posts[2]->ID),
                            ));
                            ?>
                            <p class="related-link d-flex align-items-stretchs fs-6 fs-lg-4">
                                <span class="related-link__icon d-inline-block">
                                    <i class="fa-solid fa-arrow-right-to-bracket text-primary"></i>
                                </span>
                                <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>" class="d-inline-block ps-2">
                                    <small>
                                    <?php echo $posts[0]->post_title; ?>
                                    </small>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <?php
                get_template_part('parts/home-features-slider');
                ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3 ps-lg-4">
            <?php
            get_template_part('parts/home-features-sidebar');
            ?>
        </div>
    </div>
</section>