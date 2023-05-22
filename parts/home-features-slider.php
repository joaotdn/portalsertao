<div class="col-12 col-md-6 col-lg-4 mt-md-4 px-2 slide-features position-relative" data-cycle-fx="fade" data-cycle-timeout="5000" data-cycle-slides="> .card" data-cycle-prev=".nav-features__nav--prev" data-cycle-next=".nav-features__nav--next" data-cycle-pager=".features-pager" data-cycle-pager-template="<span></span>" data-cycle-swipe=true>
    <?php
    $posts = get_posts(array(
        'posts_per_page' => 4,
        'meta_key' => 'epb_home_slide',
        'meta_value' => true
    ));
    foreach ($posts as $post) :
        $cat = get_the_category($post->ID);
    ?>
        <div class="card">
            <a href="<?php echo get_the_permalink($post->ID); ?>" class="d-block" title="<?php echo $post->post_title; ?>">
                <?php echo get_the_post_thumbnail($post->ID, 'ebp-thumb-medium'); ?>
            </a>
            <div class="card-body mt-2">
                <p class="m-0 font-tag">
                    <?php echo wp_get_post_tags($post->ID)[0]->name; ?>
                </p>
                <h1 class="font-title fs-5">
                    <a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a>
                </h1>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="features-pager card-footer pt-2 text-muted text-center"></div>

    <div class="nav-features position-absolute d-flex justify-content-between">
        <a href="#" title="Anterior" class="d-inline-block py-1 px-2 bg-white nav-features__nav--prev">
            <i class="fa-solid fa-angle-left"></i>
        </a>
        <a href="#" title="Próxima" class="d-inline-block py-1 px-2 bg-white nav-features__nav--next">
            <i class="fa-solid fa-angle-right"></i>
        </a>
    </div>
</div>