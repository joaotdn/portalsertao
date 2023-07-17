<?php
// ps_ads_topo
$ads_top  = get_field('ps_ads_topo', 'option');
if ($ads_top) :
    shuffle($ads_top);
    $ads_top = $ads_top[0];
    if ($ads_top['ps_ads_topo_link']) {
?>
        <a href="<?php echo $ads_top['ps_ads_topo_link']; ?>" target="_blank">
            <img src="<?php echo $ads_top['ps_ads_topo_conteudo']; ?>" alt="" class="ads-top-img">
        </a>
    <?php } else { ?>
        <img src="<?php echo $ads_top['ps_ads_topo_conteudo']; ?>" alt="" class="ads-top-img">
<?php }
endif; ?>