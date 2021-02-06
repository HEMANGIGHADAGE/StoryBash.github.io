<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_top_bar_section', [
    'priority' => 1,
    'title' => esc_html__('Top Bar', 'cherry-biz'),
    'panel' => 'cherry_biz_general_options',
]);

$wp_customize->add_setting( 'cherry_biz_topbar_heading', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_topbar_heading', array(
    'settings'		        => 'cherry_biz_topbar_heading',
    'section'		        => 'cherry_biz_top_bar_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Topbar Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can edit text and enable/disable social links and search.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_search_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);
$wp_customize->add_control('cherry_biz_search_checkbox', [
    'type' => 'checkbox',
    'priority' => 5,
    'label' => esc_html__('Enable Search', 'cherry-biz'),
    'settings' => 'cherry_biz_search_checkbox',
    'section' => 'cherry_biz_top_bar_section',
]);

$wp_customize->add_setting('cherry_biz_social_link_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);
$wp_customize->add_control('cherry_biz_social_link_checkbox', [
    'type' => 'checkbox',
    'priority' => 4,
    'label' => esc_html__('Enable Social Link', 'cherry-biz'),
    'settings' => 'cherry_biz_social_link_checkbox',
    'section' => 'cherry_biz_top_bar_section',
]);

$counters = [1,2];
foreach ($counters as $counter) {
    $wp_customize->add_setting( 'cherry_biz_top_bar_text_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_top_bar_text_'.$counter, array(
        'priority'               => 3,
        'label'                  => esc_html__('Text ', 'cherry-biz') . $counter. ':',
        'section'                => 'cherry_biz_top_bar_section',
        'settings'               => 'cherry_biz_top_bar_text_'.$counter,
    ));
}