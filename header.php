<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idm
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'big-and-bold'); ?></a>
            <div class="idm-header-contact">
                <section class="info-block phone"><i class="fas fa-phone link-color"></i> 1 (877) 254-7903 </section><section class="info-block location"><i class="fas fa-globe link-color"></i> Abbotsford, BC. Canada</section>
            </div>
            <header id="masthead" class="site-header">
                <div class="site-branding">

                    <?php
                    if (is_front_page()) :

// how to get the logo resized on different pages?  always include logo but bark with a div or class to target it!

                        the_custom_logo();
                    endif;

                    if (!empty(get_bloginfo('name'))) :
                        if (is_front_page()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php
                        endif;
                    endif;

                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) :
                        ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php endif;
                    ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
