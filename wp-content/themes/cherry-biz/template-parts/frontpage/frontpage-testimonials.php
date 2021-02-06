<?php
$cherry_biz_testimonials_title = get_theme_mod('cherry_biz_testimonials_title');
$cherry_biz_testimonials_sub_title = get_theme_mod('cherry_biz_testimonials_sub_title');
$cherry_biz_testimonials_category = get_theme_mod('cherry_biz_testimonials_category');
$cherry_biz_testimonials_checkbox = get_theme_mod('cherry_biz_testimonials_checkbox');

if($cherry_biz_testimonials_checkbox) :
?>
    <section class="nnc-testimonial nnc-testimonial--overlay nnc-s-padd"
             style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/testimonial-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title text-white" data-aos="fade-up"><?php echo esc_html($cherry_biz_testimonials_title); ?></h6>
                    <h2 class="nnc-section__subtitle text-white" data-aos="fade-up"><?php echo esc_html($cherry_biz_testimonials_sub_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
        <div class="nnc-testimonial--block">
                <div class="swiper-container nnc-testimonial-container">
                    <div class="swiper-wrapper">
                    <?php

                        if($cherry_biz_testimonials_category) :
                            $cherry_biz_testimonials = new WP_Query(array(
                                'posts_per_page' =>  cherry_biz_config('testimonials_limit'),
                                'post_type'      =>  'post',
                                'category__in'   =>  $cherry_biz_testimonials_category
                            ));

                            if($cherry_biz_testimonials->have_posts()) :
                                while ($cherry_biz_testimonials->have_posts()):$cherry_biz_testimonials->the_post();
                                $post_tags = get_the_tags();
                    ?>
                        <div class="swiper-slide">
                            <div class="nnc-testimonial__item" data-aos="fade-up">
                                <i class="fas fa-quote-left nnc-icon--xl"></i>
                                <div class="nnc-testimonial__content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="nn-testomonial__client">
                                    <h5 class="nnc-testimonial__client-name"><?php the_title(); ?></h5>
                                    <span class="nnc-testimonial__client-designation">
                                        <?php
                                            $output = '';
                                            if($post_tags) {
                                                foreach ($post_tags as $key => $post_tag) {
                                                    if($key > 0) {
                                                        $output .= ' / ';
                                                    }
                                                    $output .= $post_tag->name;
                                                }
                                            }

                                            echo esc_html($output);
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        endif;
                    ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>