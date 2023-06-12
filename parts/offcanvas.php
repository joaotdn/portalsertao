<div class="ps-offcanvas-menu bg-black">
    <div class="ps-offcanvas-content position-relative pt-4 px-3">
        <div class="row">
            <div class="col-12">
                <a href="#" title="Fechar menu" class="ps-toggle-offcanvas text-light">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
            <div class="col-12 mt-3">
                <nav class="nav flex-column ps-offcanvas-nav">
                    <?php
                    $items = wp_get_nav_menu_items('Menu principal');
                    if ($items) :
                        foreach ($items as $item) :
                    ?>
                        <a class="nav-link text-light" href="<?php echo $item->url; ?>" title="Ver postagens em <?php echo $item->title; ?>"><?php echo $item->title; ?></a>
                    <?php endforeach;
                    endif; ?>
                </nav>
            </div>
            <div class="col-12 ps-top-social">
                <ul class="nav justify-content-center py-3">
                    <?php
                    $facebook  = get_field('ps_facebook', 'option');
                    $instagram = get_field('ps_instagram', 'option');
                    $youtube = get_field('ps_youtube', 'option');
                    $twitter = get_field('ps_twitter', 'option');
                    $whatsapp = get_field('ps_whatsapp', 'option');
                    if ($facebook) :
                    ?>
                        <li class="nav-item">
                            <a href="<?php echo $facebook; ?>" target="_blank" class="nav-link text-white px-2 py-0 text-white-50" title="Siga-nos no Facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif;
                    if ($youtube) : ?>
                        <li class="nav-item">
                            <a href="<?php echo $youtube; ?>" target="_blank" class="nav-link text-white px-2 py-0 text-white-50" title="Siga-nos no Youtube">
                                </i><i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    <?php endif;
                    if ($twitter) : ?>
                        <li class="nav-item">
                            <a href="<?php echo $twitter; ?>" target="_blank" class="nav-link text-white px-2 py-0 text-white-50" title="Siga-nos no Twitter">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif;
                    if ($instagram) : ?>
                        <li class="nav-item">
                            <a href="<?php echo $instagram; ?>" target="_blank" class="nav-link text-white px-2 py-0 text-white-50" title="Siga-nos no Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif;
                    if ($whatsapp) : ?>
                        <li class="nav-item">
                            <a href="<?php echo $whatsapp; ?>" target="_blank" class="nav-link text-white px-2 py-0 text-white-50" title="Siga-nos no Whatsapp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ps-toggle-offcanvas ps-offcanvas-over"></div>