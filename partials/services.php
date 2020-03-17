<?php
	$services = new WP_Query( [
		'post_type'              => 'service',
		'post_status'            => 'publish',
		'posts_per_page'         => 50,
		'ignore_sticky_posts'    => true,
		'no_found_rows'          => true,
		'update_post_term_cache' => false,
	] );
?>

<div class="container">
	<div class='offers'>
		<h3 class="header">დისტანციური სერვისები</h3>

		<?php if ( $services->have_posts() ) : ?>

			<div class="row">
				<div class='col-md-4'>
					<div class='add-item'>
						<a class="add-circle">
							<img src="<?php echo Prevencia\the_asset('/img/plus.png'); ?>" alt='plus' />
						</a>
						<p class="description">დაამატე სერვისი</p>
					</div>
				</div>

				<?php while ( $services->have_posts() ) : $services->the_post(); ?>

					<div class='col-md-4'>
						<div class='offer-item'>
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid' ] ); ?>
							<?php endif; ?>
							<p class="company-title"><?php the_title(); ?></p>
							<span class="description">
								<strong><?php echo get_the_excerpt(); ?></strong>
								<span class="more-text"><?php the_content(); ?></span>
							</span>
						</div>
					</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			</div>

		<?php endif; ?>

	</div>
</div>
