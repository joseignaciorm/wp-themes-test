<?php get_header(); ?>

<section class="event-content grid-container grid-padding-x">
	<h2 class="archive__title P-l-r"><a href=""><?php _e('Actividades', 'nar-trans'); ?></a></h2>
	<p class="P-l-r M-b"><?php _e('Nuestras actividades', 'nar-trans'); ?></p>
	<div class="grid-container grid-x align-middle">

		<div class="event-content">
			<div class="l-event-card-content grid-x grid-padding-x section-p-t-b">
				<?php
				$event = NarTrans_Event()->get_query(['posts_per_page' => 4]);
				while ($event->have_posts()) : $event->the_post();
					?>

					<div class="cell small-12 medium-6 large-4 grid-x">
						<?php get_template_part('template-parts/card', 'event'); ?>
					</div>

				<?php endwhile; ?>

			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>
