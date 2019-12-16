<article class="tax__container">
	<div class="tax__container--section">
	<?php if(has_post_thumbnail()) : ?>
		<figure class="image">
			<?php //echo get_the_post_thumbnail(); ?>
		</figure>
	<?php endif; ?>

		<div class="tax__container--content">
			<?php
			the_title('<h2 class=""><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			?>

			<?php
			$excerpt = wp_trim_words($post->post_content, 60);
			echo $excerpt; ?>
			<?php //the_content();
			?>
		</div>

	</div>

</article>
