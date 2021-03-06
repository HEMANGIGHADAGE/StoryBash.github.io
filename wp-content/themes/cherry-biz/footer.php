<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cherry-biz
 */

?>

</div><!-- #content -->

<?php if ( is_active_sidebar( 'cherry_biz_footer_section_1' ) ||
    is_active_sidebar( 'cherry_biz_footer_section_2' ) ||
    is_active_sidebar( 'cherry_biz_footer_section_3' ) ||
    is_active_sidebar( 'cherry_biz_footer_section_4' ) ) : ?>

    <footer id="colophon" class="site-footer nnc-footer">
        <div class="container">
            <div class="nnc-footer__block nnc-footer-column-n">
                <?php if( is_active_sidebar( 'cherry_biz_footer_section_1' ) ) : ?>
                    <div class="nnc-footer__item">
                        <?php dynamic_sidebar( 'cherry_biz_footer_section_1' )?>
                    </div>
                <?php endif; ?>

                <?php if( is_active_sidebar( 'cherry_biz_footer_section_2' ) ) : ?>
                    <div class="nnc-footer__item">
                        <?php dynamic_sidebar( 'cherry_biz_footer_section_2' )?>
                    </div>
                <?php endif; ?>

                <?php if( is_active_sidebar( 'cherry_biz_footer_section_3' ) ) : ?>
                    <div class="nnc-footer__item">
                        <?php dynamic_sidebar( 'cherry_biz_footer_section_3' )?>
                    </div>
                <?php endif; ?>

                <?php if( is_active_sidebar( 'cherry_biz_footer_section_4' ) ) : ?>
                    <div class="nnc-footer__item">
                        <?php dynamic_sidebar( 'cherry_biz_footer_section_4' )?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </footer><!-- #colophon -->
<?php endif; ?>



<footer class="nnc-footer-bottom pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center nnc-footer-bottom_block">
                <div class="site-info">

                    <?php
                    $output = '<span>';
                    $output .= '&copy;';
                    $output .= esc_html__(' Copyright ', 'cherry-biz');
                    $output .= date_i18n('Y') . ' ';
                    $output .= '<a href="'.esc_url( home_url( '/' )).'">';
                    $output .= esc_html(get_bloginfo('name', 'display'));
                    $output .= '</a>.';
                    $output .= esc_html__(' All rights reserved ', 'cherry-biz');
                    $output .= '</span>';

                    $output .= '<span>';
                    $output .= '<span class="sep">';
                    $output .= esc_html__(' | ', 'cherry-biz');
                    $output .= '</span>';
                    $output .= esc_html__(' Designed By ', 'cherry-biz');
                    $output .= '<a target="_blank" href="https://99colorthemes.com">';
                    $output .= esc_html__('99colorthemes', 'cherry-biz');
                    $output .= '</a>';
                    $output .= '</span>';

                    echo $output; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    ?>
                </div><!-- .site-info -->
            </div>
        </div>
    </div>
</footer>

<button role="button" class="nnc-scroll-top">
    <i class="fas fa-angle-up"></i>
</button>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>