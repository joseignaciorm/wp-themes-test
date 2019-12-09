<?php get_header(); ?>

<section class="research-sec grid-x grid-container grid-margin-y P-b">
	<h1 class="cell research-sec--title"><a href=""><?php _e('Investigación', 'nar-trans'); ?></a></h1>
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
</section>

<?php get_footer(); ?>
