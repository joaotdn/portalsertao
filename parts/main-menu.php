<section class="epb-main-menu container d-none d-md-block">
    <div class="row border-top border-bottom border-info ">
        <nav class="col-auto epb-main-menu__categories">
            <ul class="nav m-0">
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
        </nav>
        <div class="col epb-main-menu__news d-flex align-items-center text-truncate">
            <span class="fw-semibold text-info">
                <i class="fa-solid fa-clock"></i>
                Últimas Notícias:
            </span>
            <?php
            $news = get_posts(array( 'posts_per_page' => 6 ));
            ?>
            <div class="epb-main-menu__news--list d-flex align-items-center" data-cycle-fx="fade" data-cycle-timeout="2000" data-cycle-slides="> a" data-cycle-prev=".nav-news-prev" data-cycle-next=".nav-news-next">
                <?php foreach($news as $new): ?>
                <a href="<?php echo get_the_permalink($new->ID); ?>" class="d-inline-block text-muted text-decoration-none ps-2 fs-6" title="<?php echo $new->post_title; ?>"><?php echo $new->post_title; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-auto ms-2 text-decoration-none d-flex align-items-center">
            <a href="#" title="Anterior" class="d-inline-block nav-news-prev">
                <i class="fa-solid fa-angle-left text-info"></i>
            </a>
            <a href="#" title="Próxima" class="d-inline-block ms-2 nav-news-next">
                <i class="fa-solid fa-angle-right text-info"></i>
            </a>
        </div>
    </div>
</section>