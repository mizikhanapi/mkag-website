<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mkag
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mkag' ); ?></a>

        <header class="site-header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md header-wrapper">

                    <div class="site-branding">
                        <?php
                        the_custom_logo();
                        if ( is_front_page() && is_home() ) :
                            ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
                                            src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" /></a>
                                    <?php
                        else :
                            ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
                                            src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" /></a>
                                    <?php
                        endif;
                            ?>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'collapse navbar-collapse',
                        ) );
                        ?>
                </nav>
            </div>
        </header>

        <div id="content" class="site-content">