<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <a class="site-title" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>

        <p class="site-desc">
            <?php
            if ( is_post_type_archive('auteur') ) {

                echo 'Les créateurs';

            } elseif ( is_singular('auteur') ) {

                $domaines = get_the_terms( get_the_ID(), 'domaine' );
                if ( $domaines ) {
                    echo esc_html( $domaines[0]->name );
                }

            } else {

                bloginfo('description');

            }
            ?>
        </p>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'main',
            'container'      => 'nav',
            'fallback_cb'    => false,
        ) );
        ?>

        <?php get_search_form(); ?>
    </header>
