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
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?php echo $youtube_cod; ?>?rel=0" title="YouTube video" class="w-100 h-100 ps-single-video--iframe" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="mt-4 mt-md-0 col-12 <?php if ($youtube_cod) { echo "col-md-4"; } ?>">
                    <h2 class="font-title ps-single-video--title">
                        <a href="<?php echo get_the_permalink($first_post[0]->ID); ?>" title="<?php echo get_the_title($first_post[0]->ID); ?>" class="text-white"><?php echo get_the_title($first_post[0]->ID); ?></a>
                    </h2>
                    <a href="<?php echo get_the_permalink($first_post[0]->ID); ?>" title="<?php echo get_the_title($first_post[0]->ID); ?>" class="ps-single-video--btn d-inline-block btn btn-sm btn-danger mt-3"><i class="fa-regular fa-newspaper"></i> Continuar lendo</a>
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
                            <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="w-100 bg-light border p-3 d-flex justify-content-center">
                    <?php get_template_part('parts/ads-top'); ?>
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
                $color = get_field('ps_programas_cor', 'programas_' . $term->term_id);
            ?>
                <div class="col-12 mb-4">
                    <h6 class="w-100 d-inline-block w-100 ps-video-list--title p-3 <?php if (is_null($color)) { echo "bg-danger "; } ?>mb-3 rounded-2" <?php if(!is_null($color)) { echo "style=\"background-color:". $color ."\""; } ?>><a href="<?php echo get_term_link($term->term_id, 'programas'); ?>" class="text-white d-flex justify-content-between align-items-center" title="Ver mais vídeos em <?php echo $term->name ?>">
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
                            <?php 
                                foreach ($videos as $video) :
                                    if (has_post_thumbnail($video->ID)) {
                                        $th = get_the_post_thumbnail_url($video->ID, 'ps-thumb-small-h');
                                    } else {
                                        $th = "https://img.youtube.com/vi/". get_field('ps_video_id', $video->ID) ."/hqdefault.jpg";
                                    }
                            ?>
                                <div class="col-12 col-md-3 mb-3 mb-md-0">
                                    <a href="<?php echo get_the_permalink($video->ID); ?>" class="d-block bg-cover position-relative text-white" title="<?php echo get_the_title($video->ID); ?>" data-thumb-post="<?php echo $th; ?>" data-video-code="<?php echo get_field('ps_video_id', $video->ID); ?>">
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