<?php

use function Prevencia\get_svg;

get_header(); ?>

<body <?php body_class(); ?>>
	<?php get_template_part( 'partials/masthead' ); ?>

	<div class="main-block plain">
		<div class='offers'>
			<div class="container">
				<div class="hero-container">
					<h2><?php echo Prevencia\get_archive_title(); ?></h2>
					<div class="subtitle">მარტივად ერთ სივრცეში მიიღეთ ინფორმაცია საქართველოში არსებული დისტანციური სერვისებისა და პროდუქტების შესახებ</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p>სერვისების კატეგორიები</p>
						<?php echo facetwp_display( 'facet', 'service_categories' ); ?>
					</div>
					<div class="col-md-9">
						<?php if ( have_posts() ) : ?>
							<div class="toolbar">
								<span class="toolbar-sort">
									სორტირება: <?php echo facetwp_display( 'sort' ); ?>
								</span>
								<div>
									<a class='layout-link active' id='toGrid'>
										<?php echo get_svg( [ 'icon' => 'grid', 'width' => 26, 'height' => 16 ] ); ?>
									</a>
									<a class='layout-link' id='toList'>
										<?php echo get_svg( [ 'icon' => 'list', 'width' => 26, 'height' => 16 ] ); ?>
									</a>
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
