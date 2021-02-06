<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_our_story_section', [
    'priority' => 30,
    'title' => esc_html__('Story', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_story_heading_', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_story_heading_', array(
    'settings'		        => 'cherry_biz_story_heading_',
    'section'		        => 'cherry_biz_our_story_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Story Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can Enable/Disable Story section. Input Section Title only. You can select page to show Story/About us.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_our_story_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);

$wp_customize->add_control('cherry_biz_our_story_checkbox', [
    'type' => 'checkbox',
    'label' => esc_html__('Enable Our Story', 'cherry-biz'),
    'settings' => 'cherry_biz_our_story_checkbox',
    'section' => 'cherry_biz_our_story_section',
]);

$wp_customize->add_setting( 'cherry_biz_our_story_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_our_story_title', array(
    'label'                  => esc_html__('Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_our_story_section',
    'settings'               => 'cherry_biz_our_story_title',
));

$wp_customize->add_setting('cherry_biz_our_story_page', array(
    'capability'         => 'edit_theme_options',
    'sanitize_callback'  => 'cherry_biz_sanitize_integer'
) );

$wp_customize->add_control('cherry_biz_our_story_page', array(
    'label'    => esc_html__( 'Select Page' , 'cherry-biz' ),
    'section'  => 'cherry_biz_our_story_section',
    'settings' =>  'cherry_biz_our_story_page',
    'type'     => 'dropdown-pages'
) );
