<?php
$fone  = get_field('epb-phone', 'option');
$email = get_field('epb-email', 'option');
?>
<footer id="epb-footer" class="container-fluid px-0 bg-primary mt-6 py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-md-start justify-content-center">
                <a href="<?php echo home_url(); ?>" title="Voltar para a página principal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="Marca do Espião PB">
                </a>
            </div>
            <div class="col-12 col-md-6 aling-items-end d-none d-md-flex justify-content-end">
                <ul class="nav font-title">
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
            </div>
            <div class="epb-footer__credits col-12 text-center text-white mt-4 pt-4">
                <div class="row">
                    <span class="d-inline-block fs-6 text-white text-muted">
                        <small><i class="fa-solid fa-phone"></i> <?php echo $fone; ?></small>
                    </span>
                    <span class="d-inline-block fs-6 text-white text-muted">
                        <small><i class="fa-solid fa-envelope"></i> <?php echo $email; ?></small>
                    </span>
                </div>
                <p class="fs-6 m-0 text-muted"><small>Espião PB. © 2022 - Todos os direitos reservados.</small></p>
            </div>
        </div>
    </div>
</footer>
<?php
get_template_part('parts/radio-player');
wp_footer();
?>
</body>

</html>