<?php
/**
 * The main template file
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherry-biz
 */


$cherry_biz_contact_shortcode = get_theme_mod('cherry_biz_contact_shortcode');

get_header();
?>
    <div class="nnc-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div id="primary" class="content-area nnc-content-area">
                        <main id="main" class="site-main">
                            <div class="nnc-contact">
                                <?php while ( have_posts() ) : the_post(); ?>
                                <h2><?php the_title(); ?></h2>
                                <p class="text-muted"><?php echo esc_html(get_the_excerpt()); ?></p>
                                <?php endwhile; ?>
                                <?php
                                    if(!empty($cherry_biz_contact_shortcode)):
                                        echo do_shortcode($cherry_biz_contact_shortcode);
                                    endif;
                                ?>
                            </div>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
