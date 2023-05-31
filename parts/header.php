<div class="ps-top-bar container-fluid px-0 py-2 bg-black border-bottom border-dark border-2 d-none d-lg-block">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-auto text-white-50">
                <span class="temp-max"></span>
                <span class="temp-min d-inline-block ps-1"></span>
                <span class="current-city d-inline-block ps-2"></span>
                <span class="current-date text-lowercase"></span>
            </div>

            <div class="col-auto ps-top-tags">
                <ul class="nav justify-content-center py-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Cajazeiras</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Eleições</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Exclusivo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Apelo</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0">Neligencia</a>
                    </li>
                </ul>
            </div>

            <div class="col-auto ps-top-social">
                <ul class="nav justify-content-end py-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0 text-white-50">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0 text-white-50">
                            </i><i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0 text-white-50">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0 text-white-50">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white px-2 py-0 text-white-50">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="container-fluid ps-header bg-black">
    <div class="container">
        <div class="row ps-header-content py-3 d-flex justify-content-between align-items-center">
            <div class="col-lg-auto col-md-4 col-9 mb-3 mb-md-0">
                <a href="#" class="ps-toggle-offcanvas ps-toggle-menu text-light me-3">
                    <i class="fa-solid fa-bars"></i>
                </a>
                <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-logo.png" alt="Marca do Portal Sertão" class="ps-header-logo" width="240">
                </a>
            </div>

            <div class="col-3 d-flex d-md-none ps-top-mobile-radio justify-content-end">
                <a href="#" title="Tocar rádio" class="text-danger">
                    <i class="fa-solid fa-circle-play"></i>
                </a>
            </div>

            <div class="col-lg-auto col-md-8 col-sm-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/adsp.png" alt="">
            </div>

            <div class="col-auto ps-top-controls">
                <div class="ps-top-radio position-relative">
                    <a href="#" title="Tocar rádio">
                        <i class="fa-solid fa-circle-play"></i>
                    </a>
                    <div class="py-1 px-1 mt-2 text-light rounded-1 overflow-hidden ps-top-playlist">
                        <span></span>
                    </div>
                </div>
                <audio src="https://player.jnbhost.com.br/proxy/7126/stream" id="ps-top-player"></audio>
            </div>
        </div>
    </div>
</header>