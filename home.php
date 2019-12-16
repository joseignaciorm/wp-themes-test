<?php
get_header(); ?>
<?php //get_template_part( 'template-parts/featured-image' ); ?>
<div class="grid-container section-p-t-b">
	<div class="">
    
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="m-b">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content(); ?></p>
                    <hr>
                </div>
			<?php endwhile; ?>
            
		<?php //get_sidebar(); ?>

	</div>
</div>
<?php
get_footer();
