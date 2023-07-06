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
                    $cities = get_posts(array(
                        'posts_per_page' => 4,
                        'taxonomy' => 'cities'
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
                                    <?php foreach ($populars as $pop) : $tag = get_the_tags($pop->ID); ?>
                                        <a href="<?php echo get_the_permalink($pop->ID); ?>" class="nav-link px-0 d-block" title="<?php echo get_the_title($pop->ID); ?>">
                                            <?php
                                            if (!empty($tag)) {
                                            ?><p class="font-tag"><?php echo $tag[0]->name; ?></p>
                                            <?php
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
                            <nav class="nav flex-column ps-home-news--gallery">
                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="pe-3 thumb-gallery bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g1.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <p class="m-0"><small>Cajazeiras</small></p>
                                        <a href="#" title="" class="text-white">
                                            <h6 class="font-title">Assembleia aprova pedido de Doutora Paula ao TJPB para elevação do Município de Cajazeiras a terceira entrância</h6>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="pe-3 thumb-gallery bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g2.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <p class="m-0"><small>Brasília</small></p>
                                        <a href="#" title="" class="text-white">
                                            <h6 class="font-title">Em Brasília: prefeito Zé Aldemir tenta liberar recursos de obras conveniadas com o governo federal</h6>
                                        </a>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-auto">
                                        <div class="pe-3 thumb-gallery bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g3.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <p class="m-0"><small>UTI Aérea</small></p>
                                        <a href="#" title="" class="text-white">
                                            <h6 class="font-title">Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias</h6>
                                        </a>
                                    </div>
                                </div>
                            </nav>
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
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <h4 class="m-0 border-bottom border-4 border-dark d-inline-block w-100"><i class="fa-solid fa-user-secret"></i> <span class="fw-bold">Sertão</span><span class="font-title text-danger">Investiga</span></h4>
                            </div>

                            <div class="col-12 col-md-4 mb-4">
                                <a href="#" title="" class="d-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/F2.webp" alt="">
                                </a>
                                <div class="w-100 bg-dark p-3">
                                    <p class="font-tag">Preliminares</p>
                                    <a href="#" title="" class="text-white">
                                        <h6 class="font-title">Em Cajazeiras, será feriado de Corpus Christi quinta (08) e sexta (09) terá ponto facultativo nas repartições municipais</h6>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-md-8">
                                <div class="w-100">
                                    <p class="font-tag">Eleições 2022</p>
                                    <a href="#" class="" title="">
                                        <h5 class="font-title"> VÍDEO: Ortopedista técnico destaca serviços, confecções de próteses e órteses e benefícios oferecidos pela Moriah Ortopedia, na cidade de Sousa</h5>
                                    </a>
                                    <p class="text-excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, praesentium voluptas nobis consequatur.</p>
                                </div>

                                <div class="w-100 my-3 pt-3 border-top">
                                    <p class="font-tag">UTI Móvel</p>
                                    <a href="#" title="">
                                        <h6 class="font-title">
                                            Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 text-center">
                        <div class="w-100 p-3 bg-light border">
                            <div class="w-100 mb-3 text-center">
                                <h6 class="fw-light text-uppercase"><small>Anúncio</small></h6>
                            </div>
                            <a href="#" title="" class="d-inline-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adsp2.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h5 class="font-title m-0 d-inline-block w-100 border-bottom border-danger border-4">
                            <a href="#" title="" class="text-danger">Informe Legislativo</a>
                        </h5>
                    </div>
                    <div class="col-12 col-md-3 ps-home-news--politic mb-3">
                        <a href="#" title="" class="d-block position-relative mb-3">
                            <span>Cajazeiras</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/f1.webp" alt="">
                        </a>
                        <h6 class="font-title">
                            <a href="#" title="">Coordenador do Bolsa família de Cajazeiras explica motivos dos bloqueios e como evitá-los</a>
                        </h6>
                    </div>

                    <div class="col-12 col-md-3 ps-home-news--politic mb-3">
                        <a href="#" title="" class="d-block position-relative mb-3">
                            <span>Futuro</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/f3.webp" alt="">
                        </a>
                        <h6 class="font-title">
                            <a href="#" title="">Marcos Antônio, fala sobre as obras que estão sendo feitas e projetos futuros para Carrapateira</a>
                        </h6>
                    </div>

                    <div class="col-12 col-md-3 ps-home-news--politic mb-3">
                        <a href="#" title="" class="d-block position-relative mb-3">
                            <span>Projetos</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/f4.webp" alt="">
                        </a>
                        <h6 class="font-title">
                            <a href="#" title="">Daiane Valêncio conta as novidades e fala sobre os projetos para o meio empreendedor de Cajazeiras</a>
                        </h6>
                    </div>

                    <div class="col-12 col-md-3 ps-home-news--politic mb-3">
                        <a href="#" title="" class="d-block position-relative mb-3">
                            <span>UTI Móvel</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/F2.webp" alt="">
                        </a>
                        <h6 class="font-title">
                            <a href="#" title="">Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <a href="#" title="" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g1.jpg">
                    <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Política</span>
                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100">Assembleia aprova pedido de Doutora Paula ao TJPB para elevação do Município de Cajazeiras a terceira entrância</h5>
                    <span class="ps-media-news--mask d-block"></span>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="#" title="" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g2.jpg">
                    <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Esportes</span>
                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100">
                        Em Brasília: prefeito Zé Aldemir tenta liberar recursos de obras conveniadas com o governo federal</h5>
                    <span class="ps-media-news--mask d-block"></span>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="#" title="" class="w-100 ps-media-news my-2 bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/g3.jpg">
                    <span class="ps-media-news--tag d-inline-block p-2 bg-dark text-light text-uppercase"><i class="fa-regular fa-folder"></i> Policial</span>
                    <h5 class="font-title ps-media-news--title d-inline-block text-light p-2 w-100">Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias</h5>
                    <span class="ps-media-news--mask d-block"></span>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="row ps-home-news--footer my-3">
                    <div class="col-auto pe-0">
                        <i class="fa-regular fa-folder"></i>
                    </div>
                    <div class="col">
                        <a href="#" title="" class="font-tag">Entretenimento</a>
                        <a href="#" title="">
                            <h6>Governo autoriza projeto da ponte sobre o Rio Piranhas; Prefeito Bal Lins e Chico Mendes agradecem gesto de atenção de João Azevêdo</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="row ps-home-news--footer my-3">
                    <div class="col-auto pe-0">
                        <i class="fa-regular fa-folder"></i>
                    </div>
                    <div class="col">
                        <a href="#" title="" class="font-tag">Paraíba</a>
                        <a href="#" title="">
                            <h6>Prefeito Zé Aldemir entrega mais duas escolas reformadas e ampliadas em Cajazeiras</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="row ps-home-news--footer my-3">
                    <div class="col-auto pe-0">
                        <i class="fa-regular fa-folder"></i>
                    </div>
                    <div class="col">
                        <a href="#" title="" class="font-tag">Saúde</a>
                        <a href="#" title="">
                            <h6>Em Cajazeiras, será feriado de Corpus Christi quinta (08) e sexta (09) terá ponto facultativo nas repartições municipais</h6>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="row ps-home-news--footer my-3">
                    <div class="col-auto pe-0">
                        <i class="fa-regular fa-folder"></i>
                    </div>
                    <div class="col">
                        <a href="#" title="" class="font-tag">Brasil</a>
                        <a href="#" title="">
                            <h6>Em Brasília: prefeito Zé Aldemir tenta liberar recursos de obras conveniadas com o governo federal</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>