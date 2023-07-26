<section class="ps-main-menu container-fluid bg-danger">
    <div class="container">
        <div class="d-flex align-items-center">
            <nav class="w-100 nav">
            <?php
            $items = wp_get_nav_menu_items('Menu principal');
            if ($items):
            foreach($items as $item):
            ?>
                <a class="nav-link" href="<?php echo $item->url; ?>" title="Ver postagens em <?php echo $item->title; ?>"><?php echo $item->title; ?></a>
            <?php endforeach; endif; ?>
            </nav>
            <div class="flex-shrink-1 text-white position-relative ps-toggle-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <form action="<?php echo home_url('/'); ?>" class="ps-form-search-mo w-100 p-2" role="search" method="get">
                <div class="input-group input-group-sm">
                    <input type="search" class="form-control" placeholder="Buscar" name="s">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="container-fluid bg-dark ps-search-content">
    <div class="container">
        <div class="row">
            <div class="col py-3">
                <form action="<?php echo home_url('/'); ?>" role="search" method="get" class="ps-form-search w-100">
                    <input type="search" class="w-100 form-control form-control-sm" name="s">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="w-100 d-flex justify-content-center p-2 bd-light border">
                <?php get_template_part('parts/ads-top'); ?>
            </div>
        </div>
    </div>
</div> -->