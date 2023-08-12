<div class="ps-top-bar container-fluid px-0 py-2 bg-black border-bottom border-dark border-2 d-none d-lg-block">
    <div class="container">
        <?php get_template_part('parts/top-bar'); ?>
    </div>
</div>

<header class="container-fluid ps-header bg-black">
    <div class="container py-3">
        <div class="row ps-header-content d-flex align-items-center">
            <div class="col-auto d-none d-lg-block">
                <a href="#" class="ps-toggle-offcanvas ps-toggle-menu text-light me-3 is-single">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>
            <div class="col text-center">
                <a href="#" class="ps-toggle-offcanvas ps-toggle-menu text-light me-3 is-single d-inline-block d-lg-none">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-logo.png" alt="Marca do Portal Sertão" class="ps-header-logo" width="180">
                </a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="flex-shrink-1 text-white position-relative ps-toggle-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </div>
</header>