<?php
$obj = get_queried_object();
$term = $obj->ID ? get_the_terms($obj->ID, 'colunistas') : array($obj);


if (!empty($term)) :
    $term = $term[0];
    $args = array(
        'posts_per_page' => 3,
        'meta_key' => 'wpb_post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'post_type' => 'tvsertao',
        'tax_query' => array(
            array(
                'taxonomy' => 'colunistas',
                'field' => 'term_id',
                'terms' => $term->term_id
            )
        )
    );
    $relateds = get_posts($args);
?>
    <div class="w-100 p-3 bg-light border d-flex ps-writer mb-4">
        <div class="row">
        <?php
            $avatar = get_field('ps_colunistas_foto', 'colunistas_' . $term->term_id);  
            if ($avatar):
        ?>
            <div class="col-auto">
                <a href="<?php echo get_term_link($term->term_id, 'colunistas'); ?>" title="Todas as colunas de <?php echo $term->name; ?>" class="ps-writer--avatar d-block" data-thumb-post="<?php echo $avatar; ?>"></a>
            </div>
        <?php endif; ?>
            <div class="col">
                <h5 class="font-title mb-3">
                    <a href="<?php echo get_term_link($term->term_id, 'colunistas'); ?>" title="Todas as colunas de <?php echo $term->name; ?>" class="ps-writer--avatar"><?php echo $term->name; ?></a>
                </h5>
                <p class="m-0"><?php echo $term->description; ?></p>
            </div>
        </div>
    </div>
<?php
    get_template_part('parts/widget-tv-radios');
    
    if (!empty($relateds)) :
?>
        <div class="w-100 mt-4">
            <h6 class="w-100 border-bottom border-3 pb-2 m-0 ps-widget--title"><i class="fa-solid fa-fire"></i> Mais lidas de <strong><?php echo $term->name; ?></strong></h6>
            <nav class="w-100 mt-3 border-bottom">
                <?php foreach ($relateds as $related) : $th = get_field('ps_video_id', $related->ID); ?>
                    <div class="row mb-3">
                        <?php if ($th) : ?>
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