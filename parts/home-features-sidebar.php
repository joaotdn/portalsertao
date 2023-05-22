<figure class="epb-blog-link mb-4 text-center">
    <a href="https://blogdoespiao.com.br/" class="d-inline-block" target="_blank" title="Visite no Blog do Espião">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-banner.png" alt="Banner do Blog do Espião" class="rounded">
    </a>
</figure>

<section class="economic-indicators mb-3 position-relative">
    <div class="card border-light">
        <h5 class="card-header text-primary fs-6 font-title">
            <i class="fa-solid fa-coins text-opacity-50"></i>
            <span class="rf"></span>
            Indicadores Econômicos
        </h5>
        <?php get_template_part('parts/loader', null, array('class' => 'indicators-loader')) ?>
        <ul class="list-group list-group-flush invisible">
            <li class="list-group-item d-flex cur-usd">
                <span class="d-inline-block cur-name flex-grow-1">Dólar (USD)</span>
                <span class="cur-min d-inline-block flex-fill text-end"></span>
                <span class="cur-max d-inline-block ms-2 flex-fill text-end"></span>
            </li>
            <li class="list-group-item d-flex cur-euro">
                <span class="d-inline-block cur-name flex-grow-1">Euro (EUR)</span>
                <span class="cur-min d-inline-block flex-fill text-end"></span>
                <span class="cur-max d-inline-block ms-2 flex-fill text-end"></span>
            </li>
            <li class="list-group-item d-flex cur-btc">
                <span class="d-inline-block cur-name flex-grow-1">Bitcoin (BTC)</span>
                <span class="cur-min d-inline-block flex-fill text-end"></span>
                <span class="cur-max d-inline-block ms-2 flex-fill text-end"></span>
            </li>
        </ul>
    </div>
</section>

<div class="features-sidebar-ads text-center">
    <figure class="ads--300 border bg-light d-inline-block">
        <span class="text-"><small>Publicidade</small></span>
    </figure>
</div>