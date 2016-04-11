<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav id="top-nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav .collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Buttery Agency</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="collapse navbar-collapse">
                        <?php if (has_nav_menu( 'primary' )) : ?>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav',
                                'menu_id' => 'primary-nav',
                                'container' => '',
                                'container_class' => false
                            ));?>
                        <?php endif; ?>
                        <?php if (has_nav_menu( 'social' )) : ?>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'social',
                                'menu_class' => 'nav navbar-nav',
                                'menu_id' => 'social-nav',
                                'container' => '',
                                'container_class' => false
                            ));?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>