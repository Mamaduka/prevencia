<?php get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/masthead' ); ?>

	<div class="page-container">
		<div class='fake-news fake-news-inner'>
			<div class="container">
			<div class="hero-container">
					<h3 class='header'><?php echo Prevencia\get_archive_title(); ?></h3>
					<div class="subtitle">Covid-19-ის შესახებ ბევრი დეზინფორმაცია ვრცელდება, იყავით ინფორმირებული, გადაამოწმეთ ყალბი ამბები</div>
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
	</div>

	<?php get_template_part( 'partials/footer' ); ?>

	<?php do_action( 'wp_footer' ); ?>
</body>

</html>
