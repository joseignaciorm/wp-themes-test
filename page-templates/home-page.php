<?php
/*
Template Name: Home
*/

get_header(); ?>

<?php /* Primera section Home Container - Blk-1 */ ?>
<section class="blk-full-with grid-container full">
	<div class="blk-1 grid-container grid-x grid-margin-y align-middle">
		<div class="blk-1--items cell small-12 large-6 M-b">
			<div class="desktop-info P-l-r">
				<h1 class="H-enfasis">
					<?php _e('Narrativas', 'nar-trans'); ?> <br> <?php _e('Transmediales', 'nar-trans'); ?>
				</h1>
				<p class="Txt M-b">
					<?php _e('Transmedialización y crowdsourcing en las narrativas de ficción y no ficción audiovisuales, periodísticas, dramáticas y literarias.', 'nar-trans'); ?>
				</p>
			</div>

			<div class="btn-items M-t grid-x grid-padding-x">
				<div class="btn-nar cell small-12 medium-6">


					<a class="button expanded" href="<?php echo get_the_permalink(); ?>">
						<?php _e('El Proyecto Nar_Trans', 'nar-trans'); ?>
					</a>
				</div>
				<?php //Esto irá al archivo del término 'laboratorio', que es un tipo de recurso.
				?>
				<div class="btn-lab cell small-12 medium-6">
					<?php $lab_link = get_term_link('laboratorio', 'resource_type');
					if (!is_wp_error($lab_link)) : ?>

						<a class="hollow button expanded" href="<?php echo get_term_link('laboratorio', 'resource_type'); ?>">
							<?php _e('Ir al laboratorio', 'nar-trans'); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="blk-1-image cell small-12 large-5 large-offset-1">
			<img src="<?php echo get_stylesheet_directory_uri() . '/dist/assets/images/Narrativas-Transmediales-image.svg'; ?>" alt="">
		</div>
	</div>
</section>
<?php /* Fin Primera section Home Container - Blk-1 */ ?>


<?php /* Segunda section Home Container - BLOQUE 2 EVENT */ ?>
<section class="event-content grid-x grid-container grid-padding-x section-p-t-b">
	<div class="l-event-card-content cell small-12 large-8">

		<?php
		$eventExtend = NarTrans_Event()->get_query(['posts_per_page' => 1]);
		while ($eventExtend->have_posts()) : $eventExtend->the_post(); ?>

			<?php get_template_part('template-parts/card', 'event-extend'); ?>

		<?php endwhile; ?>

	</div>

	<aside class="aside--cards cell small-12 large-4">
		<div class="">
			<?php
			$event = NarTrans_Event()->get_query(['posts_per_page' => 2, 'offset' => 1]);
			while ($event->have_posts()) : $event->the_post();
				?>

				<?php get_template_part('template-parts/card', 'event'); ?>

			<?php endwhile; ?>
		</div>

		<div class="card-event-btn">
			<a class="button expanded" href="<?php echo get_post_type_archive_link(NarTrans_Event::POST_TYPE); ?>">
				<?php _e('Ver más eventos', 'nar-trans'); ?>
			</a>
		</div>

	</aside>
</section>
<?php /* Fín Segunda section Home Container - BLOQUE 2 EVENT  */ ?>


<?php /* Tercera section Home Container - Blk-3 */ ?>
<section class="news-full-with grid-container full">
	<div class="news-content P-b grid-container">
		<h2 class="news--title P-l-r"><a href="<?php echo get_post_type_archive_link('post'); ?>"><?php _e('Noticias', 'nar-trans'); ?></a></h2>

		<div class="articles-content">
			<div class="news-content--cards grid-x grid-padding-x">
				<?php
				$news = new WP_Query('post_name=noticias&order=ASC'); // post = 174

				while ($news->have_posts()) : $news->the_post();
					?>
					<div class="cell small-12 medium-6 large-4">

						<?php get_template_part('template-parts/card'); ?>

					</div>
				<?php endwhile; ?>

			</div>
		</div>


		<div class="news-btn M-t grid-x grid-padding-x">
			<div class="cell small-12 medium-8 medium-offset-2 large-4 large-offset-4">
				<a class="button expanded" href="<?php echo get_post_type_archive_link('post'); ?>">
					<?php _e('Ver más noticias', 'nar-trans'); ?>
				</a>
			</div>
		</div>
	</div>
</section>
<?php /* Fín Tercera section Home Container - Blk-3 */ ?>


<?php /* Cuarta section Home Container - Blk-4 */ ?>
<section class="research-sec grid-x grid-container grid-margin-y P-b">
	<h1 class="cell research-sec--title"><a href="<?php echo get_post_type_archive_link(NarTrans_Publication::POST_TYPE); ?>"><?php _e('Investigación', 'nar-trans'); ?></a></h1>
	<div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">

		<?php
		$publications = NarTrans_Publication()->get_query(['posts_per_page => 3']);
		while ($publications->have_posts()) : $publications->the_post();
			?>

			<div class="cell grid-x">
				<?php get_template_part('template-parts/card', 'publication'); ?>
			</div>

		<?php endwhile; ?>

	</div>

	<div class="cell small-12 medium-6 medium-offset-3 large-4 large-offset-8">
		<a href="<?php echo get_post_type_archive_link(NarTrans_Publication::POST_TYPE); ?>" class="button expanded"><?php _e('Ver más publicaciones', 'nar-trans'); ?></a>
	</div>
</section>
<?php /* Fín Cuarta section Home Container - Blk-4 */ ?>

<?php /* Quinta section Home Container - Blk-4 */ ?>
<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container">
		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>

		<div class="articles-content">
			<div class="resource-content--cards grid-x grid-padding-x">
				<?php
				$resource = NarTrans_Resource()->get_query(['posts_per_page' => 4]);
				while ($resource->have_posts()) : $resource->the_post();
					?>

					<div class="cell small-12 medium-6 large-3 grid-x">
						<?php get_template_part('template-parts/card', 'resource'); ?>
					</div>

				<?php endwhile; ?>
			</div>
		</div>

		<div class="more-news M-t grid-x grid-padding-x">
			<div class="cell small-12 medium-8 medium-offset-2 large-6 large-offset-3">
				<a class="button expanded" href="<?php echo get_post_type_archive_link(NarTrans_Resource::POST_TYPE); ?>">
					<?php _e('Ver todo el catálogo', 'nar-trans'); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<?php /* Fín quinta section Home Container - Blk-4 */ ?>

<?php get_footer();
?>