<?php get_header(); ?>

<section class="grid-container section-p-t-b">
	<div class="grid-x grid-padding-x">

		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<div class="cell small-12 medium-6 large-3 grid-x">

					<?php get_template_part('template-parts/customTaxonomies', get_post_format()); ?>

				</div>
			<?php endwhile; ?>

		<?php endif; ?>

	</div>

	<div>
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if (function_exists('foundationpress_pagination')) :
			foundationpress_pagination();
		elseif (is_paged()) :
			?>
			<nav id=" post-nav">
				<div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'foundationpress')); ?></div>
				<div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'foundationpress')); ?></div>
			</nav>
		<?php endif; ?>

	</div>
</section>

<?php get_footer();
