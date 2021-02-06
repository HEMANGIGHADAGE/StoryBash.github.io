<?php

$cherry_biz_our_services_title = get_theme_mod('cherry_biz_our_services_title');
$cherry_biz_our_services_sub_title = get_theme_mod('cherry_biz_our_services_sub_title');
$cherry_biz_our_services_checkbox = get_theme_mod('cherry_biz_our_services_checkbox');

if($cherry_biz_our_services_checkbox) :

?>

<section class="nnc-service bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title" data-aos="fade-up"><?php echo esc_html($cherry_biz_our_services_title); ?></h6>
                    <h2 class="nnc-section__subtitle" data-aos="fade-up"><?php echo esc_html($cherry_biz_our_services_sub_title); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php

            for ($counter = 0; $counter < cherry_biz_config('services_limit'); $counter++) {
                $service_page_id = get_theme_mod('cherry_biz_our_services_page_'.$counter);

                if($service_page_id) :
                    $service_page = get_post($service_page_id);
            ?>

                <div class="col-md-12 col-lg-4 d-flex nnc-service__item" data-aos="fade-up">
                    <div class="card nnc-card text-center">
                        <div class="card-body">
                            <div class="nnc-service__icon">
                                <i class="fas fa-<?php echo esc_attr(get_theme_mod('cherry_biz_our_services_icon_'.$counter)); ?>"></i>
                            </div>
                            <h4 class="nnc-service__title">
                                <a href="<?php echo esc_url($service_page->guid); ?>" class="">
                                    <?php echo esc_html($service_page->post_title); ?>
                                </a>
                            </h4>
                            <div class="nnc-service__content"><p><?php echo esc_html($service_page->post_excerpt); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    wp_reset_postdata();
            endif;

            } ?>

        </div>
    </div>
</section>
<?php endif; ?>