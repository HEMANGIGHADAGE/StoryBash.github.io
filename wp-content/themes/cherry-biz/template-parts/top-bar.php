<?php

$cherry_biz_top_bar_text_1 = get_theme_mod('cherry_biz_top_bar_text_1');
$cherry_biz_top_bar_text_2 = get_theme_mod('cherry_biz_top_bar_text_2');

$cherry_biz_search_checkbox = get_theme_mod('cherry_biz_search_checkbox');
$cherry_biz_social_link_checkbox = get_theme_mod('cherry_biz_social_link_checkbox');

$cherry_biz_facebook_link = get_theme_mod('cherry_biz_facebook_link', '');
$cherry_biz_twitter_link = get_theme_mod('cherry_biz_twitter_link', '');
$cherry_biz_instagram_link = get_theme_mod('cherry_biz_instagram_link', '');
$cherry_biz_youtube_link = get_theme_mod('cherry_biz_youtube_link', '');

?>

<div class="nnc-topbar">
    <div class="nnc-container">
        <div class="d-flex align-items-center justify-content-center justify-content-md-between flex-column flex-md-row">
            <div class="nnc-topbar__info">
                <ul class="list-inline m-0">
                    <?php if($cherry_biz_top_bar_text_1) : ?>
                        <li class="list-inline-item pr-3"><?php echo esc_html($cherry_biz_top_bar_text_1); ?></li>
                    <?php endif; ?>
                    <?php if($cherry_biz_top_bar_text_2) : ?>
                        <li class="list-inline-item"><?php echo esc_html($cherry_biz_top_bar_text_2); ?></li>
                    <?php endif; ?>
                </ul>
            </div>


            <?php if($cherry_biz_search_checkbox || $cherry_biz_social_link_checkbox) : ?>
                <div class="nnc-topbar__social d-flex justify-content-end">
                    <?php if($cherry_biz_social_link_checkbox) : ?>
                        <ul class="list-inline m-0">
                            <?php if ($cherry_biz_facebook_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_facebook_link); ?>"
                                       title="<?php echo esc_attr__('facebook', 'cherry-biz'); ?>"><i class="fab fa-facebook"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_instagram_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_instagram_link); ?>"
                                       title="<?php echo esc_attr__('instagram', 'cherry-biz'); ?>"><i class="fab fa-instagram"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_twitter_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_twitter_link); ?>"
                                       title="<?php echo esc_attr__('twitter', 'cherry-biz'); ?>"><i class="fab fa-twitter"></i></a>
                                </li>
                            <?php endif; ?>

                            <?php if ($cherry_biz_youtube_link) : ?>
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url($cherry_biz_youtube_link); ?>"
                                       title="<?php echo esc_attr__('youtube', 'cherry-biz'); ?>"><i class="fab fa-youtube"></i></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php
                        endif;

                        if($cherry_biz_search_checkbox) :
                    ?>
                        <button role="button" title="Search" class="btn btn--icon p-0 bg-none l-h-0 ml-3" data-custom-open="search-modal">
                            <i class="fas fa-search"></i>
                        </button>
                        <?php endif; ?>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</div>