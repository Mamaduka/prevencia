<?php
	$services = new WP_Query( [
		'post_type'              => 'service',
		'post_status'            => 'publish',
		'posts_per_page'         => 180,
		'ignore_sticky_posts'    => true,
		'no_found_rows'          => true,
		'shuffle_and_pick'       => 5,
	] );
?>

<div class='offers'>
	<div class="container">
		<h3 class="header">დისტანციური სერვისები</h3>
			<form role="search" method="get" class="d-flex" action="<?php echo get_post_type_archive_link( 'service' ); ?>">
				<?php echo Prevencia\service_category_dropdown(); ?>
				<input type="search" class="search-input" placeholder="ჩაწერეთ სერვისი" name="fwp_service_search" />
				<button type="submit" class="search-submit">
					<img src='<?php echo Prevencia\the_asset('/img/search-icon.png'); ?>' />
				</button>
			</form>
	</div>

	<?php get_template_part( 'partials/service', 'category' ); ?>

	<div class="container">
		<?php if ( $services->have_posts() ) : ?>
			<div class="row">

				<?php while ( $services->have_posts() ) : $services->the_post(); ?>
					<?php get_template_part( 'partials/content', 'service' ); ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

				<div class='col-md-4'>
					<div class='add-item'>
						<a class="add-circle">
							<img src="<?php echo Prevencia\the_asset('/img/plus.png'); ?>" alt='plus' />
						</a>
						<p class="description">დაამატე სერვისი</p>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<a href="<?php echo get_post_type_archive_link( 'service' ); ?>" class="see-all">ყველას ნახვა</a>
	</div>
</div>
