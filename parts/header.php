<div class="ps-top-bar container-fluid px-0 py-2 bg-black border-bottom border-dark border-2 d-none d-lg-block">
    <div class="container">
        <?php get_template_part('parts/top-bar'); ?>
    </div>
</div>

<header class="container-fluid ps-header bg-black">
    <div class="container">
        <div class="row ps-header-content">
            <div class="col-12">
                <div class="py-3 d-flex justify-content-center align-items-center">
                    <div>
                        <a href="#" class="ps-toggle-offcanvas ps-toggle-menu text-light me-3">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-logo.png" alt="Marca do Portal Sertão" class="ps-header-logo" width="180">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>