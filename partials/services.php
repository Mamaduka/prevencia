<div class="container">
	<div class='offers'>
		<h3 class="header">დისტანციური სერვისები</h3>
		<?php if ( function_exists( 'facetwp_display' ) ) : ?>

			<?php echo facetwp_display( 'facet', 'service_categories' ); ?>

			<?php echo facetwp_display( 'template', 'services' ); ?>

		<?php endif; ?>
		<a href="<?php echo get_post_type_archive_link( 'services' ); ?>" class="light-btn">ყველას ნახვა</a>
	</div>
</div>
