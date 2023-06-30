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
                            <nav class="ps-home-news--tags nav d-none d-lg-flex">
                                <a href="#" title="" class="nav-link">Cajazeiras</a>
                                <a href="#" title="" class="nav-link">Sousa</a>
                                <a href="#" title="" class="nav-link">Campina Grande</a>
                                <a href="#" title="" class="nav-link">Pombal</a>
                                <a href="#" title="" class="nav-link">Cachoeira dos Índios</a>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <a href="#" class="d-inline-block border-bottom border-2 border-danger mb-2" title="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/v1.jpg" alt="">
                        </a>
                        <p class="font-tag"><i class="fa-solid fa-location-dot"></i> Sousa</p>
                        <a href="#" title="">
                            <h5 class="font-title">
                                Definida programação de Corpus Christi que será celebrada pela Igreja Católica em Cajazeiras
                            </h5>
                        </a>
                    </div>

                    <div class="col-12 col-md-6">
                        <nav class="nav ps-home-news--list">
                            <a href="#" class="nav-link px-0 d-block" title="">
                                <p class="font-tag"><i class="fa-solid fa-location-dot"></i> Uirauna</p>
                                <h6 class="font-title">Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias</h6>
                            </a>

                            <a href="#" class="nav-link px-0 d-block" title="">
                                <p class="font-tag"><i class="fa-solid fa-location-dot"></i> São João</p>
                                <h6 class="font-title">Em Brasília: prefeito Zé Aldemir tenta liberar recursos de obras conveniadas com o governo federal</h6>
                            </a>

                            <a href="#" class="nav-link px-0 d-block" title="">
                                <p class="font-tag"><i class="fa-solid fa-location-dot"></i> São José de Piranhas</p>
                                <h6 class="font-title">Assembleia aprova pedido de Doutora Paula ao TJPB para elevação do Município de Cajazeiras a terceira entrância</h6>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-4">
                <div class="row">
                    <div class="col-12 ps-home-news--authors">
                        <div class="w-100 border-bottom border-2 bg-dark text-white p-3">
                            <h5 class="font-title m-0"><i class="fa-solid fa-quote-left"></i> Colunas</h5>
                        </div>
                        <div class="w-100 ps-home-news--authors-list px-3">
                            <nav class="nav flex-column">
                                <div class="row py-2 ps-home-news--authors-item">
                                    <div class="col-auto">
                                        <div class="pe-3 author-th bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/c1.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <a href="#" title="" class="font-tag">Margarida Araújo</a>
                                        <a href="#" title="">
                                            <h6 class="font-title">Os lobos de cada um</h6>
                                        </a>
                                    </div>
                                </div>

                                <div class="row py-2 ps-home-news--authors-item">
                                    <div class="col-auto">
                                        <div class="pe-3 author-th bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/c2.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <a href="#" title="" class="font-tag">Wgleyson de Souza</a>
                                        <a href="#" title="">
                                            <h6 class="font-title">Susto</h6>
                                        </a>
                                    </div>
                                </div>

                                <div class="row py-2 ps-home-news--authors-item">
                                    <div class="col-auto">
                                        <div class="pe-3 author-th bg-cover d-inline-block" data-thumb-post="<?php echo get_template_directory_uri(); ?>/assets/img/c3.jpg"></div>
                                    </div>
                                    <div class="col">
                                        <a href="#" title="" class="font-tag">José Antonio de Albuquerque</a>
                                        <a href="#" title="">
                                            <h6 class="font-title">Resultado preliminar do concurso da Câmara de Cajazeiras é divulgado; confira!</h6>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="w-100 d-grid">
                            <a href="#" class="btn btn-danger rounded-0 btn-sm" title="Ver mais colunas"><i class="fa-solid fa-list"></i> Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            get_template_part('parts/home-cities');
            ?>

            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="w-100 bg-light p-3 rounded-3">
                            <div class="w-100 border-bottom border-2 my-3">
                                <h5 class="font-title text-danger"><i class="fa-solid fa-ranking-star"></i> Mais lidas</h5>
                            </div>
                            <nav class="nav ps-home-news--list">
                                <a href="#" class="nav-link px-0 d-block" title="">
                                    <p class="font-tag">Uirauna</p>
                                    <h6 class="font-title">Todo mundo diz que UTI Aérea é coisa de rico. Pois na PB é diferente', avalia Nonato Bandeira sobre mais uma UTI e 40 ambulâncias</h6>
                                </a>

                                <a href="#" class="nav-link px-0 d-block" title="">
                                    <p class="font-tag">São João</p>
                                    <h6 class="font-title">Em Brasília: prefeito Zé Aldemir tenta liberar recursos de obras conveniadas com o governo federal</h6>
                                </a>

                                <a href="#" class="nav-link px-0 d-block" title="">
                                    <p class="font-tag">São José de Piranhas</p>
                                    <h6 class="font-title">Assembleia aprova pedido de Doutora Paula ao TJPB para elevação do Município de Cajazeiras a terceira entrância</h6>
                                </a>
                            </nav>
                        </div>
                    </div>

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