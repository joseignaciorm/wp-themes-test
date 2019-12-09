<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<section class="grid-container full">
		<div class="single-cpt grid-container full">
			<figure class="grid-container single-cpt-hero grid-x align-center-middle">
				<?php echo the_post_thumbnail('full'); ?>
			</figure>
		</div>

		<div class="grid-container grid-x grid-padding-x single-post">
			<div class="cell small-12 large-8 title-main m-t">
				<span class="U-breadcrumbs"><a href="<?php echo get_post_type_archive_link(NarTrans_Resource::POST_TYPE); ?>"><?php _e('Recurso', 'nar-trans'); ?></a></span>
				<?php
					$post_id = get_the_ID();
					$terms	 = wp_get_post_terms($post_id, 'resource_type');
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
							<h2 class="h1"><?php _e('Ficha Técnica', 'nar-trans'); ?></h2>

							<div class="data-links">
								<?php if ($enlaces = get_post_meta(get_the_ID(), 'links', true)) : ?>
									<span class="data--value data--title"><?php echo $enlaces; ?></span>
								<?php endif; ?>
								<?php if ($url_fb	= get_post_meta(get_the_ID(), 'facebook', true)) : ?>
									<a class="data--value data--title" target="_blank" href="<?php echo $url_fb; ?>"><?php echo $url_fb; ?></a>
								<?php endif; ?>
								<?php if ($url_tw	= get_post_meta(get_the_ID(), 'twitter', true)) : ?>
									<a class="data--value data--title" target="_blank" href="<?php echo $url_tw; ?>"><?php echo $url_tw; ?></a>
								<?php endif; ?>
							</div>
						</div>

						<div class="grid-y m-b">
							<?php if ($credits = get_post_meta(get_the_ID(), 'credit', true)) : ?>
								<small class="data--title"><?php _e('Creado Por', 'nar-trans'); ?></small>
								<p class="data--value"><?php echo $credits; ?></p>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php if ($nationality 	= get_post_meta(get_the_ID(), 'nationality', true)) : ?>
								<small class="data--title"><?php _e('Nacionalidad', 'nar-trans'); ?></small>
								<span class="data--value"><?php echo $nationality; ?></span>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php if ($special_collaboration = get_post_meta(get_the_ID(), 'special_collaboration', true)) : ?>
								<small class="data--title"><?php _e('Colaboración especial', 'nar-trans'); ?></small>
								<span class="data--value"><?php echo $special_collaboration; ?></span>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php if ($launch_date = get_post_meta(get_the_ID(), 'launch_date', true)) : ?>
								<small class="data--title"><?php _e('Fecha lanzamiento', 'nar-trans'); ?></small>
								<date class="data--value"><?php echo $launch_date; ?></date>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php if ($media_platform	= get_post_meta(get_the_ID(), 'media_platform', true)) : ?>
								<small class="data--title"><?php _e('Medios y plataforma', 'nar-trans'); ?></small>
								<span class="data--value"><?php echo $media_platform; ?></span>
							<?php endif; ?>
						</div>

						<div class="grid-y m-b">
							<?php
								$post_id = get_the_ID();
								if ($terms = wp_get_post_terms($post_id, 'resource_language')) :

									if (!is_wp_error($terms) && count($terms)) :
									 ?>
									<small class="data--title"><?php _e('Idiomas', 'nar-trans'); ?></small>
									<ul class="data-value-list">
										<?php foreach ($terms as $term) { ?>

											<li><span class="data--value"><?php echo $term->name; ?></span></li>


										<?php } ?>
									</ul>
								<?php endif; ?>

							<?php endif; ?>

						</div>
						<div class="grid-y m-b">
							<?php
								$post_id = get_the_ID();
								if ($terms = wp_get_post_terms($post_id, 'resource_genre')) :

									if (!is_wp_error($terms) && count($terms)) :
									 ?>
										<small class="data--title"><?php _e('Género', 'nar-trans'); ?></small>
										<ul class="data-value-list">
											<?php foreach ($terms as $term) { ?>

												<li><span class="data--value"><?php echo $term->name; ?></span></li>

											<?php } ?>
										</ul>
									<?php endif; ?>

							<?php endif; ?>
						</div>
					</div>
				</section>

			</aside>

		</div>
	</section>
<?php endwhile; ?>

<?php get_footer(); ?>
