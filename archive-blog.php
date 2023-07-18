<?php
get_header('blog');
?>
<section class="ps-blogs container mt-4">
    <div class="row">
        <div class="col-12 col-md-8">
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'colunistas',
                'hide_empty' => false
            ));
            if (!empty($terms)) :
            ?>
                <div class="row">
                    <div class="w-100 bg-light border p-3 d-flex justify-content-center mb-4">
                        <?php get_template_part('parts/ads-top'); ?>
                    </div>
                    <?php
                    foreach ($terms as $term) :
                        $avatar = get_field('ps_colunistas_foto', 'colunistas_' . $term->term_id);
                    ?>
                        <div class="ps-blogs col-12 col-md-6 mb-3">
                            <div class="w-100 d-flex ps-blogs--writer p-3 border bg-light align-items-center">
                                <div>
                                    <a href="<?php echo get_term_link($term->term_id, 'colunistas'); ?>" title="Ver todas as colunas de <?php echo $term->name; ?>">
                                        <figure class="ps-blogs--avatar m-0" data-thumb-post="<?php echo $avatar; ?>"></figure>
                                    </a>
                                </div>
                                <div class="text-center flex-grow-1">
                                    <h5 class="font-title"><a href="<?php echo get_term_link($term->term_id, 'colunistas'); ?>" title="Ver todas as colunas de <?php echo $term->name; ?>"><?php echo $term->name; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-12 col-md-4">
            <?php get_sidebar('tag'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>