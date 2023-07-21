<?php
get_header('category');
?>
<section class="container mt-4 epb-category">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
            <div class="row px-0">
                <div class="col-12 mb-4">
                    <div class="w-100 bg-light d-flex bg-light border justify-content-center">
                        <?php get_template_part('parts/ads-top'); ?>
                    </div>
                </div>
                <?php // TODO colocar as mais lidas de cada tag 
                ?>
                <div class="col-12 epb-category__list">
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();
                            global $post_id;
                            $meta = get_post_meta($post->ID);
                    ?>
                            <div class="w-100 mb-3 pb-3 ps-category-item border-bottom">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'ps-thumb-small') ?>" alt="<?php the_title(); ?>">
                                        </a>
                                    </div>
                                    <div class="col">
                                        <?php
                                        $post_key = get_field('ps_post_chapeu', $post->ID);
                                        if ($post_key) {
                                            echo "<p class=\"font-tag\">{$post_key}</p>";
                                        }
                                        ?>
                                        <h5 class="font-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                                        <p class="text-excerpt"><small><?php echo get_the_excerpt($post->ID); ?></small></p>
                                    </div>
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
            <?php get_sidebar('tag'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>