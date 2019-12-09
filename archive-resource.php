<?php get_header(); ?>

<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container">
		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>
		<p class="resource-content--txt P-l-r M-b"><?php _e('Nuestro catálogo de producciones y obras transmedia. Una mirada selectiva sobre los proyectos transmediales europeos e iberoamericanos que más nos han gustado.', 'nar-trans'); ?></p>

		<div class="articles-content">
			<div class="resource-content--cards grid-x grid-padding-x">
				<?php
				//$post_id = get_the_ID();
				//$terms = wp_get_post_terms($post_id, 'resource_type');

				$resource = NarTrans_Resource()->get_query();
				if ($resource->have_posts()) :

					while ($resource->have_posts()) : $resource->the_post();
						?>

						<div class="cell small-12 medium-6 large-4 grid-x">
							<?php get_template_part('template-parts/card', 'resource'); ?>
						</div>

					<?php endwhile; ?>

					<div class="pagination cell small-12">
						<?php previous_posts_link(); ?>
						<?php next_posts_link(); ?>
					</div>

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>
