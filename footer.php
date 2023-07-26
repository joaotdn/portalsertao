<footer class="ps-footer container-fluid bg-dark py-4 mt-4 border-top border-4 border-black">
    <div class="container">
        <div class="row d-flex">
            <div class="col-12 col-md-4">
                <a href="<?php echo home_url('/') ?>" title="Voltar pra página principal">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ps-logo-small.png" alt="Marca do Portal Sertão">
                </a>
                <ul class="nav justify-content-start py-0 my-3">
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
            <div class="col-12 col-md-8">
                <div class="row d-flex justify-content-end">
                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-align-left"></i> Editoriais</h6>
                                <?php
                                $categories = get_categories();
                                foreach($categories as $cat):
                                    if ($cat->name == 'NULL') { continue; }
                                ?>
                                <a class="nav-link" href="<?php echo get_category_link($cat->term_id); ?>" title="Ver notícias em <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-location-arrow"></i> Municípios</h6>
                                <?php
                                $categories = get_categories(array(
                                    'taxonomy' => 'cities',
                                    'hide_empty' => false
                                ));
                                foreach($categories as $cat):
                                ?>
                                <a class="nav-link" href="<?php echo get_term_link($cat->term_id, 'cities') ?>" title="Ver notícias em <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-quote-left"></i> Colunas</h6>
                                <?php
                                $categories = get_categories(array(
                                    'taxonomy' => 'colunistas',
                                    'hide_empty' => false
                                ));
                                foreach($categories as $cat):
                                ?>
                                <a class="nav-link" href="<?php echo get_term_link($cat->term_id, 'colunistas') ?>" title="Ver colunas de <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-tv"></i> TV Sertão</h6>
                                <?php
                                $categories = get_categories(array(
                                    'taxonomy' => 'programas',
                                    'hide_empty' => false
                                ));
                                foreach($categories as $cat):
                                ?>
                                <a class="nav-link" href="<?php echo get_term_link($cat->term_id, 'programas'); ?>" title="Ver videos em <?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-footer--credits w-100 p-4 text-center mt-4 pb-0">
        <p class="m-0">&copy; 2023 - <a href="#" title="" class="text-white">Portal Sertão</a>. Todos os direitos reservados</p>
    </div>
</footer>
<audio src="https://player.jnbhost.com.br/proxy/7126/stream" id="ps-top-player"></audio>
<?php
wp_footer();
?>
</body>

</html>