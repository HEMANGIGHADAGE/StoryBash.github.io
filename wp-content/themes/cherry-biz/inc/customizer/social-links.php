<?php

$wp_customize->add_section('cherry_biz_social_links_section', [
    'priority' => 1,
    'title' => esc_html__('Social Links', 'cherry-biz'),
    'panel' => 'cherry_biz_general_options',
]);

$wp_customize->add_setting( 'cherry_biz_social_links_heading_', array(
    'sanitize_callback'	     =>  'cherry_biz_sanitize_text',
) );
$wp_customize->add_control( new Cherry_Biz_Customize_Heading( $wp_customize, 'cherry_biz_social_links_heading_', array(
    'settings'		        => 'cherry_biz_social_links_heading_',
    'section'		        => 'cherry_biz_social_links_section',
    'priority' => 1,
    'label'			        => esc_html__( 'Social Links', 'cherry-biz' ),
    'description'			=> esc_html__( 'You can add your URL of social media.', 'cherry-biz' )
)));

$wp_customize->add_setting('cherry_biz_facebook_link', [
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
]);
$wp_customize->add_control('cherry_biz_facebook_link', [
    'settings' => 'cherry_biz_facebook_link',
    'section' => 'cherry_biz_social_links_section',
    'type' => 'url',
    'label' => esc_html__('Facebook Url', 'cherry-biz')
]);
$wp_customize->add_setting('cherry_biz_twitter_link', [
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
]);
$wp_customize->add_control('cherry_biz_twitter_link', [
    'settings' => 'cherry_biz_twitter_link',
    'section' => 'cherry_biz_social_links_section',
    'type' => 'url',
    'label' => esc_html__('Twitter Url', 'cherry-biz')
]);
$wp_customize->add_setting('cherry_biz_instagram_link', [
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
]);
$wp_customize->add_control('cherry_biz_instagram_link', [
    'settings' => 'cherry_biz_instagram_link',
    'section' => 'cherry_biz_social_links_section',
    'type' => 'url',
    'label' => esc_html__('Instagram Url', 'cherry-biz')
]);

$wp_customize->add_setting('cherry_biz_youtube_link', [
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
]);
$wp_customize->add_control('cherry_biz_youtube_link', [
    'settings' => 'cherry_biz_youtube_link',
    'section' => 'cherry_biz_social_links_section',
    'type' => 'url',
    'label' => esc_html__('Youtube Url', 'cherry-biz')
]);
