<?php
$prefeituras = get_field('ps_prefeituras', 'option');
if (!empty($prefeituras)) :
?>
    <section class="container ps-home-cities mb-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-3 pb-3">
                        <h5 class="font-title m-0 border-bottom d-inline-block w-100"><i class="fa-solid fa-city"></i> Prefeituras</h5>
                    </div>
                    <?php
                    foreach ($prefeituras as $prefeitura) :
                    ?>
                        <div class="col-6 col-md-2">
                            <a href="<?php echo $prefeitura['ps_prefeituras_link']; ?>" class="nav-link" title="<?php echo $prefeitura['ps_prefeituras_nome']; ?>" target="_blank">
                                <img src="<?php echo $prefeitura['ps_prefeituras_logo']; ?>" alt="<?php echo $prefeitura['ps_prefeituras_nome']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>