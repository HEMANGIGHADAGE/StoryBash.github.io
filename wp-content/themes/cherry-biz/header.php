<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cherry-biz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body id="nnc-body" <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cherry-biz'); ?></a>

        <?php the_custom_header_markup(); ?>

        <?php
            get_template_part( 'template-parts/top-bar');
            get_template_part( 'template-parts/search/search', 'popup' );
        ?>

        <header id="masthead" class="site-header nnc-header">
            <div class="nnc-container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-7">
                        <div class="d-flex align-items-center">
                            <div class="site-logo">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="site-branding">
                                <?php if (is_front_page() && is_home()) :?>
                                <h1 class="site-title m-0"><a
                                        href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                                <?php
                                else :
                                    ?>
                                <h1 class="site-title m-0"><a
                                        href="<?php echo esc_url(home_url('/')); ?>"
                                        rel="home"><?php bloginfo('name'); ?></a>
                                </h1>
                                <?php
                                endif;
                                $cherry_biz_description = get_bloginfo('description', 'display');
                                if ($cherry_biz_description || is_customize_preview()) :
                                    ?>
                                <p class="site-description m-0"><?php echo $cherry_biz_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                                </p>
                                <?php endif; ?>
                            </div><!-- .site-branding -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-5">
                        <div class="d-flex justify-content-end">

                            <div id="main-nav" class="nnc-nav d-none d-lg-block">
                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                        wp_nav_menu([
                                            'theme_location' => 'primary',
                                            'menu_id' => 'primary-menu',
                                        ]);
                                    ?>
                                </nav>
                            </div>

                            <?php get_template_part( 'template-parts/menu-modal'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->



        <div id="content" class="site-content">