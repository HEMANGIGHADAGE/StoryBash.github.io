<?php
$cherry_biz_our_slider_checkbox = get_theme_mod('cherry_biz_our_slider_checkbox');
if($cherry_biz_our_slider_checkbox) :
?>
<section class="nnc-hero">
    <div class="swiper-container nnc-hero-slider-container">
        <div class="swiper-wrapper">
            <?php
                for ($counter = 0; $counter < cherry_biz_config('slider_limit'); $counter++) {
                    $slider_page_id = get_theme_mod('cherry_biz_slider_page_'.$counter);

                    if($slider_page_id) :
                        $slider_page = get_post($slider_page_id);
            ?>
                <div class="swiper-slide">
                    <div class="nnc-banner d-flex align-items-center"
                         style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($slider_page_id)); ?>');">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8">
                                    <div class="nnc-banner__info" data-aos="fade-up">
                                        <h5 class="nnc-banner__title"><?php echo esc_html(get_theme_mod('cherry_biz_slider_title_'.$counter)); ?></h5>
                                        <h2  class="nnc-banner__subtitle"><?php echo esc_html($slider_page->post_title); ?></span></h2>
                                        <div class="nnc-banner__btn">
                                            <a href="<?php echo esc_url($slider_page->guid); ?>" class="btn btn--primary">
                                                <?php echo esc_html__('Read More', 'cherry-biz'); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                        wp_reset_postdata();
                    endif;
                } ?>
        </div>
        <div class="swiper-pagination-hero d-none d-md-block"></div>
    </div>
    <div class="nnc-hero--bg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/bg-curved.png"></div>
</section>
<?php endif; ?>