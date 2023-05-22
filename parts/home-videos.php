<?php
$category_id = get_cat_ID('Videos');
$posts = get_posts(array(
    'posts_per_page' => 4,
    'cat' => $category_id
));
?>
<section class="epb-videos container-fluid px-0 my-4 py-4 bg-black">
    <div class="container">
        <div class="row">
            <header class="col-12 epb-videos__header mb-4 position-relative">
                <h1 class="font-title fs-5">
                    <a href="<?php echo get_category_link($category_id); ?>" class="text-warning" title="Veja mais vídeos">
                        <i class="fa-solid fa-film"></i> Vídeos
                    </a>
                </h1>
            </header>

            <div class="col-12 col-md-8 epb-videos__galery">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6 epb-videos__galery--media">
                        <iframe src="https://www.youtube.com/embed/<?php echo get_field('epb_videos_id', $posts[0]->ID); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100" height="300"></iframe>
                        <h1 class="fs-5 font-title mt-2">
                            <a href="<?php echo get_the_permalink($posts[0]->ID); ?>" title="<?php echo $posts[0]->post_title; ?>" class="text-warning video-title-player">
                                <?php echo $posts[0]->post_title; ?>
                            </a>
                        </h1>
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 epb-videos__galery--list">
                        <div class="row d-flex flex-row">
                            <?php foreach ($posts as $i => $video) : $video_id = get_field('epb_videos_id', $video->ID); ?>
                                <div class="video-th d-flex align-items-center mb-3 d-none d-md-flex <?php if($i == 0) {echo 'active';} ?>">
                                    <div class="flex-shrink-0">
                                        <a href="#" data-youtubeid="<?php echo $video_id; ?>" title="<?php echo $video->post_title; ?>" class="epb-videos__galery--thumb position-relative display-block">
                                            <img src="https://img.youtube.com/vi/<?php echo $video_id; ?>/1.jpg" alt="...">
                                            <div class="play-media text-warning">
                                                <i class="fa-solid fa-play"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-grow-1 ms-3 d-none d-lg-flex">
                                        <a href="#" data-youtubeid="<?php echo $video_id; ?>" data-video-link="<?php echo get_the_permalink($video->ID); ?>" title="<?php echo $video->post_title; ?>" class="text-warning font-title video-title"><?php echo $video->post_title; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row d-flex d-md-none epb-videos__galery--pager">
                            <div class="col-12 text-center">
                                <a href="#" data-youtubeid="UnbS2KFHDng" title="" class="text-warning font-title active"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 ps-md-4 mt-sm-4 mt-md-0">
                <?php get_template_part('parts/radios'); ?>

                <div class="mt-4 text-center">
                    <figure class="ads--300 opacity-25 p-3 fs-6 text-white border d-inline-block">
                        <span class="text-uppercase"><small>Publicidade</small></span>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>