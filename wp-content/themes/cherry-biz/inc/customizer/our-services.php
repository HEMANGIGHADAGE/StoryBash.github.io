<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_our_services_section', [
    'priority' => 30,
    'title' => esc_html__('Service', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_services_heading_', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_services_heading_', array(
    'settings'		        => 'cherry_biz_services_heading_',
    'section'		        => 'cherry_biz_our_services_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Service Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can Enable/Disable Service section. Input Section Title and Sub-title. You can input icon name and select page to show service.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_our_services_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);

$wp_customize->add_control('cherry_biz_our_services_checkbox', [
    'type' => 'checkbox',
    'label' => esc_html__('Enable Services', 'cherry-biz'),
    'settings' => 'cherry_biz_our_services_checkbox',
    'section' => 'cherry_biz_our_services_section',
]);


$wp_customize->add_setting( 'cherry_biz_our_services_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_our_services_title', array(
    'label'                  => esc_html__('Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_our_services_section',
    'settings'               => 'cherry_biz_our_services_title',
));

$wp_customize->add_setting( 'cherry_biz_our_services_sub_title', array(
    'default'               => '',
    'capability'            => 'edit_theme_options',
    'sanitize_callback'     => 'sanitize_text_field'
));

$wp_customize->add_control( 'cherry_biz_our_services_sub_title', array(
    'label'                  => esc_html__('Sub Title ', 'cherry-biz') ,
    'section'                => 'cherry_biz_our_services_section',
    'settings'               => 'cherry_biz_our_services_sub_title',
));

for ($counter = 0; $counter < cherry_biz_config('services_limit'); $counter++) {

    $wp_customize->add_setting( 'cherry_biz_our_services_heading_title_'.$counter, array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text'
    ) );

    $wp_customize->add_control( new Cherry_Biz_Customize_Title( $wp_customize, 'cherry_biz_our_services_heading_title_'.$counter, array(
        'settings'		        => 'cherry_biz_our_services_heading_title_'.$counter,
        'section'		        => 'cherry_biz_our_services_section',
        'label'			        => esc_html__( 'Service', 'cherry-biz' ).' '.($counter +1)
    ) ) );
    
    $wp_customize->add_setting( 'cherry_biz_our_services_icon_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_our_services_icon_'.$counter, array(
        'label'                  => esc_html__('Icon', 'cherry-biz') ,
        'section'                => 'cherry_biz_our_services_section',
        'settings'               => 'cherry_biz_our_services_icon_'.$counter,
        'description'           => esc_html__('Choose icon name from', 'cherry-biz')." <a target='_blank' href='https://fontawesome.com/cheatsheet/free/solid'>".esc_html__('font-awesome', 'cherry-biz')."</a>"
    ));

    $wp_customize->add_setting('cherry_biz_our_services_page_'.$counter, array(
        'capability'         => 'edit_theme_options',
        'sanitize_callback'  => 'cherry_biz_sanitize_integer'
    ) );

    $wp_customize->add_control('cherry_biz_our_services_page_'.$counter, array(
        'label'    => esc_html__( 'Select Page' , 'cherry-biz' ),
        'section'  => 'cherry_biz_our_services_section',
        'settings' =>  'cherry_biz_our_services_page_'.$counter,
        'type'     => 'dropdown-pages'
    ) );


}