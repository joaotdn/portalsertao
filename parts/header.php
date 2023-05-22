<header class="epb-header container-fluid px-0">
    <nav class="epb-header__top-bar width-auto py-sm-1 py-md-0 bg-primary">
        <ul class="nav justify-content-center fs-6 d-none d-md-flex">
            <?php
            $category_id = get_cat_ID('Variedades');
            $tags = get_category_tags(array('categories' => $category_id));
            foreach ($tags as $tag) :
            ?>
                <li class="nav-item">
                    <a href="<?php echo $tag->tag_link; ?>" title="Ir para <?php echo $tag->tag_name; ?>" class="nav-link text-white">
                        <small><?php echo $tag->tag_name; ?></small>
                    </a>
                </li>
            <? endforeach; ?>
        </ul>
    </nav>
    <div class="container py-3">
        <div class="row align-items-center ">
            <div class="col-auto">
                <a href="#" class="toggle-offcanvas toggle-menu-mobile d-inline-block me-2 d-md-none" title="Abrir menu">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Marca do Espião PB" class="epb-header__logo">
                </a>
            </div>
            <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="col input-group epb-header__search d-none d-md-flex">
                <input type="text" class="form-control border-primary" placeholder="Buscar..." name="s" aria-label="Buscar..." aria-describedby="button-addon2">
                <button class="btn btn-primary px-2 px-md-4" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <div class="col col-md-auto ms-md-2 text-end">
                <ul class="epb-social list-inline fs-3 mb-0">
                    <?php
                    $facebook  = get_field('epb_facebook', 'option');
                    $instagram = get_field('epb_instagram', 'option');
                    $youtube = get_field('epb_youtube', 'option');
                    if ($facebook):
                    ?>
                    <li class="list-inline-item"><a href="<?php echo $facebook; ?>" target="_blank" title="Espião PB no Facebook" class="text-primary"><i class="fa-brands fa-facebook"></i></a></li>
                    <?php endif; if($instagram): ?>
                    <li class="list-inline-item"><a href="<?php echo $instagram; ?>" target="_blank" title="Espião PB no Instagram" class="text-puple"><i class="fa-brands fa-instagram"></i></a></li>
                    <?php endif; if($youtube): ?>
                    <li class="list-inline-item"><a href="<?php echo $youtube; ?>" target="_blank" title="Espião PB no Youtube" class="text-danger"><i class="fa-brands fa-youtube"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-auto text-end fw-light fs-6 d-none d-lg-flex">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                    <small><span class="current-city"></span></small>
                    <small><span class="current-date"></span></small><br>
                    <span class="temp-max text-danger text-opacity-50 d-sm-inline-block"></span>
                    <span class="temp-min text-info ms-2 d-sm-inline-block"></span>
                </span>
            </div>
        </div>
    </div>
</header>