<?php get_header(); ?>
<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container">
		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>
		<p class="resource-content--txt P-l-r M-b"><?php _e('Nuestro catálogo de producciones y obras transmedia. Una mirada selectiva sobre los proyectos transmediales europeos e iberoamericanos que más nos han gustado.', 'nar-trans'); ?></p>

		<div class="">
			<form class="search" action="" method="get">
					<input type="search"id="search"  name="search" placeholder="<?php echo esc_attr_x('Buscar', 'nar-trans'); ?>">
					<label for="search">
						<span class="fa fa-search"></span>
						<span class="screen-reader-text"><?php _e('Filtro', 'nar-trans'); ?></span>
					</label>
					<label class="">
						<input class="button" type="submit" value="<?php echo esc_attr_x('Buscar', 'nar-trans'); ?>">
					</label>
			</form>
		</div>

		<div class="articles-content">
			<div class="resource-content--cards grid-x grid-padding-x">
				<?php
				//$post_id = get_the_ID();
				//$terms = wp_get_post_terms($post_id, 'resource_type');

				/*$resource = NarTrans_Resource()->get_query(array(
					'posts_per_page' => 1,
				));*/
				if (have_posts()) :

					while (have_posts()) : the_post();
						?>

						<div class="cell small-12 medium-6 large-4 grid-x">
							<?php get_template_part('template-parts/card', 'resource'); ?>
						</div>

					<?php endwhile; ?>

					<div class="pagination cell small-12">
						<?php echo  paginate_links(); ?>
					</div>

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>

	</div>

</section>

<?php get_footer(); ?>
