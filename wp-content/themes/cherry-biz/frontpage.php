<?php
/**
 * The main template file
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherry-biz
 */


get_header();

get_template_part( 'template-parts/frontpage/frontpage', 'slider' );
get_template_part( 'template-parts/frontpage/frontpage', 'client' );
get_template_part( 'template-parts/frontpage/frontpage', 'our-services' );
get_template_part( 'template-parts/frontpage/frontpage', 'our-story' );
get_template_part( 'template-parts/frontpage/frontpage', 'our-projects' );
get_template_part( 'template-parts/frontpage/frontpage', 'testimonials' );
get_template_part( 'template-parts/frontpage/frontpage', 'our-blogs' );

get_footer();
