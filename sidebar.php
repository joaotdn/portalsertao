<?php
$obj = get_queried_object();

get_template_part('parts/widget-tv-radios');

$categories = get_the_category($obj->ID);
if (!empty($categories)) :
    $category_id = $categories[0]->term_id;
    $relateds = get_posts(array(
        'cat' => $category_id,
        'post__not_in' => array($obj->ID),
        'posts_per_page' => 3
    ));
    if (!empty($relateds)) :
?>
        <div class="w-100 ps-widget my-4">
            <h6 class="w-100 border-bottom border-3 pb-2 m-0 ps-widget--title"><i class="fa-regular fa-folder"></i> Notícias relacionadas</h6>
            <nav class="w-100 mt-3">
                <?php foreach ($relateds as $related) : ?>
                    <div class="row mb-3">
                        <div class="col-auto">
                            <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>" class="d-block">
                                <img src="<?php echo get_the_post_thumbnail_url($related->ID, 'ps-thumb-small') ?>" alt="<?php echo get_the_title($related->ID); ?>">
                            </a>
                        </div>
                        <div class="col">
                            <p class="font-tag"><?php echo get_the_tags($related->ID)[0]->name; ?></p>
                            <h6 class="font-title">
                                <a href="<?php echo get_the_permalink($related->ID); ?>" title="<?php echo get_the_title($related->ID); ?>"><?php echo get_the_title($related->ID); ?></a>
                            </h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </nav>
            <a href="<?php echo get_category_link($category_id); ?>" title="Veja mais notícias relacionadas" class="w-100 btn btn-outline-primary btn-sm">Veja mais</a>
        </div>
<?php
    endif;
endif;
?>