<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cherry-biz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) :
            ?>
		<div class="entry-meta">
			<?php
                cherry_biz_posted_by();
                cherry_biz_posted_on();
                cherry_biz_entry_footer();
                ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <?php cherry_biz_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        the_content(sprintf(
                    wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'cherry-biz'),
                        [
                            'span' => [
                                'class' => [],
                            ],
                        ]
            ),
                    get_the_title()
        ));

        /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(' / ', 'list item separator', 'cherry-biz'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__('Tagged : %1$s', 'cherry-biz') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }

        wp_link_pages([
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'cherry-biz'),
            'after' => '</div>',
        ]);
        ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->