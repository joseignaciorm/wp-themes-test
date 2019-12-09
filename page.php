<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="grid-container section-p-t-b">
	<div class="">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/custompage'); ?>

				<?php //comments_template(); ?>

			<?php endwhile; ?>

		<?php //get_sidebar(); ?>

	</div>
</div>
<?php
get_footer();
