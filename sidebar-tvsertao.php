<?php
$obj = get_queried_object();

get_template_part('parts/widget-tv-radios');

$term = $obj->ID ? get_the_terms($obj->ID, 'programas') : array($obj);

if (!empty($term)):
$term = $term[0];
$args = array(
    'posts_per_page' => 3,
    'meta_key' => 'wpb_post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'post_type' => 'tvsertao',
    'tax_query' => array(
        array(
            'taxonomy' => 'programas',
            'field' => 'term_id',
            'terms' => $term->term_id
        )
    )
);
$relateds = get_posts($args);
if (!empty($relateds)) :
?>
    <div class="w-100 mt-4">
        <h6 class="w-100 border-bottom border-3 pb-2 m-0 ps-widget--title"><i class="fa-solid fa-fire"></i> Mais vistas em <strong><?php echo $term->name; ?></strong></h6>
        <nav class="w-100 mt-3 border-bottom">
            <?php foreach ($relateds as $related) : $th = get_field('ps_video_id', $related->ID); ?>
                <div class="row mb-3">
                    <?php if ($th): ?>
                    <div class="col-auto">
                        <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>" class="d-block">
                            <img src="https://img.youtube.com/vi/<?php echo $th; ?>/0.jpg" alt="<?php echo get_the_title($related->ID); ?>" width="100">
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="col">
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