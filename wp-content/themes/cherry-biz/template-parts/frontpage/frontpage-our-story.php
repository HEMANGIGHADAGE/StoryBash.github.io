<?php

$cherry_biz_our_story_page_id = get_theme_mod('cherry_biz_our_story_page');
$cherry_biz_our_story_title = get_theme_mod('cherry_biz_our_story_title');
$cherry_biz_our_story_checkbox = get_theme_mod('cherry_biz_our_story_checkbox');

if($cherry_biz_our_story_page_id && $cherry_biz_our_story_checkbox) :
    $our_story_page = get_post($cherry_biz_our_story_page_id);
?>

<section class="nnc-about nnc-s-padd">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__img" data-aos="fade-up">
                    <?php
                        if(has_post_thumbnail($cherry_biz_our_story_page_id)) {
                           echo get_the_post_thumbnail($cherry_biz_our_story_page_id);
                        }
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="nnc-about__content" data-aos="fade-up">
                    <div class="nnc-section text-left pb-3">
                        <h6 class="nnc-section__title"><?php echo esc_html($cherry_biz_our_story_title); ?></h6>
                        <h2 class="nnc-section__subtitle"><?php echo esc_html($our_story_page->post_title); ?></h2>
                    </div>
                    <div class="nnc-about__desc">
                        <p><?php echo esc_html($our_story_page->post_excerpt); ?></p>
                    </div>
                    <div class="mt-4">
                        <a href="<?php echo esc_url($our_story_page->guid); ?>" class="btn btn--primary">
                            <?php echo esc_html__('Read More', 'cherry-biz') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    wp_reset_postdata();
endif; ?>