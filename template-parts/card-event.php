<?php
/*$terms = wp_get_post_terms('taxonomy');
foreach ($terms as $term) {
	$term_link = get_term_link($term);
	$term_name = $term->name;
}*/
?>
<article class="card event">
	<div class="card-section">
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
			<date><?php the_time('d F \,\ Y'); ?> <?php _e('por', 'nar-trans'); ?> <a href=""><?php the_author(); ?></date></a>
		</div>
	</div>
</article>
