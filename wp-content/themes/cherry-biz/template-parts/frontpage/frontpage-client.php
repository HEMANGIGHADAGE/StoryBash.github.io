<?php
$cherry_biz_clients_checkbox = get_theme_mod('cherry_biz_clients_checkbox');
if($cherry_biz_clients_checkbox) :
?>

<section class="nnc-oc bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="nnc-oc__block">
                    <?php
                        for ($counter = 0; $counter < cherry_biz_config('clients_limit'); $counter++) {
                            $cherry_biz_client_image = get_theme_mod('cherry_biz_clients_image_'.$counter);
                            $cherry_biz_client_name = get_theme_mod('cherry_biz_clients_name_'.$counter);

                            if($cherry_biz_client_image) :
                    ?>
                        <div class="nnc-oc__item" data-aos="fade-up">
                            <img src="<?php echo esc_url($cherry_biz_client_image); ?>"
                                 alt="<?php echo esc_attr($cherry_biz_client_name); ?>">
                        </div>
                    <?php
                            endif;
                        } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>