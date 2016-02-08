<?php
/**
 * Template Name: Home
 */
?>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-hero.jpg" alt="hero" class="img-responsive" />
        <div class="hero-inner">
            <div class="text-box text-box-left">
                <h3>H3 Monatsspecial</h3>
                <h1>H1 Bereit für ein
                    besonderes
                    Fotoshooting? </h1>
            </div>
        </div>
    </div>


    <main>

        <div class="row">
            <div class="col4">
                <div class="box">
                    <h2>H2 Lorem net Ipsum esto </h2>
                    <h4>H4 Sei der Star in unserem 660m²
                        grossen Fotostudio mit über 80
                        unterschiedlichen Sets. Fotograf
                        Peter Sturn als professioneller Foto-
                        graf hilft Dir mit seinem Team bei
                        der Erstellung Deiner Traumfotos. </h4>

                    <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                </div>
            </div>

            <div class="col4">
                <div class="box">
                    <h2>H2 Lorem net Ipsum esto </h2>
                    <h4>H4 Sei der Star in unserem 660m²
                        grossen Fotostudio mit über 80
                        unterschiedlichen Sets. Fotograf
                        Peter Sturn als professioneller Foto-
                        graf hilft Dir mit seinem Team bei
                        der Erstellung Deiner Traumfotos. </h4>

                    <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                </div>
            </div>

            <div class="col4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/facebook-widget.jpg" class="img-responsive facebook_widget" alt="facebook_widget" />
            </div>
        </div>


        <div class="row">
            <div class="col12">
                <div class="card card12">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-full-size.jpg" alt="" class="img-responsive"/>
                    <div class="text-box text-box-right">
                        <h3>H3 Monatsspecial</h3>
                        <h1>H1 Bereit für ein
                            besonderes
                            Fotoshooting? </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col8">
                <div class="card card8">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-col-8-1.jpg" alt="" />
                    </div>
                    <div class="card-bottom">
                        <h2>H2 Lorem net Ipsum esto </h2>
                        <h4>H4 Unterschiedlichen Sets. Fotograf Peter Sturn als professioneller Fotograf hilft Dir mit seinem Team bei der Erstellung Deiner Traumfotos. </h4>

                        <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="card card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-col-4-1.jpg" alt="" />
                    </div>
                    <div class="card-bottom">
                        <h2>H2 Lorem net</h2>
                        <h4>H4 Unterschiedlichen Fotograf Peter hilft Dir mit Traumfotos. </h4>

                        <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col12">
                <div class="card card12">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-full-combined.jpg" alt="" />
                    </div>
                    <div class="card-bottom">
                        <h2>H2 Lorem net Ipsum esto </h2>
                        <h4>H4 Unterschiedlichen Sets. Fotograf Peter Sturn als professioneller Fotograf hilft<br/>Dir mit seinem Team bei der Erstellung Deiner Traumfotos. </h4>

                        <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col4">
                <div class="card card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-col-4-3.jpg" alt="" />
                    </div>
                    <div class="card-bottom">
                        <h2>H2 Lorem net</h2>
                        <h4>H4 Unterschiedlichen Fotograf Peter hilft Dir mit Traumfotos. </h4>

                        <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                    </div>
                </div>
            </div>
            <div class="col8">
                <div class="card card8">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-col-8-3.jpg" alt="" />
                    </div>
                    <div class="card-bottom">
                        <h2>H2 Lorem net Ipsum esto </h2>
                        <h4>H4 Unterschiedlichen Sets. Fotograf Peter Sturn als professioneller Fotograf hilft Dir mit seinem Team bei der Erstellung Deiner Traumfotos. </h4>

                        <a href="#" class="btn-1"><h5>H5 Weitere Informationen</h5></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col12">
                <div class="section-title">
                    <h3>H3 Monatsspecial</h3>
                    <h1>H1 Lorem Ipsum</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-4.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-5.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-6.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-7.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-8.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
            <div class="col4">
                <div class="card-small card4">
                    <div class="card-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-4-9.jpg" alt=""/>
                    </div>
                    <div class="card-bottom">
                        <h3>H3 Monatsspecial</h3>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <?php get_footer(); ?>

</body>
</html>