<?php
$fone  = get_field('epb-phone', 'option');
$email = get_field('epb-email', 'option');
?>
<div class="epb-offcanvas position-fixed bg-primary p-2 d-md-none">
    <div class="row">
        <div class="col-12 text-end text-white">
            <i class="fa-solid fa-xmark toggle-offcanvas"></i>
        </div>
        <div class="col-12 input-group mt-3">
            <input type="text" class="form-control border-info" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2">
            <button class="btn btn-outline-info px-2 px-md-4" type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <div class="col-12 mt-3">
            <ul class="nav flex-column">
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
                <?php if(isset($fone)): ?>
                <li class="nav-item">
                    <a href="tel:<?php echo $fone; ?>" class="text-white nav-link" title="Ligue para nossa redação">
                        <small>
                            <i class="fa-solid fa-phone text-warning"></i> <?php echo $fone; ?>
                        </small>
                    </a>
                </li>
                <?php 
                    endif;
                    if(isset($email)):
                ?>
                <li class="nav-item">
                    <a href="mailto:<?php echo $email; ?>" class="text-white nav-link" title="Mande-nos um email">
                        <small>
                            <i class="fa-solid fa-envelope text-warning"></i> Fale conosco
                        </small>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</div>
<div class="epb-offcanvas-overlay toggle-offcanvas position-fixed d-md-none"></div>