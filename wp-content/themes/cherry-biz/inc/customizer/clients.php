<?php

/**
 * Top Bar
 */
$wp_customize->add_section('cherry_biz_clients_section', [
    'priority' => 20,
    'title' => esc_html__('Client', 'cherry-biz'),
    'panel'    => 'cherry_biz_front_page_options'
]);

$wp_customize->add_setting( 'cherry_biz_clients_heading_', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_clients_heading_', array(
    'settings'		        => 'cherry_biz_clients_heading_',
    'section'		        => 'cherry_biz_clients_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Client Section', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can Enable/Disable Client section. Input client name and upload client logo. Logo can be changed and removed easily.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_clients_checkbox', [
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'cherry_biz_checkbox_sanitize'
]);

$wp_customize->add_control('cherry_biz_clients_checkbox', [
    'type' => 'checkbox',
    'label' => esc_html__('Enable Clients', 'cherry-biz'),
    'settings' => 'cherry_biz_clients_checkbox',
    'section' => 'cherry_biz_clients_section',
]);

for ($counter = 0; $counter < cherry_biz_config('clients_limit'); $counter++) {

    $wp_customize->add_setting( 'cherry_biz_clients_heading_title_'.$counter, array(
        'sanitize_callback'	     =>  'cherry_biz_sanitize_text'
    ) );

    $wp_customize->add_control( new Cherry_Biz_Customize_Title( $wp_customize, 'cherry_biz_clients_heading_title_'.$counter, array(
        'settings'		        => 'cherry_biz_clients_heading_title_'.$counter,
        'section'		        => 'cherry_biz_clients_section',
        'label'			        => esc_html__( 'Client', 'cherry-biz' ).' '.($counter +1)
    ) ) );

    $wp_customize->add_setting( 'cherry_biz_clients_name_'.$counter, array(
        'default'               => '',
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'sanitize_text_field'
    ));

    $wp_customize->add_control( 'cherry_biz_clients_name_'.$counter, array(
        'label'                  => esc_html__('Client Name ', 'cherry-biz') ,
        'section'                => 'cherry_biz_clients_section',
        'settings'               => 'cherry_biz_clients_name_'.$counter,
    ));

    $wp_customize->add_setting( 'cherry_biz_clients_image_'.$counter, array(
        'capability'            => 'edit_theme_options',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'cherry_biz_clients_image_'.$counter, array(
        'label'                 => esc_html__('Upload image', 'cherry-biz'),
        'section'               => 'cherry_biz_clients_section',
        'settings'              => 'cherry_biz_clients_image_'.$counter,
    ) ) );
}

