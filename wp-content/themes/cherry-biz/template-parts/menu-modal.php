<button data-custom-open="menu-modal" class="nnc-menu-icon d-lg-none d-block l-h-0">
    <svg class="nnc-icon nnc-icon--lg" id="nnc-icon-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459"><path d="M0 382.5h459v-51H0v51zM0 255h459v-51H0v51zM0 76.5v51h459v-51H0z"/></svg>
</button>

<div class="modal micromodal-slide" id="menu-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container w-100" role="dialog" aria-modal="true" aria-labelledby="menu-modal-title">
            <header class="modal__header d-flex justify-content-end">
                <button class="p-0 modal__close"
                        title="<?php esc_attr_e('Close modal', 'cherry-biz'); ?>"
                        aria-label="<?php esc_attr_e('Close modal', 'cherry-biz'); ?>"
                        data-custom-close="menu-modal"></button>
            </header>
            <main class="modal__content" id="menu-modal-content">
                <nav id="site-navigation" class="nnc-menu-modal">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ]);
                    ?>
                </nav>
            </main>
        </div>
    </div>
</div>
