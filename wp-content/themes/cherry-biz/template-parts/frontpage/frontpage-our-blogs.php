<?php
$cherry_biz_blogs_title = get_theme_mod('cherry_biz_blogs_title');
$cherry_biz_blogs_sub_title = get_theme_mod('cherry_biz_blogs_sub_title');
$cherry_biz_blogs_category = get_theme_mod('cherry_biz_blogs_category');
$cherry_biz_blogs_checkbox = get_theme_mod('cherry_biz_blogs_checkbox');

if($cherry_biz_blogs_checkbox) :

?>

<section class="nnc-blog nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title" data-aos="fade-up"><?php echo esc_html($cherry_biz_blogs_title); ?></h6>
                    <h2 class="nnc-section__subtitle" data-aos="fade-up"><?php echo esc_html($cherry_biz_blogs_sub_title); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">

    <?php

        if($cherry_biz_blogs_category) :

            $cherry_biz_blogs = new WP_Query(array(
                'posts_per_page' =>  cherry_biz_config('blogs_limit'),
                'post_type'      =>  'post',
                'category__in'   =>  $cherry_biz_blogs_category
            ));

            if($cherry_biz_blogs->have_posts()) :
                  while ($cherry_biz_blogs->have_posts()):$cherry_biz_blogs->the_post();
            ?>
                <div class="col-md-12 col-lg-4 d-flex">
                    <div class="card nnc-card o-h" data-aos="fade-up">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="nnc-product__img">
                                <div class="nnc-blog__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="nnc-blog__title"><a href="<?php the_permalink(); ?>" class=""><?php the_title() ?></a></h5>
                            <div class="nnc-blog__date">
                                <span class="text-muted"><?php the_author(); ?></span>
                                <i class="fas fa-circle"></i>
                                <span class="text-muted"><?php comments_number(esc_html__('No Comment', 'cherry-biz'), esc_html__('1 Comment', 'cherry-biz') , '% '.esc_html__('Comments', 'cherry-biz')); ?></span>
                            </div>
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
    </div>
</section>

<?php endif; ?>