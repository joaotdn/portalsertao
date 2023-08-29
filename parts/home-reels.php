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
                <a href="#" title="Ver todos os vídeos em Sertão em 1 minuto">
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
?>