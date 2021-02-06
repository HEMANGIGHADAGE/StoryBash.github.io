<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_slider_section', [
    'priority' => 10,
    'title' => esc_html__('Slider', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_slider_heading_', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_slider_heading_', array(
    'settings'		        => 'cherry_biz_slider_heading_',
    'section'		        => 'cherry_biz_slider_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Slider Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can Enable/Disable Slider. Input title and Select page to show in the slider.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_our_slider_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);

$wp_customize->add_control('cherry_biz_our_slider_checkbox', [
    'type' => 'checkbox',
    'label' => esc_html__('Enable Slider', 'cherry-biz'),
    'settings' => 'cherry_biz_our_slider_checkbox',
    'section' => 'cherry_biz_slider_section',
]);


for ($counter = 0; $counter < cherry_biz_config('slider_limit'); $counter++) {

    $wp_customize->add_setting( 'cherry_biz_slider_heading_title_'.$counter, array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text'
    ) );

    $wp_customize->add_control( new Cherry_Biz_Customize_Title( $wp_customize, 'cherry_biz_slider_heading_title_'.$counter, array(
        'settings'		        => 'cherry_biz_slider_heading_title_'.$counter,
        'section'		        => 'cherry_biz_slider_section',
        'label'			        => esc_html__( 'Slider', 'cherry-biz' ).' '.($counter +1)
    ) ) );

    $wp_customize->add_setting( 'cherry_biz_slider_title_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_slider_title_'.$counter, array(
        'label'                  => esc_html__('Title ', 'cherry-biz') ,
        'section'                => 'cherry_biz_slider_section',
        'settings'               => 'cherry_biz_slider_title_'.$counter,
    ));

    $wp_customize->add_setting('cherry_biz_slider_page_'.$counter, array(
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'cherry_biz_sanitize_integer'
    ) );

    $wp_customize->add_control('cherry_biz_slider_page_'.$counter, array(
        'label'    => esc_html__( 'Select Page' , 'cherry-biz' ),
        'section'  => 'cherry_biz_slider_section',
        'settings' =>  'cherry_biz_slider_page_'.$counter,
        'type'     => 'dropdown-pages'
    ) );


}