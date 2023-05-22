<nav class="epb-scroll-menu container-fluid position-fixed">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col flex-shrink-1 py-2">
                <a href="#" class="toggle-offcanvas toggle-menu-mobile d-inline-block me-2 d-md-none" title="Abrir menu">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <a href="<?php echo home_url(); ?>" title="Ir para a página principal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Marca do Espião PB" width="100">
                </a>
            </div>
            <nav class="col-auto epb-main-menu__categories d-none d-md-block">
                <ul class="nav m-0">
                    <?php
                    wp_nav_menu(array(
                        'menu'       => 'Menu principal',
                        'items_wrap' => '%3$s',
                        'container'  => '',
                        'depth'         => 1,
                        'fallback_cb'   => false,
                        'add_li_class'  => 'nav-link fw-semibold'
                    ));
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</nav>