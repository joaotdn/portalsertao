<section class="ps-videos-home container-fluid my-3 py-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ps-videos-home--header mb-3 pb-2">
                    <div class="col-auto">
                        <a href="#" title="Assistir TV Portal Sertão" class="d-inline-block">
                            <h5><i class="fa-solid fa-tv"></i> TV Sertão</h5>
                        </a>
                        <a href="#" title="Ver todos os vídeos" class="d-inline-block ps-videos-home-show ms-3 disabled">
                            <h5><i class="fa-solid fa-clapperboard"></i> Vídeos</h5>
                        </a>
                    </div>
                    <div class="col flex-shrink-1 text-end">
                        <a href="#" title="Ver todos os vídeos">
                            <i class="fa-solid fa-list"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 position-relative ps-videos-home--content">
                <a href="#" title="" class="w-100 ps-videos-home--thumb bg-cover align-items-center justify-content-center" data-thumb-post="https://img.youtube.com/vi/wagid3poUAg/hqdefault.jpg" data-youtube-code="wagid3poUAg" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                    <span class="play-video-icon">
                        <i class="fa-regular fa-circle-play"></i>
                    </span>
                </a>
                <a href="#" title="" class="btn btn-danger ps-videos-home--read">
                    <i class="fa-regular fa-newspaper"></i> Continuar lendo
                </a>
            </div>

            <div class="col-12 col-lg-4 ps-videos-home--content">
                <nav class="nav flex-column ps-videos-home--nav">
                    <a class="nav-link py-4 active" href="#" data-youtube-code="wagid3poUAg">
                        <span class="me-2"><i class="fa-solid fa-video"></i></span>
                        <span>Coordenador do Bolsa família de Cajazeiras explica motivos dos bloqueios e como evitá-los</span>
                    </a>
                    <a class="nav-link py-4" href="#" data-youtube-code="Z5Jt1MUXEDA">
                        <span class="me-2"><i class="fa-solid fa-video"></i></span>
                        <span>Marcos Antônio, fala sobre as obras que estão sendo feitas e projetos futuros para Carrapateira</span>
                    </a>
                    <a class="nav-link py-4" href="#" data-youtube-code="co6DjCsVK1M">
                        <span class="me-2"><i class="fa-solid fa-video"></i></span>
                        <span>Daiane Valêncio conta as novidades e fala sobre os projetos para o meio empreendedor de Cajazeiras</span>
                    </a>
                </nav>
            </div>

            <div class="col-12 col-lg-4 ps-videos-home--tv active">
                <?php $tv_sertao  = get_field('ps_tv_sertao', 'option'); if($tv_sertao): ?>
                <iframe style="width:100%; height:300px;" src="<?php echo $tv_sertao; ?>" scrolling="no" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>

            <div class="col-12 col-lg-4 ps-videos-home--tv active">
                <p class="text-white pb-2">Programação</p>
                <nav class="w-100">
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                    <span class="d-inline-block w-100 my-2">
                        <strong>13:00</strong> - Programa de notícia e debate
                    </span>
                </nav>
            </div>

            <div class="col-12 col-lg-4 text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ads2.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="videoHomeModal" tabindex="-1" aria-labelledby="videoHomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="100%" height="305" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>