<?php

/**
 * cherry-biz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cherry-biz
 */

if (!function_exists('cherry_biz_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function cherry_biz_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on cherry-biz, use a find and replace
         * to change 'cherry-biz' to the name of your theme in all the template files.
         */
        load_theme_textdomain('cherry-biz');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus([
            'primary' => esc_html__('Primary', 'cherry-biz'),
        ]);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('cherry_biz_custom_background_args', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);

        /*
        * This theme styles the visual editor to resemble the theme style,
        * specifically font, colors, and column width.
        */
        add_editor_style('assets/css/editor.css');

        /**
         * Image Size
         */
        add_image_size('cherry-biz-default', 392, 260, true);


        add_post_type_support( 'page', 'excerpt' );
    }
endif;
add_action('after_setup_theme', 'cherry_biz_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cherry_biz_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('cherry_biz_content_width', 640);
}
add_action('after_setup_theme', 'cherry_biz_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cherry_biz_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Sidebar', 'cherry-biz'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'cherry-biz'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);


    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'cherry-biz' ),
        'id'            => 'cherry_biz_footer_section_1',
        'description'   => esc_html__( 'Add widgets in your first footer of theme.', 'cherry-biz' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'cherry-biz' ),
        'id'            => 'cherry_biz_footer_section_2',
        'description'   => esc_html__( 'Add widgets in your second footer of  theme.', 'cherry-biz' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'cherry-biz' ),
        'id'            => 'cherry_biz_footer_section_3',
        'description'   => esc_html__( 'Add widgets in your third footer of  theme.', 'cherry-biz' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'cherry-biz' ),
        'id'            => 'cherry_biz_footer_section_4',
        'description'   => esc_html__( 'Add widgets in your fourth footer of  theme.', 'cherry-biz' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action('widgets_init', 'cherry_biz_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cherry_biz_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700|Roboto:300,400,500,700&display=swap');

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.css');

    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');

    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css');

    wp_enqueue_style('cherry-biz-styles-css', get_template_directory_uri() . '/assets/css/app.css');

    wp_enqueue_style('cherry-biz-style', get_stylesheet_uri());

    wp_enqueue_script('micromodal', get_template_directory_uri() . '/assets/js/micromodal.js', [], '', true);

    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', [], '', true);

    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', [], '', true);

    wp_enqueue_script('cherry-biz-navigation', get_template_directory_uri() . '/js/navigation.js', [], '20151215', true);

    wp_enqueue_script('cherry-biz-custom-js', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);

    wp_enqueue_script('cherry-biz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', [], '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'cherry_biz_scripts');

/**
 * Cherry biz function
 */
require get_template_directory() . '/inc/cherry-biz-function.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin recommendations.
 */
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

if ( ! function_exists( 'cherry_biz_register_recommended_plugins' ) ) :

    /**
     * Register recommended plugins.
     */
    function cherry_biz_register_recommended_plugins() {
        $plugins = array(
            array(
                'name'     => esc_html__( 'Flash Demo Import', 'cherry-biz' ),
                'slug'     => 'flash-demo-import',
                'required' => false,
            ),
        );

        $config = array();

        tgmpa( $plugins, $config );
    }

endif;

add_action( 'tgmpa_register', 'cherry_biz_register_recommended_plugins' );

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


if(!function_exists('cherry_biz_pro_custom_query_vars')) :

    /**
     * Update Query
     *
     * @param $query
     * @return mixed
     */
    function cherry_biz_custom_query_vars( $query )
    {
        if(! is_admin() && is_home() && is_front_page() && $query->is_main_query()) {
            $cherry_biz_pro_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $query->set( 'posts_per_page', 16 );
            $query->set( 'paged', $cherry_biz_pro_paged );
        }

        return $query;
    }
    add_action( 'pre_get_posts', 'cherry_biz_custom_query_vars' );

endif;


//cherry_biz footer count function
if ( ! function_exists( 'cherry_biz_footer_count' ) ) :

    function cherry_biz_footer_count()
    {
        $cherry_biz_count = 0;
        if ( is_active_sidebar( 'cherry_biz_footer_section_1' ) )
            $cherry_biz_count++;

        if ( is_active_sidebar( 'cherry_biz_footer_section_2' ) )
            $cherry_biz_count++;

        if ( is_active_sidebar( 'cherry_biz_footer_section_3' ) )
            $cherry_biz_count++;

        if ( is_active_sidebar( 'cherry_biz_footer_section_4' ) )
            $cherry_biz_count++;

        return $cherry_biz_count;
    }

endif;

/**
 * Add admin scripts and styles.
 */

function cherry_biz_admin_scripts( $hook ) {
    if($hook == 'widgets.php') {
        wp_enqueue_style( 'cherry-biz-admin-css', get_template_directory_uri() . '/assets/css/admin/cherry-biz-admin.css');
    }
}
add_action('admin_enqueue_scripts', 'cherry_biz_admin_scripts');