<?php
$obj = get_queried_object();

get_template_part('parts/widget-tv-radios');

$categories = get_the_category($obj->ID);
if (!empty($categories)) :
    $category_id = $categories[0]->term_id;
    $relateds = get_posts(array(
        'cat' => $category_id,
        'post__not_in' => array($obj->ID),
        'posts_per_page' => 3
    ));
    if (!empty($relateds)) :
?>
        <div class="w-100 ps-widget mt-4">
            <h6 class="w-100 border-bottom border-3 pb-2 m-0 ps-widget--title"><i class="fa-regular fa-folder"></i> Notícias relacionadas</h6>
            <nav class="w-100 mt-3">
                <?php foreach ($relateds as $related) : ?>
                    <div class="row mb-3">
                        <?php if (has_post_thumbnail($related->ID)) : ?>
                        <div class="col-auto">
                            <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>" class="d-block">
                                <img src="<?php echo get_the_post_thumbnail_url($related->ID, 'ps-thumb-small') ?>" alt="<?php echo get_the_title($related->ID); ?>">
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="col">
                            <?php
                            $post_key = get_field('ps_post_chapeu', $related->ID);
                            if ($post_key) {
                                echo "<p class=\"font-tag\">{$post_key}</p>";
                            }
                            ?>
                            <h6 class="font-title">
                                <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>"><?php echo get_the_title($related->ID); ?></a>
                            </h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </nav>
            <a href="<?php echo get_category_link($category_id); ?>" title="Veja mais notícias relacionadas" class="w-100 btn btn-outline-primary btn-sm">Veja mais</a>
        </div>
    <?php
    endif;
endif;

$cities = get_the_terms($obj->ID, 'cities');
if (!empty($cities) && $cities[0]->name != 'NULL') :
    ?>
    <div class="w-100 p-3 bg-light border mt-4">
        <h5 class="font-title w-100 text-center border-bottom pb-2"><a href="<?php echo get_term_link($cities[0]->term_id, 'cities') ?>" title="Ver notícias em <?php echo $cities[0]->name; ?>"><i class="fa-solid fa-location-dot"></i> <?php echo $cities[0]->name; ?></a></h5>
        <a href="<?php echo get_term_link($cities[0]->term_id, 'cities') ?>" class="w-100 btn btn-primary btn-sm rounded-0 mt-2" title="Ver notícias em <?php echo $cities[0]->name; ?>">Notícias sobre o munícipio</a>
    </div>
<?php endif; ?>

<?php
// ps_ads_topo
$ads_int  = get_field('ps_ads_internas', 'option');
if ($ads_int) :
?>
    <div class="w-100 border p-2 bg-light d-flex justify-content-center mt-4">
        <?php
        shuffle($ads_int);
        $ads_int = $ads_int[0];
        if ($ads_int['ps_ads_internas_link']) {
        ?>
            <a href="<?php echo $ads_int['ps_ads_internas_link']; ?>" target="_blank" title="">
                <img src="<?php echo $ads_int['ps_ads_internas_conteudo']; ?>" alt="Anúncio">
            </a>
        <?php } else { ?>
            <img src="<?php echo $ads_int['ps_ads_internas_conteudo']; ?>" alt="Anúncio">
    <?php }
        echo "</div>";
    endif; ?>