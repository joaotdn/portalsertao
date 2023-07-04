<?php
$videos = get_posts(array(
    'posts_per_page' => 3,
    'meta_key'       => 'ps_youtube_cod'
));
?>
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
            
            <?php 
            if(!empty($videos)):
                $cod = get_field('ps_youtube_cod', $videos[0]->ID);
            ?>
            <div class="col-12 col-lg-4 position-relative ps-videos-home--content">
                <a href="#" title="<?php echo get_the_title($videos[0]->ID); ?>" class="w-100 ps-videos-home--thumb bg-cover align-items-center justify-content-center" data-thumb-post="https://img.youtube.com/vi/<?php echo $cod; ?>/hqdefault.jpg" data-youtube-code="<?php echo $cod; ?>" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                    <span class="play-video-icon">
                        <i class="fa-regular fa-circle-play"></i>
                    </span>
                </a>
                <a href="<?php echo get_the_permalink($videos[0]->ID); ?>" title="<?php echo get_the_title($videos[0]->ID); ?>" class="btn btn-danger btn-sm ps-videos-home--read">
                    <i class="fa-regular fa-newspaper"></i> Continuar lendo
                </a>
            </div>

            <div class="col-12 col-lg-4 ps-videos-home--content">
                <nav class="nav flex-column ps-videos-home--nav">
                    <?php $i = 0; foreach($videos as $video): ?>
                    <a class="nav-link py-4 <?php if ($i == 0) echo 'active'; ?>" title="<?php echo get_the_title($video->ID); ?>" href="#" data-youtube-code="<?php echo get_field('ps_youtube_cod', $video->ID); ?>">
                        <span class="me-2"><i class="fa-solid fa-video"></i></span>
                        <span><?php echo get_the_title($video->ID); ?></span>
                    </a>
                    <?php $i++; endforeach; ?>
                </nav>
            </div>
            <?php endif; ?>

            <div class="col-12 col-lg-4 ps-videos-home--tv active">
                <?php $tv_sertao  = get_field('ps_tv_sertao', 'option'); if($tv_sertao): ?>
                <iframe style="width:100%; height:300px;" src="<?php echo $tv_sertao; ?>" scrolling="no" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>

            <?php
                $list_programs = get_field('ps_tv_programacao', 'option');
                if (!empty($list_programs)):
            ?>
            <div class="col-12 col-lg-4 ps-videos-home--tv active">
                <p class="text-white pb-2">Programação</p>
                <nav class="w-100">
                    <?php
                        foreach($list_programs as $program):
                    ?>
                    <span class="d-inline-block w-100 my-2">
                        <strong><?php echo $program['ps_tv_programacao_horario']; ?></strong> - <?php echo $program['ps_tv_programacao_nome']; ?>
                    </span>
                    <?php endforeach; ?>
                </nav>
            </div>
            <?php endif; ?>

            <div class="col-12 col-lg-4 text-center ps-videos-home--radios">
                <div class="w-100 text-center">
                    <h5 class="m-0"><i class="fa-solid fa-tower-cell"></i> <strong>Rádio</strong> <span class="font-title text-white">Sertão</span></h5>
                </div>
                <div class="w-100 p-3 ps-videos-home--radio-play">
                    <div class="w-100 d-flex justify-content-center">
                        <?php get_template_part('parts/radio-player'); ?>
                    </div>
                </div>
                <div class="w-100 my-3 ps-videos-home--ronline p-3 rounded">
                    <h5 class="d-inline-block w-100 text-center fw-bold font-title text-dark">
                        <i class="fa-solid fa-radio"></i> Rádios Online
                    </h5>
                    <select name="radios-online" id="radios-online" class="form-select">
                        <option value="" selected>Selecione uma rádio</option>
                        <option value="">Alto Piranhas AM </option>
                        <option value="">Arapuan FM </option>
                        <option value="">Capivara FM </option>
                        <option value="">Cidade FM </option>
                        <option value="">Conceição FM </option>
                        <option value="">Correio AM </option>
                        <option value="">Difusora AM </option>
                        <option value="">Espinharas FM </option>
                        <option value="">Itatiunga FM </option>
                        <option value="">Liberdade FM </option>
                        <option value="">Líder FM </option>
                        <option value="">Mais FM </option>
                        <option value="">Mariana FM </option>
                        <option value="">Max Correio Nativa FM</option>
                        <option value="">Oeste AM </option>
                        <option value="">Patamuté FM</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="videoHomeModal" tabindex="<option value="">1" aria-labelledby="videoHomeModalLabel" aria-hidden="true"></option>
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