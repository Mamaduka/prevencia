<div class="container">
	<div class='offers'>
		<h3 class="header">დისტანციური სერვისები</h3>
		<?php if ( function_exists( 'facetwp_display' ) ) : ?>

			<?php echo facetwp_display( 'facet', 'service_categories' ); ?>

			<?php echo facetwp_display( 'template', 'services' ); ?>

		<?php endif; ?>
	</div>
</div>
