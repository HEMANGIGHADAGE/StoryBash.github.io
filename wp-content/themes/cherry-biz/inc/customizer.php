<?php
/**
 * cherry-biz Theme Customizer
 *
 * @package cherry-biz
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cherry_biz_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    require_once get_template_directory() .'/inc/customizer-custom-control.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', [
            'selector' => '.site-title a',
            'render_callback' => 'cherry_biz_customize_partial_blogname',
        ]);
        $wp_customize->selective_refresh->add_partial('blogdescription', [
            'selector' => '.site-description',
            'render_callback' => 'cherry_biz_customize_partial_blogdescription',
        ]);
    }

    /**
     * Theme Option Panel
     */
    $wp_customize->add_panel( 'cherry_biz_front_page_options', array(
        'capabitity'         =>  'edit_theme_options',
        'priority'           =>  2,
        'title'              =>  esc_html__('Homepage Options', 'cherry-biz')
    ) );

    /**
     * Theme Option Panel
     */
    $wp_customize->add_panel( 'cherry_biz_general_options', array(
        'capabitity'         =>  'edit_theme_options',
        'priority'           =>  1,
        'title'              =>  esc_html__('General Options', 'cherry-biz')
    ) );

    $wp_customize->get_section('title_tagline')->panel = 'cherry_biz_general_options';


    require_once get_template_directory() .'/inc/customizer/top-bar.php';  // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/social-links.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/slider.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/clients.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/our-services.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/our-story.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/projects.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/testimonials.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    require_once get_template_directory() .'/inc/customizer/blogs.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

    $wp_customize->add_section('cherry_biz_contact_page_section', [
        'title' => esc_html__('Contact Page Options', 'cherry-biz'),
        'priority'           =>  3,
    ]);

    $wp_customize->add_setting( 'cherry_biz_contact_page_heading_', array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
    ) );
    $wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_contact_page_heading_', array(
        'settings'		        => 'cherry_biz_contact_page_heading_',
        'section'		        => 'cherry_biz_contact_page_section',
        'priority' => 1,
        'label'			        => esc_html__( 'Contact Section', 'cherry-biz' ),
        'description'			=> esc_html__( 'Add iframe of Google Map and shortcode of Contact Form 7', 'cherry-biz' )
    )));

    $wp_customize->add_setting( 'cherry_biz_contact_shortcode', array(
        'default'                =>  '',
        'capability'             =>  'edit_theme_options',
        'sanitize_callback'      =>  'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_contact_shortcode', array(
        'type'                  => 'text',
        'label'                 => esc_html__('Contact Form 7 ShortCode', 'cherry-biz'),
        'section'               => 'cherry_biz_contact_page_section',
        'settings'              => 'cherry_biz_contact_shortcode'
    ) );

    //sanitize checkbox function
    function cherry_biz_checkbox_sanitize( $input )
    {
        if ($input == 1) {
            return 1;
        } else {
            return '';
        }
    }

    //sanitize integer
    function cherry_biz_sanitize_integer( $input ) {
        if( is_numeric( $input ) ) {
            return intval( $input );
        }
    }
}
add_action('customize_register', 'cherry_biz_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cherry_biz_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cherry_biz_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cherry_biz_customize_preview_js()
{
    wp_enqueue_script('cherry-biz-customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview'], '20151215', true);
}
add_action('customize_preview_init', 'cherry_biz_customize_preview_js');
