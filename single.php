<?php
get_header();
$category = get_the_category();
$meta = get_post_meta($post->ID);
$relateds = get_posts(array(
    'posts_per_page' => 3,
    'cat' => $category[0]->term_id,
    'post__not_in' => array($post->ID)
));
$tags = get_category_tags(array('categories' => $category[0]->term_id));
?>

<section class="container mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-12 align-items-center d-flex justify-content-center">
                    <figure class="ads--720 p-2 border bg-light">
                        <span class="text-muted"><small>Publicidade</small></span>
                    </figure>
                </div>

                <div class="col-12 epb-single">
                    <div class="epb-single__header mb-3">
                        <p class="m-0 font-tag">
                            <a href="<?php echo get_category_link($category[0]->term_id); ?>" title="<?php echo $category[0]->name; ?>"><?php echo $category[0]->name; ?></a> <i class="fa-solid fa-angles-right"></i>
                            <?php echo wp_get_post_tags($post->ID)[0]->name; ?>
                        </p>
                        <h3 class="font-title">
                            <?php the_title(); ?>
                        </h3>
                        <p class="text-excerpt fst-italic fw-lighter">
                            <small><?php echo substr(get_the_excerpt($post->ID), 0, 200); ?> [...]</small>
                        </p>
                        <div class="d-flex epb-single__header--info py-2 border border-info border-start-0 border-end-0">
                            <span class="d-inline-block me-2">
                                <i class="fa-solid fa-user"></i>
                                <?php echo get_the_author_meta('display_name', $post->post_author); ?>
                            </span>
                            <span class="d-inline-block"><i class="fa-regular fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></span>
                            <div class="ms-auto">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="d-inline-block ms-2" title="Compartilhar no Facebook"><i class="fa-brands fa-facebook"></i></a>

                                <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" target="_blank" class="d-inline-block ms-2" title="Compartilhar no Twitter"><i class="fa-brands fa-twitter"></i></a>

                                <a href="#epb-single-comments" class="d-inline-block ms-2" title="Ir para comentários"><i class="fa-regular fa-comment"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="epb-single__adjusts my-3 fs-6 d-flex justify-content-end">
                        <a href="#" title="Aumentar fonte" class="single-fz-plus d-inline-block me-2 text-muted">
                            <i class="fa-solid fa-font"></i>+
                        </a>
                        <a href="#" title="Diminuir fonte" class="single-fz-minor text-muted">
                            <i class="fa-solid fa-font"></i>-
                        </a>
                    </div>

                    <div class="epb-single__content w-100">
                        <?php
                        if ($meta['epb_videos_id'] && !empty($meta['epb_videos_id'][0])) :
                        ?>
                            <div class="ratio ratio-16x9 mb-4">
                                <iframe src="https://www.youtube.com/embed/<?php echo $meta['epb_videos_id'][0]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        <?php
                        endif;
                        the_content();
                        ?>
                    </div>

                    <div id="epb-single-comments" class="epb-single__comments w-100 mb-4">
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="" data-numposts="5"></div>
                    </div>

                    <div class="epb-single__related w-100 mb-4">
                        <div class="row p-0">
                            <div class="col-12 mb-3">
                                <h4>Notícias relacionadas</h4>
                                <div class="border-bottom border-info w-100"></div>
                            </div>
                            <?php
                            foreach ($relateds as $related) :
                            ?>
                                <div class="col-md-4 col-12">
                                    <figure class="w-100 mb-3">
                                        <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo $related->post_title; ?>" class="d-inline-block">
                                            <?php echo get_the_post_thumbnail($related->ID, 'ebp-thumb-medium'); ?>
                                        </a>
                                    </figure>
                                    <p class="m-0 font-tag">
                                        <?php echo wp_get_post_tags($related->ID)[0]->name; ?>
                                    </p>
                                    <h1 class="font-title fs-6 fs-lg-5">
                                        <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo $related->post_title; ?>"><?php echo $related->post_title; ?></a>
                                    </h1>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="epb-single__sidebar">
                <figure class="epb-blog-link mb-4 text-center">
                    <a href="https://blogdoespiao.com.br/" class="d-inline-block" target="_blank" title="Visite no Blog do Espião">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-banner.png" alt="Banner do Blog do Espião" class="rounded">
                    </a>
                </figure>

                <?php get_template_part('parts/radios'); ?>

                <div class="features-sidebar-ads text-center my-4">
                    <figure class="ads--300 border bg-light d-inline-block">
                        <span class="text-"><small>Publicidade</small></span>
                    </figure>
                </div>

                <div class="w-100 mb-4">
                    <h4>Tags relacionadas</h4>
                    <div class="border-bottom border-info w-100"></div>
                    <div class="mt-3">
                        <?php
                        foreach ($tags as $tag) :
                        ?>
                            <a href="<?php echo $tag->tag_link; ?>" title="Ir para <?php echo $tag->tag_name; ?>" class="badge text-bg-primary fw-light"><?php echo $tag->tag_name; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>