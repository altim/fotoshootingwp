<?php get_header(); ?>
<body>

    <div class="navigation-wrapper">
        <nav>

            <?php wp_nav_menu(array('theme_location' => 'top_right_menu', 'menu_class' => 'menu-top-right', 'link_before' => '', 'link_after' => '')); ?>

            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Foto-shooting" /></a>

            <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'menu-main', 'link_before' => '', 'link_after' => '', 'depth'=> 1 )); ?>

            <?php

            $menu_name = 'main_menu'; // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)

            if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                $menu = wp_get_nav_menu_object($locations[$menu_name]);

                $menu_items = wp_get_nav_menu_items($menu->term_id);

                //get all top menu items
                $top_menu = array();
                foreach ((array)$menu_items as $key => $menu_item) {
                    if ($menu_item->menu_item_parent == "0") {
                        $top_menu[] = $menu_item;
                    }
                }

                //get all submenus for each top menu
                $submenus = array(array());
                foreach ((array)$top_menu as $top_menu_item) {
                    foreach ((array)$menu_items as $key => $menu_item) {
                        if ($menu_item->menu_item_parent == $top_menu_item->ID) {
                            $submenus[$top_menu_item->ID][] = $menu_item;
                        }
                    }
                }

            }

            echo '<div class="submenu-wrapper">';

            foreach ($submenus as $parentId => $submenu) {

                if ($parentId !== 0) {

                    echo '<ul class="submenu parent-id-' . $parentId . '">';

                    foreach ($submenu as $key => $menu_item) {
                        echo '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                    }

                    echo '</ul>';
                }
            }

            echo '</div>';
            ?>


            <a href="#" class="btn-mobile-menu"></a>

        </nav>
    </div>

    <div class="hero-wrapper" >
        <img src="<?php the_field('header_image'); ?>" alt="hero" class="img-responsive" />
        <div class="hero-inner">
            <div class="text-box text-box-left">
                <h3><?php the_field('header_title'); ?></h3>
                <h1><?php the_field('header_text'); ?></h1>
            </div>
        </div>
    </div>


    <main>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <?php get_footer(); ?>

</body>
</html>