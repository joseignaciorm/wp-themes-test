
<article class="card resourse">
	<figure class="image">
		<?php echo get_the_post_thumbnail(); ?>
	</figure>
	<div class="card-section">

		<?php
		$post_id = get_the_ID();
		$terms = wp_get_post_terms($post_id, 'resource_type');

		if (!is_wp_error($terms) && count($terms) && !is_post_type_archive()) {
			?>

			<p class="title-up">

				<?php foreach ($terms as $term) { ?>

					<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>

				<?php } ?>

			</p>

		<?php } ?>



		<h1 class="title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="public-date M-t-b">
			<date class=""><?php the_time('d F \,\ Y'); ?></date>
		</div>
		<p class="content">
			<a href="<?php the_permalink(); ?>">
				<?php $excerpt = wp_trim_words($post->post_content, 38);
				echo $excerpt; ?>
			</a>
		</p>
	</div>
</article>
