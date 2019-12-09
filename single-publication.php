<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<section class="grid-x grid-container single-post">

		<div class="cell small-12 title-main m-t">
			<span class="U-breadcrumbs"><a href="<?php echo get_post_type_archive_link(NarTrans_Publication::POST_TYPE); ?>"><?php _e('Investigación', 'nar-trans'); ?></a></span>
			<?php
				$post_id = get_the_ID();
				$terms	 = wp_get_post_terms($post_id, 'publication_type');
				if (!is_wp_error($terms) && count($terms)) :
					?>

				<?php foreach ($terms as $term) { ?>
					<span class="U-breadcrumbs"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></span>
				<?php	} ?>



			<?php endif; ?>
			<h1 class="H-enfasis-small"><?php the_title(); ?></h1>
		</div>

		<div class="cell small-12  large-8 content">
			<?php the_content(); ?>
			<div class="M-t-b">
				<span class="title-attachment"><a href="#"><?php _e('Documento adjunto', 'nar-trans'); ?></a></span>
			</div>
		</div>

		<aside class="cell small-12 large-4">
			<?php
				$research_ids = get_post_meta(get_the_ID(), 'research_id');
				$year 				= get_post_meta(get_the_ID(), 'year', true);
				$magazine 		= get_post_meta(get_the_ID(), 'magazine', true);
				$doi					= get_post_meta(get_the_ID(), 'doi', true);
				$url 					= get_post_meta(get_the_ID(), 'link', true);
				?>

			<section class="data-description research">
				<div class="data-description--section">
					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Autor/a', 'nar-trans'); ?></small>
						<?php if (!is_wp_error($research_ids) && count($research_ids)) : ?>
							<span class="data--value"><em>
									<?php foreach ($research_ids as $research_id) {
												$research_name = get_the_title($research_id); ?>
										<a href="#"><?php echo $research_name ?></a>
									<?php } ?>
								</em></span>
						<?php endif; ?>
					</div>
					<div class="grid-y m-b card-date">
						<small class="data--title"><?php _e('Año', 'nar-trans'); ?></small>
						<date class="data--value"><?php echo $year; ?></date>
					</div>
					<div class="grid-y m-b data-address">
						<small class="data--title"><?php _e('Revista o publicación', 'nar-trans'); ?></small>
						<span class="data--value"><?php echo $magazine; ?></span>
					</div>
					<div class="grid-y m-b data-doi">
						<small class="data--title"><?php _e('DOI', 'nar-trans'); ?></small>
						<span class="data--value"><a class="data-address--info" target="_black" href="<?php echo $doi; ?>"><?php echo $doi; ?></a></span>
					</div>
					<div class="grid-y m-b data-tags">
						<small class="data--title"><?php _e('Etiquetas', 'nar-trans'); ?></small>
						<div class="data--value">
							<?php $publication_tags = wp_get_post_terms($post->ID, 'post_tag');
								if (!is_wp_error($publication_tags) && count($publication_tags)) :
									$i = 0;
									foreach ($publication_tags as $term) {
										$i++;
										if ($i > 1) {
											echo ', ';
										} ?>
									<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
							<?php }
								endif; ?>
						</div>
					</div>
					<div class="grid-y m-b data-link">
						<small class="data--title"><?php _e('Enlaces', 'nar-trans'); ?></small>
						<span class="data--value"><a href="<?php echo $url; ?>" target="_black"><?php echo $url; ?></a></span>
					</div>
				</div>
			</section>

		</aside>

	</section>

<?php endwhile; ?>
<?php get_footer(); ?>
