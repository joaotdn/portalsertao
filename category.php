<?php
get_header();
$category = get_queried_object();
$tags = get_category_tags(array('categories' => $category->term_id));
?>
<section class="container mt-4 epb-category">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-12 align-items-center d-flex justify-content-center">
                    <figure class="ads--720 p-2 border bg-light">
                        <span class="text-muted"><small>Publicidade</small></span>
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row px-0">
                <div class="col-12 bg-light text-primary py-2 border-start border-4 border-info mb-4">
                    <h4 class="m-0 font-title"><i class="fa-regular fa-folder-open"></i> <?php echo single_term_title(); ?></h4>
                </div>

                <div class="col-12 epb-category__list">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                            global $post_id;
                            $meta = get_post_meta($post->ID);
                    ?>
                            <div class="d-flex mb-3">
                                <div class="flex-shrink-0">
                                    <?php
                                    if ($meta['epb_videos_id'] && !empty($meta['epb_videos_id'][0])) :
                                    ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block border border-info">
                                            <img src="https://img.youtube.com/vi/<?php echo $meta['epb_videos_id'][0]; ?>/1.jpg" alt="...">
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block border border-info">
                                            <?php echo get_the_post_thumbnail($post->ID, 'ebp-thumb-small'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <p class="m-0">
                                        <span class="font-tag"><?php echo wp_get_post_tags($post->ID)[0]->name; ?></span>
                                        <span class="d-inline-block ms-2 epb-category__list--date">
                                            <small><i class="fa-regular fa-calendar"></i> <?php echo get_the_date('d/m/Y'); ?></small>
                                        </span>
                                    </p>
                                    <h1 class="font-title fs-6 fs-lg-2">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        <?php endwhile;
                    else : ?>
                        <h3 class="width-100"><?php _e('Sem resultados...'); ?></h3>
                    <?php endif; ?>
                </div>

                <div class="col-12 epb-category__pagination my-4 d-flex justify-content-center">
                    <nav aria-label="Pagination">
                        <?php
                        global $wp_query;
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages,
                            'next_text' => '&raquo;',
                            'prev_text' => '&laquo;',
                            'type' => 'list',
                        ));
                        ?>
                    </nav>
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
                    <h4>Últimas Tags</h4>
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