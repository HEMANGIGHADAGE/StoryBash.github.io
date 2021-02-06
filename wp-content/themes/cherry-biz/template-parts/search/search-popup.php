<div class="modal micromodal-slide" id="search-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container w-100" role="dialog" aria-modal="true" aria-labelledby="search-modal-title">
            <header class="modal__header d-flex justify-content-end">
                <button class="p-0 modal__close"
                        title="<?php esc_attr_e('Close modal', 'cherry-biz'); ?>"
                        aria-label="<?php esc_attr_e('Close modal', 'cherry-biz'); ?>"
                        data-custom-close="search-modal"></button>
            </header>
            <main class="modal__content" id="search-modal-content">
                <div class="nnc-search-form h-100 container mb-5">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-12 col-md-8">
                            <form role="search" method="get" class="search-form d-flex align-items-center" action="">
                                <label class="m-0" id="search-popup">
                                    <span class="screen-reader-text"><?php esc_html_e('Search for', 'cherry-biz'); ?>:</span>
                                    <input type="search"
                                           class="search-field"
                                           placeholder="<?php esc_attr_e('Search...', 'cherry-biz'); ?>"
                                           value=""
                                           name="s"
                                           autofocus>
                                </label>
                                <button role="button" id="popup-search-button" class="btn btn--primary btn--icon-square ml-1">
                                    <i class="fas fa-search text-white"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
