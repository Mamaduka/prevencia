<?php get_header(); ?>

<body>
<?php get_template_part( 'partials/masthead' ); ?>
	<div class="main-block whiten">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class='container'>
			<div class="text-container">
				<h2 class="text-center"><?php the_title(); ?></h2>

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image' ] ); ?>
				<?php endif; ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'partials/footer' ); ?>
	</div>

	<?php do_action( 'wp_footer' ); ?>
</body>
</html>
