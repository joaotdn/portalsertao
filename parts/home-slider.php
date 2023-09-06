<div class="ps-slide-features" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> .card" data-cycle-prev=".nav-features--prev" data-cycle-next=".nav-features--next" data-cycle-pager=".features-pager" data-cycle-pager-template="<span></span>" data-cycle-swipe=true>
                        <?php
                        if ($ads_slider && !empty($ads_slider)) : foreach ($ads_slider as $slide) : ?>
                                <div class="card mb-3">
                                    <?php if ($slide['ps_slider_anuncios_link']) { ?>
                                        <a href="<?php echo $slide['ps_slider_anuncios_link']; ?>" title="<?php echo $slide['ps_slider_anuncios_titulo']; ?>" class="card-img-top" <?php if ($slide['ps_slider_anuncios_target']) {
                                                                                                                                                                                        echo "target=\"_blank\"";
                                                                                                                                                                                    } ?>>
                                            <img src="<?php echo $slide['ps_slider_anuncios_imagem']; ?>" class="" alt="<?php echo $slide['ps_slider_anuncios_titulo']; ?>">
                                        </a>
                                    <?php } else { ?>
                                        <img src="<?php echo $slide['ps_slider_anuncios_imagem']; ?>" class="" alt="<?php echo $slide['ps_slider_anuncios_titulo']; ?>" class="card-img-top">
                                    <?php } ?>
                                    <div class="card-body">
                                        <?php
                                        $post_key = $slide['ps_slider_anuncios_chapeu'];
                                        if ($post_key) {
                                            echo "<p class=\"font-tag\">{$post_key}</p>";
                                        }
                                        ?>
                                        <?php if ($slide['ps_slider_anuncios_link']) { ?>
                                            <a href="<?php echo $slide['ps_slider_anuncios_link']; ?>" title="<?php echo $slide['ps_slider_anuncios_titulo']; ?>" <?php if ($slide['ps_slider_anuncios_target']) {
                                                                                                                                                                        echo "target=\"_blank\"";
                                                                                                                                                                    } ?>>
                                                <h5 class="card-title font-title"><?php echo $slide['ps_slider_anuncios_titulo']; ?></h5>
                                            </a>
                                        <?php } else { ?>
                                            <h5 class="card-title font-title"><?php echo $slide['ps_slider_anuncios_titulo']; ?></h5>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                        endif;
                        foreach ($sliders as $slide) :
                            ?>
                            <div class="card mb-3">
                                <a href="<?php echo get_the_permalink($slide->ID) ?>" title="<?php echo get_the_title($slide->ID); ?>" class="card-img-top">
                                    <img src="<?php echo get_the_post_thumbnail_url($slide->ID, 'ps-thumb-horizontally'); ?>" class="" alt="<?php echo get_the_title($slide->ID); ?>">
                                </a>
                                <div class="card-body">
                                    <?php
                                    $post_key = get_field('ps_post_chapeu', $slide->ID);
                                    if ($post_key) {
                                        echo "<p class=\"font-tag\">{$post_key}</p>";
                                    }
                                    ?>
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