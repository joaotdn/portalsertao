<section class="ps-home-news container-fluid my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 ps-home-news--header d-flex justify-content-between mb-4">
                            <a href="#" title="Ver todas as notícias em Municípios" class="text-danger">
                                <h5 class="font-title">Municípios</h5>
                            </a>
                            <?php
                            $cities = get_terms(array(
                                'taxonomy'   => 'cities',
                                'hide_empty' => false,
                                'number' => 5
                            ));
                            if (!empty($cities)) :
                                shuffle($cities);
                            ?>
                                <nav class="ps-home-news--tags nav d-none d-lg-flex">
                                    <?php foreach ($cities as $citie) : ?>
                                        <a href="<?php echo get_term_link($citie->term_id, 'cities'); ?>" title="<?php echo $citie->name; ?>" class="nav-link"><?php echo $citie->name; ?></a>
                                    <?php endforeach; ?>
                                </nav>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php
                    $term_city = get_terms(array(
                        'taxonomy' => 'cities',
                        'hide_empty' => true,
                    ));
                    $arr_ids = array();
                    if (!empty($term_city)) {
                        foreach($term_city as $city) {
                            array_push($arr_ids, $city->term_id);
                        }
                    }
                    $cities = get_posts(array(
                        'posts_per_page' => 4,
                        'tax_query' => array(
                            array(
                                'taxonomy'  => 'cities',
                                'field'     => 'term_id',
                                'terms'     => $arr_ids,
                            )
                        ),
                    ));
                    if (!empty($cities)) :
                        $location = get_the_terms($cities[0]->ID, 'cities');
                    ?>
                        <div class="col-12 col-md-6">
                            <a href="<?php echo get_the_permalink($cities[0]->ID); ?>" class="d-inline-block border-bottom border-2 border-danger mb-2" title="<?php echo get_the_title($cities[0]->ID); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url($cities[0]->ID, 'ps-thumb-horizontally'); ?>" alt="">
                            </a>
                            <p class="font-tag"><i class="fa-solid fa-location-dot"></i> <?php echo $location[0]->name; ?></p>
                            <a href="<?php echo get_the_permalink($cities[0]->ID); ?>" title="<?php echo get_the_title($cities[0]->ID); ?>">
                                <h5 class="font-title">
                                    <?php echo get_the_title($cities[0]->ID); ?>
                                </h5>
                            </a>
                        </div>
                    <?php
                    endif;
                    array_shift($cities);
                    if (!empty($cities)) :
                    ?>
                        <div class="col-12 col-md-6">
                            <nav class="nav ps-home-news--list">
                                <?php
                                foreach ($cities as $city) :
                                    $location = get_the_terms($city->ID, 'cities');
                                ?>
                                    <a href="<?php echo get_the_permalink($city->ID); ?>" class="nav-link px-0 d-block" title="<?php echo get_the_title($city->ID); ?>">
                                        <p class="font-tag"><i class="fa-solid fa-location-dot"></i> <?php echo $location[0]->name; ?></p>
                                        <h6 class="font-title"><?php echo get_the_title($city->ID); ?></h6>
                                    </a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="row">
                    <div class="col-12 ps-home-news--authors">
                        <div class="w-100 border-bottom border-2 bg-dark text-white p-3">
                            <h5 class="font-title m-0"><i class="fa-solid fa-quote-left"></i> Colunas</h5>
                        </div>
                        <div class="w-100 ps-home-news--authors-list px-3">
                            <?php
                            $args = array(
                                'numberposts' => 3,
                                'post_type'   => 'blog'
                            );
                            $writers = get_posts($args);
                            $repeat = array();
                            if (!empty($writers)) :
                            ?>
                                <nav class="nav flex-column">
                                    <?php
                                    foreach ($writers as $writer) :
                                        $writer_info = get_the_terms($writer->ID, 'colunistas')[0];
                                        $img = get_field('ps_colunistas_foto', $writer_info->taxonomy . '_' . $writer_info->term_id);
                                    ?>
                                        <div class="row py-2 ps-home-news--authors-item">
                                            <div class="col-auto">
                                                <div class="pe-3 author-th bg-cover d-inline-block" data-thumb-post="<?php echo $img; ?>"></div>
                                            </div>
                                            <div class="col">
                                                <a href="<?php echo get_term_link($writer_info->term_id, 'colunistas'); ?>" title="Todas as colunas de <?php echo $writer_info->name; ?>" class="font-tag"><?php echo $writer_info->name; ?></a>
                                                <a href="<?php echo get_the_permalink($writer->ID); ?>" title="<?php echo get_the_title($writer->ID); ?>">
                                                    <h6 class="font-title"><?php echo get_the_title($writer->ID); ?></h6>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </nav>
                            <?php endif; ?>
                        </div>
                        <div class="w-100 d-grid">
                            <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="btn btn-danger rounded-0 btn-sm" title="Ver mais colunas"><i class="fa-solid fa-list"></i> Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            get_template_part('parts/home-cities');
            ?>

            <div class="col-12">
                <div class="row">
                    <?php
                    $args = array('posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC');
                    $populars = get_posts($args);
                    if (!empty($populars)) :
                    ?>
                        <div class="col-12 col-md-4">
                            <div class="w-100 bg-light p-3 rounded-3">
                                <div class="w-100 border-bottom border-2 my-3">
                                    <h5 class="font-title text-danger"><i class="fa-solid fa-ranking-star"></i> Mais lidas</h5>
                                </div>
                                <nav class="nav ps-home-news--list">
                                    <?php foreach ($populars as $pop) : ?>
                                        <a href="<?php echo get_the_permalink($pop->ID); ?>" class="nav-link px-0 d-block" title="<?php echo get_the_title($pop->ID); ?>">
                                            <?php
                                            $post_key = get_field('ps_post_chapeu', $pop->ID);
                                            if ($post_key) {
                                                echo "<p class=\"font-tag\">{$post_key}</p>";
                                            }
                                            ?>
                                            <h6 class="font-title"><?php echo get_the_title($pop->ID); ?></h6>
                                        </a>
                                    <?php endforeach; ?>
                                </nav>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-md-4">
                        <div class="w-100 bg-danger px-3 pt-3 border-top border-4 border-dark mb-3">
                            <div class="w-100 my-2 mb-3">
                                <h5 class="font-title text-dark"><i class="fa-solid fa-camera"></i> Galerias</h5>
                            </div>
                            <?php
                            $galerias = get_posts(array(
                                'posts_per_page' => 3,
                                'meta_key'       => 'ps_galeria_de_fotos',
                                'meta_value' => array(''),
                                'meta_compare' => '!='
                            ));
                            if (!empty($galerias)) :
                            ?>
                                <nav class="nav flex-column ps-home-news--gallery">
                                    <?php
                                    foreach ($galerias as $item) :
                                    ?>
                                        <div class="row mb-3">
                                            <div class="col-auto">
                                                <div class="pe-3 thumb-gallery bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($item->ID, 'ps-thumb-small'); ?>"></div>
                                            </div>
                                            <div class="col">
                                                <?php
                                                $post_key = get_field('ps_post_chapeu', $item->ID);
                                                if ($post_key) {
                                                    echo "<p class=\"m-0\"><small>{$post_key}</small></p>";
                                                }
                                                ?>
                                                <a href="<?php echo get_the_permalink($item->ID); ?>" title="<?php echo get_the_title($item->ID); ?>" class="text-white">
                                                    <h6 class="font-title"><?php echo get_the_title($item->ID); ?></h6>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </nav>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="bg-light w-100 p-3 rounded rounded-3">
                            <div class="w-100 border-bottom border-2 my-3">
                                <h5 class="font-title text-danger"><i class="fa-solid fa-square-poll-horizontal"></i> Enquete</h5>
                            </div>
                            <?php if (function_exists('vote_poll') && !in_pollarchive()) : ?>

                                <?php get_poll(); ?>

                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <?php
                    $category_id = get_cat_ID('Sertao Investiga');
                    $posts = get_posts(array(
                        'cat' => $category_id,
                        'numberposts' => 3
                    ));
                    if (!empty($posts)) :
                    ?>
                        <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <h4 class="m-0 border-bottom border-4 border-dark d-inline-block w-100"><i class="fa-solid fa-user-secret"></i> <span class="fw-bold">Sertão</span><span class="font-title text-danger">Investiga</span></h4>
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>" class="d-block">
                                        <img src="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ps-thumb-small-h'); ?>" alt="<?php echo get_the_title($posts[0]->ID); ?>">
                                    </a>
                                    <div class="w-100 bg-dark p-3">
                                        <?php
                                        $post_key = get_field('ps_post_chapeu', $post->ID);
                                        if ($post_key) {
                                            echo "<p class=\"font-tag\">{$post_key}</p>";
                                        }
                                        ?>
                                        <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>" class="text-white">
                                            <h6 class="font-title"><?php echo get_the_title($posts[0]->ID); ?></h6>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                array_shift($posts);
                                if (!empty($posts)) :
                                ?>
                                    <div class="col-12 col-md-8">
                                        <div class="w-100">
                                            <?php
                                            $post_key = get_field('ps_post_chapeu', $posts[0]->ID);
                                            if ($post_key) {
                                                echo "<p class=\"font-tag\">{$post_key}</p>";
                                            }
                                            ?>
                                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" class="" title="<?php echo get_the_title($posts[0]->ID); ?>">
                                                <h5 class="font-title"><?php echo get_the_title($posts[0]->ID); ?></h5>
                                            </a>
                                            <p class="text-excerpt"><?php echo get_the_excerpt($posts[0]->ID); ?></p>
                                        </div>
                                        <?php if (isset($posts[1])) : ?>
                                            <div class="w-100 my-3 pt-3 border-top">
                                                <?php
                                                $post_key = get_field('ps_post_chapeu', $posts[1]->ID);
                                                if ($post_key) {
                                                    echo "<p class=\"font-tag\">{$post_key}</p>";
                                                }
                                                ?>
                                                <a href="<?php echo get_the_permalink($posts[1]->ID); ?>" title="<?php echo get_the_title($posts[1]->ID); ?>">
                                                    <h6 class="font-title"><?php echo get_the_title($posts[1]->ID); ?></h6>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-md-4 text-center">
                        <div class="w-100 p-3 bg-light border">
                            <div class="w-100 mb-3 text-center">
                                <h6 class="fw-light text-uppercase"><small>Anúncio</small></h6>
                            </div>
                            <?php
                            // ps_ads_topo
                            $ads_inv  = get_field('ps_ads_investiga', 'option');
                            if ($ads_inv) :
                                shuffle($ads_inv);
                                $ads_inv = $ads_inv[0];
                                if ($ads_inv['ps_ads_investiga_link']) {
                            ?>
                                    <a href="<?php echo $ads_inv['ps_ads_investiga_link']; ?>" target="_blank" title="">
                                        <img src="<?php echo $ads_inv['ps_ads_investiga_conteudo']; ?>" alt="Anúncio">
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo $ads_inv['ps_ads_investiga_conteudo']; ?>" alt="Anúncio">
                            <?php }
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <?php
                    $category_id = get_cat_ID('Politica');
                    $posts = get_posts(array(
                        'cat' => $category_id,
                        'numberposts' => 4
                    ));
                    if (!empty($posts)) :
                    ?>
                        <div class="col-12 mb-3">
                            <h5 class="font-title m-0 d-inline-block w-100 border-bottom border-danger border-4">
                                <a href="<?php echo get_category_link($category_id); ?>" title="Ver mais notícias sobre Política" class="text-danger">Informe Legislativo</a>
                            </h5>
                        </div>
                        <?php foreach ($posts as $post) : ?>
                            <div class="col-12 col-md-3 ps-home-news--politic mb-3">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>" class="d-block position-relative mb-3">
                                    <span><?php echo get_the_tags($post->ID)[0]->name; ?></span>
                                    <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'ps-thumb-small-h'); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                                </a>
                                <h6 class="font-title">
                                    <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                                </h6>
                            </div>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <?php
                $category_id = get_cat_ID('Esportes');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ps-thumb-large'); ?>">
                        <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Esportes</span>
                        <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($posts[0]->ID); ?></h5>
                        <span class="ps-media-news--mask d-block"></span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-4">
                <?php
                $category_id = get_cat_ID('Economia');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ps-thumb-large'); ?>">
                        <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Economia</span>
                        <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($posts[0]->ID); ?></h5>
                        <span class="ps-media-news--mask d-block"></span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-4">
                <?php
                $category_id = get_cat_ID('Saude');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_the_post_thumbnail_url($posts[0]->ID, 'ps-thumb-large'); ?>">
                        <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Saúde</span>
                        <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100"><?php echo get_the_title($posts[0]->ID); ?></h5>
                        <span class="ps-media-news--mask d-block"></span>
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <?php
                $category_id = get_cat_ID('Educacao');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <div class="row ps-home-news--footer my-3">
                        <div class="col-auto pe-0">
                            <i class="fa-regular fa-folder"></i>
                        </div>
                        <div class="col">
                            <a href="<?php echo get_category_link($category_id); ?>" title="Ver todas as notícias em Educação" class="font-tag">Educação</a>
                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>">
                                <h6><?php echo get_the_title($posts[0]->ID); ?></h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <?php
                $category_id = get_cat_ID('Entretenimento');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <div class="row ps-home-news--footer my-3">
                        <div class="col-auto pe-0">
                            <i class="fa-regular fa-folder"></i>
                        </div>
                        <div class="col">
                            <a href="<?php echo get_category_link($category_id); ?>" title="Ver todas as notícias em Entretenimento" class="font-tag">Entretenimento</a>
                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>">
                                <h6><?php echo get_the_title($posts[0]->ID); ?></h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <?php
                $category_id = get_cat_ID('Brasil');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <div class="row ps-home-news--footer my-3">
                        <div class="col-auto pe-0">
                            <i class="fa-regular fa-folder"></i>
                        </div>
                        <div class="col">
                            <a href="<?php echo get_category_link($category_id); ?>" title="Ver todas as notícias em Brasil" class="font-tag">Brasil</a>
                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>">
                                <h6><?php echo get_the_title($posts[0]->ID); ?></h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <?php
                $category_id = get_cat_ID('Paraiba');
                $posts = get_posts(array(
                    'cat' => $category_id,
                    'numberposts' => 1
                ));
                if (!empty($posts)) :
                ?>
                    <div class="row ps-home-news--footer my-3">
                        <div class="col-auto pe-0">
                            <i class="fa-regular fa-folder"></i>
                        </div>
                        <div class="col">
                            <a href="<?php echo get_category_link($category_id); ?>" title="Ver todas as notícias em Paraíba" class="font-tag">Paraíba</a>
                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo get_the_title($posts[0]->ID); ?>">
                                <h6><?php echo get_the_title($posts[0]->ID); ?></h6>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>