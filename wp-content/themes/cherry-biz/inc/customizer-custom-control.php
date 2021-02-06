<?php

if (!class_exists('WP_Customize_Control'))
    return NULL;

/**
 * A class to create a title for all fields to separate
 */
class Cherry_Biz_Customize_Heading extends WP_Customize_Control {

    public function render_content() {
        if ( !empty( $this->label ) ) : ?>
            <h3 class="cherry-biz-accordion-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php if ( !empty( $this->description ) ) : ?>
            <p class="cherry-biz-accordion-section-desc"><?php echo esc_html( $this->description ); ?><p/>
        <?php endif; endif;
    }
}

/**
 * A class to create a title separater for all fields to separate
 */
class Cherry_Biz_Customize_Title extends WP_Customize_Control {

    public function render_content() {
        if ( !empty( $this->label ) ) : ?>
            <h3 class="cherry-biz-title"><?php echo esc_html( $this->label ); ?></h3>
            <?php if ( !empty( $this->description ) ) : ?>
                <p class="cherry-biz-desc"><?php echo esc_html( $this->description ); ?><p/>
            <?php endif; endif;
    }
}

/**
 * A class to create a dropdown for all categories to news ticker
 */
class Cherry_Biz_Category_Dropdown_Custom_Control extends WP_Customize_Control {

    private $cats = false;

    public function __construct($manager, $id, $args = array(), $options = array()) {
        $this->cats = get_categories($options);

        parent::__construct( $manager, $id, $args );
    }

    /**
     * Render the content of the category dropdown
     *
     * @return HTML
     */

    public function render_content() {

        if(!empty($this->cats)) {
            ?>

            <label>

                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

                <select <?php $this->link(); ?>>

                    <?php
                    foreach ( $this->cats as $cat ) {
                        printf('<option value="%s" %s>%s</option>', esc_attr($cat->term_id), selected($this->value(), intval($cat->term_id), false), esc_html($cat->name));
                    }
                    ?>

                </select>

            </label>

            <?php
        }
    }
}