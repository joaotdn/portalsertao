<?php
$destaque1 = get_posts(array(
    'posts_per_page' => 1,
    'meta_key'       => 'ps_top_manchete',
    'meta_value'     => 'destaque1'
));

$destaque2 = get_posts(array(
    'posts_per_page' => 1,
    'meta_key'       => 'ps_top_manchete',
    'meta_value'     => 'destaque2'
));

$destaque3 = get_posts(array(
    'posts_per_page' => 1,
    'meta_key'       => 'ps_top_manchete',
    'meta_value'     => 'destaque3'
));

$destaque4 = get_posts(array(
    'posts_per_page' => 1,
    'meta_key'       => 'ps_top_manchete',
    'meta_value'     => 'destaque4'
));

$destaque5 = get_posts(array(
    'posts_per_page' => 1,
    'meta_key'       => 'ps_top_manchete',
    'meta_value'     => 'destaque5'
));

$number_post = 5;
$ads_slider = get_field('ps_slider_anuncios', 'option');
if ($ads_slider && !empty($ads_slider)) {
    $number_post = $number_post - count($ads_slider);
}
$sliders = get_posts(array(
    'posts_per_page' => $number_post,
    'meta_key'       => 'ps_home_slide',
    'meta_value'     => true
));
?>
<section class="ps-home-features container mt-3 mt-md-5">
    <div class="row p-0">
        <div class="col-12 col-md-8">
            <div class="row">
                <?php if (isset($destaque1[0])) : ?>
                    <div class="col-12 mb-3">
                        <?php
                        $post_key = get_field('ps_post_chapeu', $destaque1[0]->ID);
                        if ($post_key) {
                            echo "<p class=\"font-tag\">{$post_key}</p>";
                        }
                        ?>
                        <h2 class="font-title">
                            <a href="<?php echo get_the_permalink($destaque1[0]->ID) ?>" title="<?php echo get_the_title($destaque1[0]->ID); ?>">
                                <?php echo get_the_title($destaque1[0]->ID); ?>
                            </a>
                        </h2>
                        <p class="text-excerpt"><?php echo get_the_excerpt($destaque1[0]->ID); ?></p>
                    </div>
                <?php endif; ?>

                <div class="col-12">
                    <div class="row">
                        <?php if (isset($destaque2[0])) : ?>
                            <div class="col-12 col-md-6 mb-3">
                                <?php
                                $post_key = get_field('ps_post_chapeu', $destaque2[0]->ID);
                                if ($post_key) {
                                    echo "<p class=\"font-tag\">{$post_key}</p>";
                                }
                                ?>
                                <h5 class="font-title">
                                    <a href="<?php echo get_the_permalink($destaque2[0]->ID) ?>" title="<?php echo get_the_title($destaque2[0]->ID); ?>">
                                        <?php echo get_the_title($destaque2[0]->ID); ?>
                                    </a>
                                </h5>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($destaque3[0])) : ?>
                            <div class="col-12 col-md-6 mb-3">
                                <?php
                                $post_key = get_field('ps_post_chapeu', $destaque3[0]->ID);
                                if ($post_key) {
                                    echo "<p class=\"font-tag\">{$post_key}</p>";
                                }
                                ?>
                                <h5 class="font-title">
                                    <a href="<?php echo get_the_permalink($destaque3[0]->ID) ?>" title="<?php echo get_the_title($destaque3[0]->ID); ?>">
                                        <?php echo get_the_title($destaque3[0]->ID); ?>
                                    </a>
                                </h5>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($destaque4[0])) : ?>
                            <div class="col-12 col-md-6 mb-3">
                                <a href="<?php echo get_the_permalink($destaque4[0]->ID) ?>" title="<?php echo get_the_title($destaque4[0]->ID); ?>" class="w-100 ps-media-news bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($destaque4[0]->ID, 'ps-thumb-large'); ?>">
                                    <span class="ps-media-news--tag d-inline-block p-2 bg-danger text-light text-uppercase">
                                        <?php
                                        $post_key = get_field('ps_post_chapeu', $destaque4[0]->ID);
                                        if ($post_key) {
                                            echo $post_key;
                                        }
                                        ?>
                                    </span>
                                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($destaque4[0]->ID); ?></h5>
                                    <span class="ps-media-news--mask d-block"></span>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($destaque5[0])) : ?>
                            <div class="col-12 col-md-6 mb-3">
                                <a href="<?php echo get_the_permalink($destaque5[0]->ID) ?>" title="<?php echo get_the_title($destaque5[0]->ID); ?>" class="w-100 ps-media-news bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($destaque5[0]->ID, 'ps-thumb-large'); ?>">
                                    <span class="ps-media-news--tag d-inline-block p-2 bg-danger text-light text-uppercase">
                                        <?php
                                        $post_key = get_field('ps_post_chapeu', $destaque5[0]->ID);
                                        if ($post_key) {
                                            echo $post_key;
                                        }
                                        ?>
                                    </span>
                                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($destaque5[0]->ID); ?></h5>
                                    <span class="ps-media-news--mask d-block"></span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (get_field('ps_ads_destaques', 'option')) : ?>
                    <div class="col-12">
                        <div class="w-100 bg-light p-2 border text-center mb-3 ads-features justify-content-center">
                            <?php
                            // ps_ads_topo
                            $ads_feat  = get_field('ps_ads_destaques', 'option');
                            shuffle($ads_feat);
                            $ads_feat = $ads_feat[0];
                            if ($ads_feat['ps_ads_destaques_link']) {
                            ?>
                                <a href="<?php echo $ads_feat['ps_ads_destaques_link']; ?>" target="_blank">
                                    <img src="<?php echo $ads_feat['ps_ads_destaques_conteudo']; ?>" alt="">
                                </a>
                            <?php } else { ?>
                                <img src="<?php echo $ads_feat['ps_ads_destaques_conteudo']; ?>" alt="">
                            <?php } ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 ps-slide-news" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> .ps-slide-news--item" data-cycle-prev=".ps-slide-news--prev" data-cycle-next=".ps-slide-news--next" data-cycle-pager=".ps-slide-news--pager" data-cycle-pager-template="<span></span>" data-cycle-swipe="true">
                        <?php
                        if (!empty($sliders)) :
                            foreach ($sliders as $slide) :
                        ?>
                                <div class="ps-slide-news--item w-100">
                                    <a href="<?php echo get_the_permalink($slide->ID); ?>" title="<?php echo get_the_title($slide->ID); ?>" class="d-block h-100 bg-cover" data-thumb-post="<?php echo get_the_post_thumbnail_url($slide->ID, 'ps-thumb-large'); ?>">
                                        <h6 class="ps-slide-news--title w-100 d-inline-block p-3 m-0">
                                            <?php
                                            $post_key = get_field('ps_post_chapeu', $slide->ID);
                                            if ($post_key) {
                                                echo "<span class=\"font-tag\"><small>{$post_key}</small></span><br>";
                                            }
                                            ?>
                                            <span class="text-white font-title">
                                                <?php echo get_the_title($slide->ID); ?>
                                            </span>
                                        </h6>
                                    </a>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                        <a href="#" class="ps-slide-news--prev">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                        <a href="#" class="ps-slide-news--next">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                        <div class="ps-slide-news--pager w-100 text-center"></div>
                    </div>
                </div>

                <div class="col-12 my-3 my-md-4">
                    <?php
                    $podcast = get_term_by('name', 'podcast sertao', 'programas');
                    $podcast_list = array();
                    if ($podcast) {
                        $podcast_list = get_posts(
                            array(
                                'posts_per_page' => 6,
                                'post_type' => 'tvsertao',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'programas',
                                        'field' => 'term_id',
                                        'terms' => $podcast->term_id,
                                    )
                                )
                            )
                        );
                    ?>
                        <div class="w-100 ps-podcast bg-danger p-3">
                            <h5 class="ps-podcast--header d-inline-block w-100 mb-3">
                                <a href="<?php echo get_term_link($podcast->term_id, 'programas') ?>" title="Ver todos os Podcasts Sertão">
                                    <i class="fa-solid fa-microphone-lines"></i>
                                    <strong>PodCast</strong> <span class="font-title fw-bold">Sertão</span>
                                </a>
                            </h5>

                            <div class="ps-podcast--content mb-3">
                                <?php
                                if (!empty($podcast_list) && get_field('ps_video_id', $podcast_list[0]->ID)) {
                                    $code = get_field('ps_video_id', $podcast_list[0]->ID);
                                ?>
                                    <a href="#" title="<?php echo $podcast_list[0]->post_title; ?>" data-video-id="<?php echo $code; ?>" class="d-block ps-podcast--figure" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                                        <img src="<?php echo "https://img.youtube.com/vi/{$code}/hqdefault.jpg"; ?>" alt="<?php echo $podcast_list[0]->post_title; ?>" class="w-100">
                                        <h6 class="d-inline-block w-100 mt-3 mb-0 fw-bolder text-white">
                                            <?php echo $podcast_list[0]->post_title; ?>
                                        </h6>
                                    </a>
                                <?php } else { ?>
                                    <div class="ps-podcast--empty d-flex justify-content-center align-items-center w-100 border border-light opacity-75" style="height: 250px;">
                                        <h6 class="text-light fw-lighter d-inline-block m-0">Aguarde...</h6>
                                    </div>
                                <?php } ?>
                            </div>
                            <a href="<?php echo get_term_link($podcast->term_id, 'programas'); ?>" title="Ver todos os Podcasts" class="btn btn-dark w-100 m-0">Ver todos os PodCasts</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
</section>