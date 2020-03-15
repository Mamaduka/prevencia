<?php
	$fake_news = new WP_Query( [
		'post_type'              => 'fake-news',
		'post_status'            => 'publish',
		'posts_per_page'         => 6,
		'ignore_sticky_posts'    => true,
		'no_found_rows'          => true,
		'order'                  => 'DESC',
		'update_post_term_cache' => false,
	] );
?>

<div class='fake-news'>
	<div class="container">
		<h3 class='header'>ყალბი სიახლეები</h3>
		<?php if ( $fake_news->have_posts() ) : ?>
			<div class='row'>
				<?php while ( $fake_news->have_posts() ) : $fake_news->the_post(); ?>
					<?php get_template_part( 'partials/content', 'archive' ); ?>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			</div>

			<a href="<?php echo get_post_type_archive_link( 'fake-news' ); ?>" class="light-btn">ყველას ნახვა</a>
		<?php endif; ?>
	</div>
</div>
