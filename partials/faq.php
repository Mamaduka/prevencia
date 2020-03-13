<?php
	$faqs = new WP_Query( [
		'post_type'           => 'faq',
		'post_status'         => 'publish',
		'posts_per_page'      => 50,
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
		'order'               => 'ASC',
	] );
?>

<div class='FAQ'>
	<div class="container">
		<h3 class='header'>რეკომენდაციები</h3>
		<?php if ( $faqs->have_posts() ) : ?>
		<div id='accordion'>
			<?php while ( $faqs->have_posts() ) : $faqs->the_post(); ?>
				<div class="heading"><?php the_title(); ?><span class="circle"><img src="<?php echo Prevencia\the_asset('/img/angle.png'); ?>" alt='angle' class='rotate90' /></span>
				</div>
				<div class="desc">
					<hr />
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<hr />
