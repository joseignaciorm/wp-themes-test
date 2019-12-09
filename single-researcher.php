<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<section class="grid-x grid-container single-post">
		<div class="cell small-12 medium-8 m-t">
			<div class="title-main">
				<h1 class="H-enfasis-small"><?php the_title(); ?></h1>
			</div>

			<div class="content m-t">

				<div class="M-t-b">
					<h2 class="title-attachment"><a href="#"><?php _e('Biografía', 'nar-trans'); ?></a></h2>
					<div class="autor_content">

						<?php if ($biography = get_post_meta(get_the_ID(), 'biography', true)) : ?>

							<?php echo $biography; ?>

						<?php endif; ?>

					</div>
				</div>

			</div>
		</div>

		<aside class="cell small-12 large-4 m-t">
			<section class="data-description research">
				<div class="data-description--section">

					<div class="grid-y m-b">
						<small class="data--title"><?php _e('Autor/a', 'nar-trans') ?></small>
						<span class="data--value"><em><?php the_title(); ?></em></span>
					</div>

					<div class="grid-y m-b card-date">

						<?php if ($email = get_post_meta(get_the_ID(), 'email', true)) : ?>

							<small class="data--title"><?php _e('Email', 'nar-trans'); ?></small>
							<span class="data--value"><?php echo $email; ?></span>

						<?php endif; ?>

					</div>

					<div class="grid-y m-b card-date">

						<?php if ($phone_number = get_post_meta(get_the_ID(), 'phone_number', true)) : ?>

							<small class="data--title"><?php _e('Número teléfono', 'nar-trans'); ?></small>
							<span class="data--value"><?php echo $phone_number; ?></span>

						<?php endif; ?>

					</div>

					<div class="grid-y m-b card-date">

						<?php if ($webpage = get_post_meta(get_the_ID(), 'webpage', true)) : ?>

							<small class="data--title"><?php _e('Web Page', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $webpage; ?>"><?php echo $webpage; ?></a></span>

						<?php endif; ?>

					</div>

					<div class=" grid-y m-b card-date">

						<?php if ($facebook = get_post_meta(get_the_ID(), 'facebook', true)) : ?>

							<small class="data--title"><?php _e('Facebook', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $facebook; ?>"><?php echo $facebook; ?></a></span>

						<?php endif; ?>

					</div>

					<div class=" grid-y m-b card-date">

						<?php if ($twitter = get_post_meta(get_the_ID(), 'twitter', true)) : ?>

							<small class="data--title"><?php _e('Twitter', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $twitter; ?>"><?php echo $twitter; ?></a></span>

						<?php endif; ?>

					</div>

					<div class="grid-y m-b card-date">

						<?php if ($gplus = get_post_meta(get_the_ID(), 'gplus', true)) : ?>

							<small class="data--title"><?php _e('Google Plus', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $gplus; ?>"><?php echo $gplus; ?></a></span>

						<?php endif; ?>

					</div>

					<div class="grid-y m-b card-date">

						<?php if ($linkedin = get_post_meta(get_the_ID(), 'linkedin', true)) : ?>

							<small class="data--title"><?php _e('LinkedIn', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $linkedin; ?>"><?php echo $linkedin; ?></a></span>

						<?php endif; ?>

					</div>

					<div class="grid-y m-b card-date">

						<?php if ($researchgate = get_post_meta(get_the_ID(), 'researchgate', true)) : ?>

							<small class="data--title"><?php _e('Research Gate', 'nar-trans'); ?></small>
							<span class="data--value"><a class="data--value" target="_blank" href="<?php echo $researchgate; ?>"><?php echo $researchgate; ?></a></span>

						<?php endif; ?>

					</div>

			</section>

		</aside>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>
