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
                <div class="row">
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-align-left"></i> Editoriais</h6>
                                <a class="nav-link" href="#">Entretenimento</a>
                                <a class="nav-link" href="#">Política</a>
                                <a class="nav-link" href="#">Paraíba</a>
                                <a class="nav-link" href="#">Manchetes</a>
                                <a class="nav-link" href="#">Polícia</a>
                                <a class="nav-link" href="#">Economia</a>
                                <a class="nav-link" href="#">Esportes</a>
                                <a class="nav-link" href="#">Saúde</a>
                                <a class="nav-link" href="#">Tecnologia</a>
                                <a class="nav-link" href="#">Educação</a>
                                <a class="nav-link" href="#">Brasil</a>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-location-arrow"></i> Municípios</h6>
                                <a class="nav-link" href="#">Água Branca - PB</a>
                                <a class="nav-link" href="#">Aguiar - PB</a>
                                <a class="nav-link" href="#">Alagoa Grande - PB</a>
                                <a class="nav-link" href="#">Alagoa Nova - PB</a>
                                <a class="nav-link" href="#">Alagoinha - PB</a>
                                <a class="nav-link" href="#">Alcantil - PB</a>
                                <a class="nav-link" href="#">Algodão de Jandaíra - PB</a>
                                <a class="nav-link" href="#">Alhandra - PB</a>
                                <a class="nav-link" href="#">Amparo - PB</a>
                                <a class="nav-link" href="#">Cajazeiras - PB</a>
                                <a class="nav-link" href="#"><strong>ver todas</strong></a>
                            </nav>
                        </div>
                    </div>

                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="w-100 d-flex justify-content-md-end">
                            <nav class="nav flex-column ps-footer--nav">
                                <h6 class="text-white font-title"><i class="fa-solid fa-quote-left"></i> Colunas</h6>
                                <a class="nav-link" href="#">Alexandre Costa</a>
                                <a class="nav-link" href="#">CALDEIRÃO POLÍTICO</a>
                                <a class="nav-link" href="#">Jornal Gazeta do Alto Piranhas</a>
                                <a class="nav-link" href="#">José Antônio de Albuquerque</a>
                                <a class="nav-link" href="#">Margarida Araújo</a>
                                <a class="nav-link" href="#">Rui Leitão</a>
                                <a class="nav-link" href="#">WGLEYSON DE SOUZA</a>
                                <a class="nav-link" href="#"><strong>ver todas</strong></a>
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
<?php
wp_footer();
?>
</body>

</html>