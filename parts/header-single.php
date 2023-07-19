<?php
$obj = get_queried_object();
?>
<div class="ps-top-bar container-fluid px-0 py-2 bg-black border-bottom border-dark border-2 d-none d-lg-block">
    <div class="container">
        <?php get_template_part('parts/top-bar'); ?>
    </div>
</div>

<header class="container-fluid ps-header bg-black border-bottom border-danger border-2">
    <div class="container">
        <div class="row ps-header-content py-3">
            <div class="col-12 d-flex align-items-center">
                <div>
                    <a href="#" class="ps-toggle-offcanvas ps-toggle-menu text-light me-3 is-single">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div>
                    <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-logo.png" alt="Marca do Portal Sertão" class="ps-header-logo" width="140">
                    </a>
                </div>

                <div class="text-center flex-grow-1">
                    <?php $terms = wp_get_post_terms($obj->ID, 'category'); ?>
                    <h2 class="font-title m-0 ps-header-content--title"><a href="<?php echo get_term_link($terms[0]->term_id, 'category'); ?>" title="Ver main em <?php echo $terms[0]->name; ?>" class="text-white w-bold"><i class="fa-solid fa-plus"></i> <?php echo $terms[0]->name; ?></a></h2>
                </div>

                <div>
                    <div class="w-100">
                        <div class="flex-shrink-1 text-white position-relative ps-toggle-search is-single">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form action="<?php echo home_url('/'); ?>" class="ps-form-search-mo w-100 p-2 mt-3" role="search" method="get">
                    <div class="input-group input-group-sm">
                        <input type="search" class="form-control" placeholder="Buscar" name="s">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

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