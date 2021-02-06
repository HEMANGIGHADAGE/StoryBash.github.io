<?php

/**
 * Testimonials
 */
$wp_customize->add_section('cherry_biz_testimonials_section', [
    'priority' => 30,
    'title' => esc_html__('Testimonial', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_testimonials_heading', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_testimonials_heading', array(
    'settings'		        => 'cherry_biz_testimonials_heading',
    'section'		        => 'cherry_biz_testimonials_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Testimonial Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can Enable/Disable Testimonial section. Input Section Title and Sub-title. You can choose category for Testimonial.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_testimonials_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);

$wp_customize->add_control('cherry_biz_testimonials_checkbox', [
    'type' => 'checkbox',
    'label' => esc_html__('Enable Testimonials', 'cherry-biz'),
    'settings' => 'cherry_biz_testimonials_checkbox',
    'section' => 'cherry_biz_testimonials_section',
]);


$wp_customize->add_setting( 'cherry_biz_testimonials_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_testimonials_title', array(
    'label'                  => esc_html__('Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_testimonials_section',
    'settings'               => 'cherry_biz_testimonials_title',
));

$wp_customize->add_setting( 'cherry_biz_testimonials_sub_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_testimonials_sub_title', array(
    'label'                  => esc_html__('Sub Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_testimonials_section',
    'settings'               => 'cherry_biz_testimonials_sub_title',
));

$wp_customize->add_setting( 'cherry_biz_testimonials_category', array(
    'default'             =>  '',
    'capability'          =>  'edit_theme_options',
    'sanitize_callback'   =>  'cherry_biz_sanitize_integer'
) );

$wp_customize->add_control( new Cherry_Biz_Category_Dropdown_Custom_Control($wp_customize, 'cherry_biz_testimonials_category', array(
    'label'                =>  esc_html__('Choose category for Testimonials.', 'cherry-biz'),
    'settings' 			   =>  'cherry_biz_testimonials_category',
    'section'              =>  'cherry_biz_testimonials_section',
) ) );
