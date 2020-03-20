<?php get_header(); ?>

<body>
	<div class="main-block whiten">
		<?php get_template_part( 'partials/masthead' ); ?>

		<div class='offers'>
			<div class="container">
				<h3 class='header'><?php echo Prevencia\get_archive_title(); ?></h3>
				<?php if ( have_posts() ) : ?>
					<div class='row'>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'partials/content', 'service' ); ?>
					<?php endwhile; ?>
					</div>

					<?php echo Prevencia\get_the_pagination(); ?>
				<?php endif; ?>
			</div>
		</div>

	<?php get_template_part( 'partials/footer' ); ?>

	</div>

	<?php do_action( 'wp_footer' ); ?>
</body>

</html>
