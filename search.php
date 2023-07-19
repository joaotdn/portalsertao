<?php
get_header();
?>
<section class="container search-page mt-4">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 bg-light border p-3 d-flex justify-content-center mb-4">
                        <?php get_template_part('parts/ads-top'); ?>
                    </div>
                </div>

                <div class="col-12">
                    <div class="w-100 bg-light text-primary py-2 border-start border-4 border-danger my-4">
                        <h4 class="m-0 font-title ps-2"><i class="fa-solid fa-magnifying-glass"></i> Busca por "<?php echo get_search_query(); ?>"</h4>
                    </div>
                </div>

                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        global $post_id;
                        $meta = get_post_meta($post->ID);
                ?>
                        <div class="col-12">
                            <div class="w-100 mb-3 pb-3 ps-category-item border-bottom">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="font-title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                                        <p class="text-excerpt"><small><?php echo get_the_excerpt($post->ID); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; else : ?>
                    <div class="col-12">
                        <h3 class="width-100"><?php _e('Sem resultados...'); ?></h3>
                    </div>
                <?php endif; ?>

                <div class="col-12">
                    <div class="w-100 ps-pagination mt-4 d-flex justify-content-center">
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
        </div>

        <div class="col-12 col-md-4">
            <?php get_sidebar('tag'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>