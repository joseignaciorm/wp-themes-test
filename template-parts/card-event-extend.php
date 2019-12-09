<?php
/* Fecha de publicación. Pendiente imprimirla dinámicamente con el formato de fecha requerido */
$date_start		= get_post_meta(get_the_ID(), 'date_start', true);
?>

<article class="card extend">
	<figure class="image">
		<?php echo get_the_post_thumbnail(); ?>
	</figure>
	<div class=" card-section">
		<?php
			$post_id = get_the_ID();
			$terms = wp_get_post_terms($post_id, 'event_type');

				if (!is_wp_error($terms) && count($terms)) {
			?>

				<p class="title-up">

					<?php foreach ($terms as $term) { ?>

						<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>

					<?php } ?>

				</p>

		<?php } ?>

		<h1 class="title-ativity"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="public-date M-t-b">
			<date class="public-date--font"><?php _e('Publicado el', 'nar-trans'); ?> <?php the_time('d F \,\ Y'); ?> <?php _e('por', 'nar-trans'); ?> <a href=""><?php the_author(); ?></a></date>
		</div>
		<h2 class="title-activity-second"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
</article>
