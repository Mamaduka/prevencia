<?php get_header(); ?>

<body>
	<?php get_template_part( 'partials/masthead' ); ?>

	<div class="main-block">
		<div class='offers'>
			<div class="container">
				<div class="hero-container">
					<h2><?php echo Prevencia\get_archive_title(); ?></h2>
					<div class="subtitle">დისტანციური სერვისები რომელიც დაგეხმარებათ სახლიდან გაუსვლელად მიიღოთ ყველანაირი სერვისი</div>
				</div>

				<?php echo facetwp_display( 'facet', 'service_search' ); ?>

				<div class="row">
					<div class="col-md-3">
						<p>სერვისების ჩამონათვალი</p>
						<?php echo facetwp_display( 'facet', 'service_categories' ); ?>
					</div>
					<div class="col-md-9">
						<?php if ( have_posts() ) : ?>
							<div class='row'>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'partials/content', 'service' ); ?>
							<?php endwhile; ?>
							</div>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'partials/footer' ); ?>

	<?php do_action( 'wp_footer' ); ?>
</body>
</html>
