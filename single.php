<?php
get_header('single');
global $post;
$obj = get_queried_object();
$category = get_the_category();
$meta = get_post_meta($post->ID);
$relateds = get_posts(array(
    'posts_per_page' => 3,
    'cat' => $category[0]->term_id,
    'post__not_in' => array($post->ID)
));
$post_author = get_the_author_meta('first_name', $post->post_author) . ' ' . get_the_author_meta('last_name', $post->post_author);
$tags = get_the_tags();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="w-100 border p-2 my-4 bg-light d-flex justify-content-center">
            <?php
            // ps_ads_topo
            $ads_top  = get_field('ps_ads_topo', 'option');
            if ($ads_top) :
                shuffle($ads_top);
                $ads_top = $ads_top[0];
                if ($ads_top['ps_ads_topo_link']) {
            ?>
                    <a href="<?php echo $ads_top['ps_ads_topo_link']; ?>" target="_blank">
                        <img src="<?php echo $ads_top['ps_ads_topo_conteudo']; ?>" alt="">
                    </a>
                <?php } else { ?>
                    <img src="<?php echo $ads_top['ps_ads_topo_conteudo']; ?>" alt="">
            <?php }
            endif; ?>
            </div>
            <div class="w-100 single-content">
                <div class="w-100 ps-post-title" target="_blank" class="nav-link pe-0">
                    <p class="font-tag"><?php echo $tags[0]->name; ?></p>
                    <h1 class="font-title"><?php the_title(); ?></h1>
                    <p class="text-excerpt mb-0"><small><?php echo get_the_excerpt($post->ID); ?></small></p>
                </div>

                <div class="w-100 border-top py-2 mt-3 ps-post-bar">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <?php
                                if ($post_author) {
                                    echo "<span class=\"ps-post-bar--author\">Por <strong><a href=\"". get_author_posts_url($post->post_author) ."\" title=\"Veja mais matérias de ". $post_author ."\">". $post_author ."</a></strong> - </span>";
                                }
                            ?>
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
                    <a href="#" class="single-fz-plus"><i class="fa-solid fa-font"></i><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="single-fz-minor"><i class="fa-solid fa-font d-inline-block ms-2"></i><i class="fa-solid fa-minus"></i></a>
                </div>

                <div class="w-100 ps-post-content mt-4">
                    <?php
                        $video_cod = get_field('ps_youtube_cod');
                        if($video_cod):
                        ?>
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe src="https://www.youtube.com/embed/<?php echo $video_cod; ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <?php
                        endif;
                        the_content();
                    ?>
                </div>
                <?php
                
                ?>

                <?php
                    $gallery = get_field('ps_galeria_de_fotos');
                    if(!empty($gallery)):
                ?>
                <div class="w-100 fotorama p-2 bg-dark rounded-3 mt-4 border-bottom border-2">
                    <?php
                        foreach($gallery as $pic) {
                            echo "<img src=\"". $pic['url'] ."\" alt=\"". $pic['name'] ."\">";
                        }
                    ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article>
<?php
get_footer();
?>