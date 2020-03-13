<?php
	$fake_news = new WP_Query( [
		'post_type'           => 'fake-news',
		'post_status'         => 'publish',
		'posts_per_page'      => 3,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
		'order'               => 'DESC',
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
		<?php endif; ?>
	</div>
</div>
