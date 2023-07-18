<?php
get_header('tvsertao');
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
                                <span>Compartilhar: </span>
                                <nav class="nav ps-post-share--nav">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Compartilhar post em Facebook" target="_blank" class="nav-link pe-0 py-0"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" title="Compartilhar post em Twitter" class="nav-link pe-0 py-0"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo get_the_post_thumbnail_url($post->ID, 'ps-thumb-small-h') ?>&description=<?php the_title(); ?>" target="_blank" title="Compartilhar post em Pinterest" class="nav-link pe-0 py-0"><i class="fa-brands fa-pinterest"></i></a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" title="Compartilhar post em LinkedIn" class="nav-link pe-0 py-0"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="mailto:redacao@portalsertao.com?&subject=&cc=&bcc=&body=<?php the_permalink(); ?>" target="_blank" title="Envie esse post por email" class="nav-link pe-0 py-0"><i class="fa-regular fa-envelope"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-100 ps-accessibility-opt d-flex justify-content-end mt-3">
                    <a href="#" class="single-read-post d-inline-block" title="Ler matéria"><i class="fa-solid fa-volume-off"></i></a>
                    <a href="#" class="single-fz-plus d-inline-block ms-2" title="Aumentar a fonte"><i class="fa-solid fa-font"></i><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="single-fz-minor d-inline-block ms-2" title="Diminuir a fonte"><i class="fa-solid fa-font"></i><i class="fa-solid fa-minus"></i></a>
                </div>

                <div class="w-100 ps-post-content mt-4">
                    <?php
                    $video_cod = get_field('ps_video_id');
                    if ($video_cod) :
                    ?>
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="https://www.youtube.com/embed/<?php echo $video_cod; ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    <?php
                    endif;
                    echo "<div class=\"w-100 ps-post-content--text\">";
                    the_content();
                    echo "</div>";
                    ?>
                </div>
            </div>
            <div class="w-100 my-4">
                <div class="fb-comments" data-href="<?php echo get_the_permalink($post->ID); ?>" data-width="100%" data-numposts="5"></div>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <?php get_sidebar('tvsertao'); ?>
        </div>
    </div>
</article>
<?php
get_footer();
?>