<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<article class="grid-container grid-x grid-padding-x single-post">
		<div class="cell small-12 large-8 title-main m-t">

			<span class="U-breadcrumbs"><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php _e('Notícias', 'nar-trans'); ?></a></span>
			<?php $category_data = get_the_category(' ');
				$post_id = get_the_ID();
				$terms = wp_get_post_terms($post_id, 'category');
				if (!is_wp_error($terms) && count($terms)) : ?>

				<?php foreach ($terms as $term) { ?>

					<span class="U-breadcrumbs"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></span>

				<?php } ?>


			<?php endif; ?>


			<div class="content">
				<h1 class="H-enfasis-small"><?php the_title(); ?></h1>

				<?php if (has_post_thumbnail()) : ?>

					<div class="">
						<figure class="single-cpt-hero">
							<?php echo the_post_thumbnail('full'); ?>
						</figure>
					</div>

				<?php endif; ?>

				<?php the_content(); ?>

			</div>

		</div>


		<aside class="cell small-12 large-4 m-t">

			<section class="data-description research">
				<div class="data-description--section">
					<div class="grid-y m-b">
						<h2 class="h1"><?php _e('Datos de Notícias', 'nar-trans'); ?></h2>


					</div>
				</div>
			</section>

		</aside>

	</article>

<?php endwhile; ?>

<?php get_footer(); ?>
