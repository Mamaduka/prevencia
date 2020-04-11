<?php get_header(); ?>

<body>
	<?php get_template_part( 'partials/masthead' ); ?>

	<div class="main-block plain">
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
							<div class="toolbar">
								<span class="toolbar-sort">
									სორტირება: <?php echo facetwp_display( 'sort' ); ?>
								</span>
								<div>
									<a class='layout-link active' id='toGrid'><img src="<?php echo Prevencia\the_asset('/img/grid.png'); ?>" alt='grid' /></a>
									<a class='layout-link' id='toList'><img src="<?php echo Prevencia\the_asset('/img/list.png'); ?>" alt='grid' /></a>
								</div>
							</div>
							<div id='archive-grid'  class='row'>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php get_template_part( 'partials/content', 'service' ); ?>
							<?php endwhile; ?>
							</div>

							<?php echo facetwp_display( 'pager' ); ?>

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
