<?php
$one_minute = get_term_by('name', 'sertao em 1 minuto', 'programas');
$one_minute_list = array();
if ($one_minute) {
    $one_minute_list = get_posts(
        array(
            'posts_per_page' => 6,
            'post_type' => 'tvsertao',
            'tax_query' => array(
                array(
                    'taxonomy' => 'programas',
                    'field' => 'term_id',
                    'terms' => $one_minute->term_id,
                )
            )
        )
    );
}
if (!empty($one_minute_list)) :
?>
    <div class="col-12 col-md-8 mb-4">
        <div class="w-100 bg-dark p-3 ps-one-minute">
            <h5 class="mb-3 pb-3 font-title d-inline-block w-100 ps-one-minute--title">
                <a href="<?php echo get_term_link($one_minute->term_id, 'programas'); ?>" title="Ver todos os vídeos em Sertão em 1 minuto">
                    <span class="text-white"><i class="fa-solid fa-video opacity-50 d-inline-block me-2"></i> Sertão em</span>
                    <span class="text-danger"> 1 minuto</span>
                </a>
            </h5>
            <div class="w-100 d-md-flex justify-content-md-between">
                <?php
                $code = get_field('ps_video_id', $one_minute_list[0]->ID);
                if ($code) {
                ?>
                    <a href="#" title="<?php echo $one_minute_list[0]->post_title; ?>" class="d-block ps-one-minute--figure" data-video-id="<?php echo $code; ?>" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                        <img src="<?php echo "https://img.youtube.com/vi/{$code}/hqdefault.jpg"; ?>" alt="<?php echo $one_minute_list[0]->post_title; ?>">
                        <span class="ps-one-minute--figure-txt w-100 font-title text-white p-3">
                            <i class="fa-solid fa-circle-play text-danger"></i> <?php echo $one_minute_list[0]->post_title; ?>
                        </span>
                        <i class="fa-solid fa-circle-play ps-one-minute--figure-play text-danger d-none d-lg-inline-block"></i>
                    </a>
                <?php
                }
                ?>
                <div class="ps-one-minute--nav ps-md-3 pt-3 pt-md-0">
                    <div class="d-lg-flex flex-lg-column">
                        <?php
                        $i = 0;
                        foreach ($one_minute_list as $minute) :
                            $code = get_field('ps_video_id', $minute->ID);
                            if ($code) {
                        ?>
                                <a href="#" class="ps-one-minute--nav-item d-md-flex justify-content-md-between<?php echo $i == 0 ? ' active' : ''; ?>" title="<?php echo $minute->post_title; ?>" data-video-id="<?php echo $code; ?>">
                                    <img src="<?php echo "https://img.youtube.com/vi/{$code}/3.jpg"; ?>" alt="<?php echo $minute->post_title; ?>">
                                    <h6 class="fs-6 mb-0 ps-3">
                                        <span class="text-white"><small><?php echo $minute->post_title; ?></small></span>
                                        <span class="d-inline-block ps-one-minute--time w-100 mt-2">
                                            <i class="fa-regular fa-clock"></i> <?php echo get_the_date('d \d\e F', $minute->ID); ?>
                                        </span>
                                    </h6>
                                </a>
                        <?php
                            }
                            $i++;
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
$reels = get_term_by('name', 'videos curtos', 'programas');
$reels_list = array();
if ($reels) {
    $reels_list = get_posts(
        array(
            'posts_per_page' => 6,
            'post_type' => 'tvsertao',
            'tax_query' => array(
                array(
                    'taxonomy' => 'programas',
                    'field' => 'term_id',
                    'terms' => $reels->term_id,
                )
            )
        )
    );
}
if (!empty($reels_list)) :
?>
    <div class="col-12 col-md-4 mb-4">
        <div class="w-100 ps-home-reels p-3 border-bottom border-4 border-dark">
            <h5 class="ps-home-reels--header text-uppercase mb-3 pb-3">
                <a href="<?php echo get_term_link($reels->term_id, 'programas'); ?>" title="Ver todos os Vídeos curtos">
                    <i class="fa-solid fa-clock-rotate-left text-danger"></i> <strong>Vídeos curtos</strong>
                </a>
            </h5>
            <div class="w-100 ps-home-reels--nav cycle-slideshow" data-cycle-fx="fade" data-cycle-timeout="0" data-swipe="true" data-cycle-prev=".ps-home-reels--nav-prev" data-cycle-next=".ps-home-reels--nav-next" data-loop="1" data-cycle-slides="> .ps-home-reels--nav-item">
                <?php
                foreach ($reels_list as $rell) :
                    $code = get_field('ps_video_id', $rell->ID);
                    if ($code) {
                ?>
                        <div class="ps-home-reels--nav-item w-100">
                            <a href="#" title="" data-video-id="<?php echo $code; ?>" class="d-inline-block border border-3 border-danger w-100 position-relative">
                                <img src="<?php echo "https://img.youtube.com/vi/{$code}/hqdefault.jpg"; ?>" alt="" class="w-100" data-bs-toggle="modal" data-bs-target="#videoHomeModal">
                                <h6 class="d-flex position-absolute p-3">
                                    <span class="d-block text-white flex-shrink-1">
                                        <i class="fa-solid fa-play"></i>
                                    </span>
                                    <span class="d-block text-white ps-2 fw-bolder">
                                        <?php echo $rell->post_title; ?>
                                    </span>
                                </h6>
                            </a>
                        </div>
                <?php
                    }
                endforeach;
                ?>
                <div class="btn-group w-100 mt-3" role="group" aria-label="Basic outlined example">
                    <a href="#" class="btn btn-outline-dark ps-home-reels--nav-prev">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                    <a href="#" class="btn btn-outline-dark ps-home-reels--nav-next">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
endif;
?>