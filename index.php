<?php get_header(); ?>

<body <?php body_class(); ?>>
	<div class="page-container">
		<?php get_template_part( 'partials/masthead' ); ?>

		<div class='fake-news fake-news-inner'>
			<div class="container">
			<div class="hero-container">
					<h3 class='header'><?php echo Prevencia\get_archive_title(); ?></h3>
					<div class="subtitle">დისტანციური სერვისები რომელიც დაგეხმარებათ სახლიდან გაუსვლელად მიიღოთ ყველანაირი სერვისი</div>
				</div>
				
				<?php if ( have_posts() ) : ?>
					<div class='row'>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'partials/content', 'archive' ); ?>
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
