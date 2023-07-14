<div class="row d-flex justify-content-between">
    <div class="col-auto text-white-50">
        <span class="temp-max"></span>
        <span class="temp-min d-inline-block ps-1"></span>
        <span class="current-city d-inline-block ps-2"></span>
        <span class="current-date text-lowercase"></span>
    </div>

    <div class="col-auto ps-top-tags">
        <ul class="nav justify-content-center py-0">
            <?php
            $tags = get_tags(array(
                'taxonomy' => 'post_tag',
                'orderby' => 'name',
                'hide_empty' => false,
                'number' => 5
            ));

            foreach ($tags as $tag) { ?>
                <li class="nav-item">
                    <a href="<?php echo get_term_link($tag); ?>" title="Ir para <?php echo $tag->name; ?>" class="nav-link text-white px-2 py-0">
                        <?php echo $tag->name; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="col-auto ps-top-social">
        <ul class="nav justify-content-end py-0">
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