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

$sliders = get_posts(array(
    'posts_per_page' => 5,
    'meta_key'       => 'ps_home_slide'
));
?>
<section class="ps-home-features container mt-3 mt-md-5">
    <div class="row p-0">
        <div class="col-12 col-md-8">
            <div class="row">
                <?php if (isset($destaque1[0])) : ?>
                    <div class="col-12">
                        <p class="font-tag"><?php echo get_the_tags($destaque1[0]->ID)[0]->name; ?></p>
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
                            <div class="col-12 col-md-6 mb-md-3">
                                <p class="font-tag"><?php echo get_the_tags($destaque2[0]->ID)[0]->name; ?></p>
                                <h5 class="font-title">
                                    <a href="<?php echo get_the_permalink($destaque2[0]->ID) ?>" title="<?php echo get_the_title($destaque2[0]->ID); ?>">
                                        <?php echo get_the_title($destaque2[0]->ID); ?>
                                    </a>
                                </h5>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($destaque3[0])) : ?>
                            <div class="col-12 col-md-6 mb-md-3">
                                <p class="font-tag"><?php echo get_the_tags($destaque3[0]->ID)[0]->name; ?></p>
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
                                    <span class="ps-media-news--tag d-inline-block p-2 bg-danger text-light text-uppercase"><?php echo get_the_tags($destaque4[0]->ID)[0]->name; ?></span>
                                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($destaque4[0]->ID); ?></h5>
                                    <span class="ps-media-news--mask d-block"></span>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($destaque5[0])) : ?>
                            <div class="col-12 col-md-6 mb-3">
                                <a href="<?php echo get_the_permalink($destaque5[0]->ID) ?>" title="<?php echo get_the_title($destaque5[0]->ID); ?>" class="w-100 ps-media-news bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($destaque5[0]->ID, 'ps-thumb-large'); ?>">
                                    <span class="ps-media-news--tag d-inline-block p-2 bg-danger text-light text-uppercase"><?php echo get_the_tags($destaque5[0]->ID)[0]->name; ?></span>
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
                <div class="col-12 position-relative">
                    <div class="ps-slide-features" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> .card" data-cycle-prev=".nav-features--prev" data-cycle-next=".nav-features--next" data-cycle-pager=".features-pager" data-cycle-pager-template="<span></span>" data-cycle-swipe=true>
                        <?php
                        foreach($sliders as $slide):
                        ?>
                        <div class="card mb-3">
                            <a href="<?php echo get_the_permalink($slide->ID) ?>" title="<?php echo get_the_title($slide->ID); ?>" class="card-img-top">
                                <img src="<?php echo get_the_post_thumbnail_url($slide->ID, 'ps-thumb-horizontally'); ?>" class="" alt="<?php echo get_the_title($slide->ID); ?>">
                            </a>
                            <div class="card-body">
                                <p class="font-tag"><?php echo get_the_tags($slide->ID)[0]->name; ?></p>
                                <a href="<?php echo get_the_permalink($slide->ID) ?>" title="<?php echo get_the_title($slide->ID); ?>">
                                    <h5 class="card-title font-title"><?php echo get_the_title($slide->ID); ?></h5>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="#" class="nav-features--prev nav-features-control" title="Notícia anterior">
                        <i class="fa-solid fa-circle-chevron-left"></i>
                    </a>
                    <a href="#" class="nav-features--next nav-features-control" title="Próxima notícia">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </a>
                    <div class="features-pager col-12 justify-content-center d-flex"></div>
                </div>

                <div class="col-12 my-3 my-md-4">
                    <div class="w-100 ps-coins-indicators p-3">
                        <div class="w-100 mb-3 border-bottom border-1 border-light">
                            <h5 class="text-uppercase"><i class="fa-solid fa-chart-simple"></i> Indicadores Econômicos</h5>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="ps-coin-name">Dólar Americano</span>
                                <span class="badge bg-primary rounded-pill cur-usd">
                                    R$ <span class="cur-min"></span>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="ps-coin-name">Euro</span>
                                <span class="badge bg-primary rounded-pill cur-euro">
                                    R$ <span class="cur-min"></span>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="ps-coin-name">Bitcoin</span>
                                <span class="badge bg-primary rounded-pill cur-btc">
                                    R$ <span class="cur-min"></span>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="ps-coin-name">Peso Argentino</span>
                                <span class="badge bg-primary rounded-pill cur-ars">
                                    R$ <span class="cur-min"></span>
                                </span>
                            </li>
                            <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="ps-coin-name">Libra Esterlina</span>
                                <span class="badge bg-primary rounded-pill cur-gbp">
                                    R$ <span class="cur-min"></span>
                                </span>
                            </li> -->
                        </ul>
                    </div>
                </div>

                <div class="col-12">
                    <div class="w-100 p-3 ps-loterica-results">
                        <div class="w-100 text-center mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-caixa.png" alt="Loterias Caixa" width="100">
                        </div>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item ps-loterica-item ps-loterica-mega-sena" data-loterica="mega-sena">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button p-2 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Mega-Sena
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2 pt-0"></div>
                                </div>
                            </div>

                            <div class="accordion-item ps-loterica-item ps-loterica-quina" data-loterica="quina">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button p-2 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Quina
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2 pt-0"></div>
                                </div>
                            </div>

                            <div class="accordion-item ps-loterica-item ps-loterica-lotofacil" data-loterica="lotofacil">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button p-2 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Lotofácil
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2 pt-0"></div>
                                </div>
                            </div>

                            <div class="accordion-item ps-loterica-item ps-loterica-lotomania" data-loterica="lotomania">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button p-2 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Lotomania
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2 pt-0"></div>
                                </div>
                            </div>

                            <!-- <div class="accordion-item ps-loterica-item ps-loterica-dupla-sena" data-loterica="dupla-sena">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button p-2 text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Dupla-sena
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body p-2 pt-0"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>