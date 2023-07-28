<?php
get_header('blog');
global $post;
$obj = get_queried_object();
$terms = get_the_terms($post->ID, 'colunistas');
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
                            <?php
                            if (!empty($terms)) {
                                echo "<span class=\"ps-post-bar--author\">Por <strong><a href=\"" . get_term_link($terms[0]->term_id, 'colunistas') . "\" title=\"Veja mais matérias de " . $terms[0]->name . "\">" . $terms[0]->name . "</a></strong> - </span>";
                            }
                            ?>
                            <span><?php echo get_the_date('d \d\e F \d\e Y \à\s h:i', $post->ID); ?></span>
                        </div>
                        <div class="col-sm-12 col-md-6 my-2 my-md-0">
                            <div class="w-100 d-flex justify-content-md-end">
                                <?php get_template_part('parts/share-post-buttons'); ?>
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
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
</article>
<?php
get_footer();
?>