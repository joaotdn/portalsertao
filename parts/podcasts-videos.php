<?php
$podcast = get_term_by('name', 'podcast sertao', 'programas');
$podcast_list = array();
if ($podcast) {
    $podcast_list = get_posts(
        array(
            'posts_per_page' => 6,
            'post_type' => 'tvsertao',
            'tax_query' => array(
                array(
                    'taxonomy' => 'programas',
                    'field' => 'term_id',
                    'terms' => $podcast->term_id,
                )
            )
        )
    );
?>
    <div class="w-100 ps-podcast bg-danger p-3">
        <h5 class="ps-podcast--header d-inline-block w-100 mb-3">
            <a href="<?php echo get_term_link($podcast->term_id, 'programas') ?>" title="Ver todos os Podcasts Sertão">
                <i class="fa-solid fa-microphone-lines"></i>
                <strong>PodCast</strong> <span class="font-title fw-bold">Sertão</span>
            </a>
        </h5>

        <div class="ps-podcast--content mb-3">
            <?php
            if (!empty($podcast_list) && get_field('ps_video_id', $podcast_list[0]->ID)) {
                $code = get_field('ps_video_id', $podcast_list[0]->ID);
            ?>
                <a href="#" title="<?php echo $podcast_list[0]->post_title; ?>" data-video-id="<?php echo $code; ?>" class="d-block ps-podcast--figure" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                    <img src="<?php echo "https://img.youtube.com/vi/{$code}/hqdefault.jpg"; ?>" alt="<?php echo $podcast_list[0]->post_title; ?>" class="w-100">
                    <h6 class="d-inline-block w-100 mt-3 mb-0 fw-bolder text-white">
                        <?php echo $podcast_list[0]->post_title; ?>
                    </h6>
                </a>
            <?php } else { ?>
                <div class="ps-podcast--empty d-flex justify-content-center align-items-center w-100 border border-light opacity-75" style="height: 250px;">
                    <h6 class="text-light fw-lighter d-inline-block m-0">Aguarde...</h6>
                </div>
            <?php } ?>
        </div>
        <a href="<?php echo get_term_link($podcast->term_id, 'programas'); ?>" title="Ver todos os Podcasts" class="btn btn-dark w-100 m-0">Ver todos os PodCasts</a>
    </div>
<?php } ?>