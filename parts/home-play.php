<?php
$args = array(
    'numberposts' => 4,
    'post_type'   => 'tvsertao'
);
$videos = get_posts($args);
?>
<section class="container ps-home-play my-4">
    <div class="row">
        <div class="col-12">
            <div class="w-100 ps-home-play--header text-center bg-danger text-white">
                <h4 class="text-uppercase m-0"><i class="fa-solid fa-play"></i> <i class="fw-bold">Play</i> <span class="font-title">Sertão</span></h4>
            </div>
            <div class="w-100 p-3 bg-dark">
                <?php if (!empty($videos)) : ?>
                    <div class="row g-0 ps-home-play--list">
                        <?php
                        foreach ($videos as $video) :
                            if (has_post_thumbnail($video->ID)) {
                                $th = get_the_post_thumbnail_url($video->ID, 'ps-thumb-small-h');
                            } else {
                                $th = "https://img.youtube.com/vi/" . get_field('ps_video_id', $video->ID) . "/hqdefault.jpg";
                            }
                        ?>
                            <div class="col-12 col-md-3">
                                <a href="<?php echo get_the_permalink($video->ID); ?>" class="d-block bg-cover position-relative text-white" title="<?php echo get_the_title($video->ID); ?>" data-thumb-post="<?php echo $th; ?>">
                                    <h6 class="font-title d-inline-block p-2"><?php echo get_the_title($video->ID); ?></h6>
                                    <div class="mask"></div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="w-100 text-right pt-3 d-flex justify-content-end">
                    <a href="<?php echo get_post_type_archive_link('tvsertao'); ?>" title="Veja mais vídeos da nossa programação" class="btn btn-danger btn-sm">
                        <small><i class="fa-solid fa-list"></i> Ver mais</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>