<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
        $args = array(
            'menu'              =>  'primary',
            'menu_class'        =>  'navbar-nav ml-auto',
            'menu_id'           =>  'main-navigation',
            'container'         =>  '',
            'theme_location'    =>  'primary',
            'walker'            => new Primary_Nav()
        );
        wp_nav_menu($args);
    ?>
    <?php get_template_part( 'template-parts/navigation/navigation-widget' ); ?>
</div>