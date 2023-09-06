<?php
get_header('podcasts');
global $post;
$obj = get_queried_object();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="w-100 border p-2 my-4 bg-light d-flex justify-content-center">
                <?php get_template_part('parts/ads-top'); ?>
            </div>
            <div class="w-100 single-content">
                <div class="w-100 ps-post-title" target="_blank" class="nav-link pe-0">
                    <h1 class="font-title ps-post-title--text"><?php the_title(); ?></h1>
                </div>

                <div class="w-100 border-top py-2 mt-3 ps-post-bar">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span><?php echo get_the_date('d \d\e F \d\e Y \à\s h:i', $post->ID); ?></span>
                        </div>
                        <div class="col-sm-12 col-md-6 my-2 my-md-0">
                            <div class="w-100 d-flex justify-content-md-end">
                                <?php get_template_part('parts/share-post-buttons'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-100 ps-post-content mt-4">
                    <?php
                    $track = get_field('ps_podcast_audio', $audio->ID);
                    if ($track) :
                    ?>
                        <audio src="<?php echo $track; ?>" controls></audio>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <div class="w-100 my-4">
                <div class="fb-comments" data-href="<?php echo get_the_permalink($post->ID); ?>" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <?php get_sidebar('tag'); ?>
        </div>
    </div>
</article>
<?php
get_footer();
?>