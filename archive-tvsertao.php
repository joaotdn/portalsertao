<?php
get_header('tvsertao');
$first_post = get_posts(array(
    'numberposts' => 1,
    'post_type'   => 'tvsertao'
));
if (!empty($first_post)) :
    $youtube_cod = get_field('ps_video_id', $first_post[0]->ID);
?>
    <section class="ps-single-video container-fluid py-4 bg-dark">
        <div class="container">
            <div class="row d-flex align-items-stretch h-100">
                <?php if ($youtube_cod) : ?>
                    <div class="col-12 col-md-8">
                        <iframe src="https://www.youtube.com/embed/<?php echo $youtube_cod; ?>?rel=0" title="YouTube video" class="w-100 h-100 ps-single-video--iframe" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
                <div class="col-12 <?php if ($youtube_cod) { echo "col-md-4"; } ?>">
                    <h2 class="font-title ps-single-video--title">
                        <a href="<?php echo get_the_permalink($first_post[0]->ID); ?>" title="<?php echo get_the_title($first_post[0]->ID); ?>" class="text-white"><?php echo get_the_title($first_post[0]->ID); ?></a>
                    </h2>
                    <a href="<?php echo get_the_permalink($first_post[0]->ID); ?>" title="<?php echo get_the_title($first_post[0]->ID); ?>" class="ps-single-video--btn d-inline-block btn btn-sm btn-danger"><i class="fa-regular fa-newspaper"></i> Continuar lendo</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid bg-light border-bottom py-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="w-100">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Buscar vídeos" aria-label="Buscar vídeos" name="s">
                            <button class="btn btn-primary" type="submit" id="button-addon2">Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
$terms = get_terms(array(
    'taxonomy'   => 'programas',
    'hide_empty' => true
));
if (!empty($terms)) :
?>
    <nav class="container ps-video-list mt-4">
        <div class="row">
            <?php
            foreach ($terms as $term) :
            ?>
                <div class="col-12 mb-4">
                    <h6 class="w-100 d-inline-block w-100 ps-video-list--title p-3 bg-danger mb-3"><a href="<?php echo get_term_link($term->term_id, 'programas'); ?>" class="text-white d-flex justify-content-between align-items-center rounded-2" title="Ver mais vídeos em <?php echo $term->name ?>">
                            <span><i class="fa-solid fa-tv"></i> <strong><?php echo $term->name ?></strong></span>
                            <span class="fw-light"><small><i class="fa-solid fa-list"></i> Ver mais</small></span>
                        </a></h6>
                    <?php
                    $args = array(
                        'post_type' => 'tvsertao',
                        'numberposts' => 4,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'programas',
                                'field' => 'term_id',
                                'terms' => $term->term_id
                            )
                        )
                    );
                    $videos = get_posts($args);
                    if (!empty($videos)) :
                    ?>
                        <div class="row ps-home-play--list">
                            <?php foreach ($videos as $video) : ?>
                                <div class="col-12 col-md-3">
                                    <a href="<?php echo get_the_permalink($video->ID); ?>" class="d-block bg-cover position-relative text-white" title="<?php echo get_the_title($video->ID); ?>" data-thumb-post="https://img.youtube.com/vi/<?php echo get_field('ps_video_id', $video->ID); ?>/hqdefault.jpg" data-video-code="<?php echo get_field('ps_video_id', $video->ID); ?>">
                                        <h6 class="font-title d-inline-block p-2"><?php echo get_the_title($video->ID); ?></h6>
                                        <div class="mask"></div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </nav>
<?php endif; ?>
<?php
get_footer()
?>