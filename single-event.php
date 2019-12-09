<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<section class="grid-container full">

		<div class="single-cpt grid-container full">
			<figure class="single-cpt-hero grid-x align-center-middle">
				<?php echo the_post_thumbnail('full'); ?>
			</figure>
		</div>

		<div class="grid-container grid-x grid-padding-x single-post">
			<div class="cell small-12 large-8 title-main m-t">
				<span class="U-breadcrumbs"><a href="<?php echo get_post_type_archive_link(NarTrans_Event::POST_TYPE); ?>"><?php _e('Evento', 'nar-trans'); ?></a></span>
				<?php
					$post_id = get_the_ID();
					$terms	 = wp_get_post_terms($post_id, 'event_type');
					if (!is_wp_error($terms) && count($terms)) :
						?>

					<?php foreach ($terms as $term) { ?>
						<span class="U-breadcrumbs"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></span>
					<?php	} ?>
				<?php endif; ?>

				<div class="content">
					<h1 class="H-enfasis-small"><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

			</div>


			<aside class="cell small-12 large-4 m-t">

				<section class="data-description research">
					<div class="data-description--section">
						<div class="grid-y m-b">
							<h2 class="h1"><?php _e('Información de la actividad', 'nar-trans'); ?></h2>
						</div>


						<div class="grid-y m-b">
							<?php if ($start_date = get_post_meta(get_the_ID(), 'date_start', true)) : ?>
								<small class="data--title"><?php _e('Fecha inicial', 'nar-trans'); ?></small>
								<date class="data--value"><?php echo $start_date; ?></date>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php if ($end_date = get_post_meta(get_the_ID(), 'date_end', true)) : ?>
								<small class="data--title"><?php _e('Fecha final', 'nar-trans'); ?></small>
								<date class="data--value"><?php echo $end_date; ?></date>
							<?php endif; ?>
						</div>
					</div>
				</section>

			</aside>

		</div>
	</section>
<?php endwhile; ?>

<?php get_footer(); ?>
