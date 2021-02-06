<?php
$cherry_biz_projects_title = get_theme_mod('cherry_biz_projects_title');
$cherry_biz_projects_sub_title = get_theme_mod('cherry_biz_projects_sub_title');
$cherry_biz_projects_category = get_theme_mod('cherry_biz_projects_category');
$cherry_biz_projects_checkbox = get_theme_mod('cherry_biz_projects_checkbox');

if($cherry_biz_projects_checkbox) :



?>
    <section class="nnc-product bg-white nnc-s-padd">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-section">
                    <h6 class="nnc-section__title" data-aos="fade-up"><?php echo esc_html($cherry_biz_projects_title); ?></h6>
                    <h2 class="nnc-section__subtitle" data-aos="fade-up"><?php echo esc_html($cherry_biz_projects_sub_title); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="nnc-product__block pl-3 pr-3">
        <div class="container-fluid">
            <div class="row">
            <?php

                if($cherry_biz_projects_category) :

                    $cherry_biz_projects = new WP_Query(array(
                        'posts_per_page' =>  cherry_biz_config('projects_limit'),
                        'post_type'      =>  'post',
                        'category__in'   =>  $cherry_biz_projects_category
                    ));

                        if($cherry_biz_projects->have_posts()) :
                            while ($cherry_biz_projects->have_posts()):$cherry_biz_projects->the_post();
                        $post_tags = get_the_tags();
                    ?>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="nnc-product__item card nnc-card" data-aos="fade-up">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="nnc-product__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="nnc-product__content">
                                <h5 class="mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <span>
                                    <?php
                                        $tag_output = '';
                                        if($post_tags) {
                                            foreach ($post_tags as $key => $post_tag) {
                                                if($key > 0) {
                                                    $tag_output .= ' / ';
                                                }
                                                $tag_output .= $post_tag->name;
                                            }
                                        }

                                        echo esc_html($tag_output);
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
        </div>
    </div>
</section>
<?php endif; ?>