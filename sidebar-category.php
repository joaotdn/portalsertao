<?php
$obj = get_queried_object();

get_template_part('parts/widget-tv-radios');

$args = array('posts_per_page' => 3, 'cat' => $obj->term_id, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC');
$relateds = get_posts($args);
if (!empty($relateds)) :
?>
    <div class="w-100 mt-4">
        <h6 class="w-100 border-bottom border-3 pb-2 m-0 ps-widget--title"><i class="fa-solid fa-fire"></i> Mais lidas em <?php echo $obj->name; ?></h6>
        <nav class="w-100 mt-3 border-bottom">
            <?php foreach ($relateds as $related) : ?>
                <div class="row mb-3">
                    <div class="col-auto">
                        <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>" class="d-block">
                            <img src="<?php echo get_the_post_thumbnail_url($related->ID, 'ps-thumb-small') ?>" alt="<?php echo get_the_title($related->ID); ?>">
                        </a>
                    </div>
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
    </div>
<?php
endif;
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