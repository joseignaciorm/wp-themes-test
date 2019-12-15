<?php get_header(); ?>
<section class="resource-full-with grid-container full">
	<div class="resource-content P-b grid-container">
		<h2 class="resource-content--title P-l-r"><a href=""><?php _e('Catálogo', 'nar-trans'); ?></a></h2>
		<p class="resource-content--txt P-l-r M-b"><?php _e('Nuestro catálogo de producciones y obras transmedia. Una mirada selectiva sobre los proyectos transmediales europeos e iberoamericanos que más nos han gustado.', 'nar-trans'); ?></p>

		<!--<div class="">
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
		</div>-->
		
		<!-- https://desarrollowp.com/blog/tutoriales/crea-propio-motor-busqueda-wordpress/ -->
		
		<div class="grid-container form-contain section-p-t-b">
			<form method="get" class="form resource" action="">
				<div class="visibleItems">
					<div class="visibleItem searcher">
						<label for="inputKeyword"></label>
						<input type="text" id="inputKeyword" maxlength="10" autocomplete="off" placeholder="Buscar">
					</div>

					<div class="visibleItem filter">
						<div class="btn-advanceSearch" id="btn-advanceSearch">
							<p>Busqueda avanzada</p>
							<span class="fas fa-angle-down"></span>
						</div>

						<div class="hiddenItems" id="hiddenItems">
							<div class="fields" id="fields">
								<div class="selectItem">
									<select name="categoryName" id="todasCategorias">
										<option disabled selected>Todas las categorías</option>
										<option value="cat-1">Cat-1</option>
										<option value="cat-2">Cat-2</option>
									</select>
									<span class="fas fa-angle-down"></span>
								</div>

								<div class="selectItem">
									<select name="languageName" id="todosIdiomas">
										<option disabled selected>Todos los idiomas</option>
										<option value="en">Inglés</option>
										<option value="es">Español</option>
									</select>
									<span class="fas fa-angle-down"></span>
								</div>

								<div class="selectItem">
									<select name="yearName" id="todasAños">
										<option disabled selected>Todos los años</option>
										<option value="year-1">2017</option>
										<option value="year-2">2019</option>
									</select>
									<span class="fas fa-angle-down"></span>
								</div>
							</div>

							<div class="callActions">
								<div class="btn-1">
									<a href="">Todos</a>
								</div>

								<div class="btn-2">
									<a href="">Premios NarTrans</a>
								</div>
							</div>
						</div>
					</div>

					<div class="visibleItem btnSubmit">
						<button type="submit"><span class="fas fa-search search-icon"></span>Buscar</button>
					</div>
				</div>
				
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
