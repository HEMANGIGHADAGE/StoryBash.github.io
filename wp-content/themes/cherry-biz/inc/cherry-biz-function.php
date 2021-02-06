<?php

if (!function_exists('cherry_biz_config')) :

    /**
     * Cherry biz config
     */
    function cherry_biz_config( $key = null ) {
        $configs = array();
        $configs['slider_limit'] = 2;
        $configs['clients_limit'] = 4;
        $configs['services_limit'] = 3;
        $configs['projects_limit'] = 8;
        $configs['testimonials_limit'] = 3;
        $configs['blogs_limit'] = 3;

        if($key) {
            return $configs[$key];
        }

        return $configs;

    }

endif;
