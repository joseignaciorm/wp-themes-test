<?php
get_header(); ?>
<div class="grid-container section-p-t-b">
	<div class="">
    <ul>
		<?php
            global $post; // Variable global opcional para obtener toda la información de los posts
            $args = array(
                'posts_per_page' => 5,
                'offset' => 0,
                'category' => '',
                //'category_name' => 'actualidad, Uncategorized',
                'orderby' => 'date', // 'title 
                'order' => 'desc', // ASC
                'include' => '', // Incluye post que queramos mostrar
                //'exclude' => '181, 184', // Excluye post que no queremos mostrat. Argumento id
                //'mata_key' => 'nationality',
                //'meta_value' => 'Española',
                //'post_type' => 'resource',
                'post_mime_type' => '',
                'post_parent' => '',
                'author' => '',
                'author_name' => '',
                'post_status' => 'publish',
                'suppress_filters' => true,
            );

            $post_array = get_posts($args);
            foreach($post_array as $post) : setup_postdata($post); ?>
            <li class="m-b">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
            </li>
            <?php endforeach;  wp_reset_postdata(); ?>

    </ul>
	</div>
</div>
<?php
get_footer();
