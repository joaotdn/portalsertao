<?php
$obj = get_queried_object();

get_template_part('parts/widget-tv-radios');

// TODO noticias mais lidas nesta tag

// ps_ads_topo
$ads_int  = get_field('ps_ads_internas', 'option');
if ($ads_int) :
?>
<div class="w-100 border p-2 bg-light d-flex justify-content-center mt-4">
<?php
    shuffle($ads_int);
    $ads_int = $ads_int[0];
    if ($ads_int['ps_ads_internas_link']) {
?>
        <a href="<?php echo $ads_int['ps_ads_internas_link']; ?>" target="_blank" title="">
            <img src="<?php echo $ads_int['ps_ads_internas_conteudo']; ?>" alt="Anúncio">
        </a>
    <?php } else { ?>
        <img src="<?php echo $ads_int['ps_ads_internas_conteudo']; ?>" alt="Anúncio">
<?php }
echo "</div>";
endif; ?>