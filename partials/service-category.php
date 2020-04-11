<?php
	$categories = get_terms([
		'taxonomy' => 'service_category',
	]);
?>
<div class="offers-carousel">
	<div class="container">
		<p>სერვისები კატეგორიის მიხედვით</p>
	</div>
	<br/>
	<br/>
	<div class='category-slider'>
		<?php foreach ( $categories as $category ) : ?>
			<div class="slider-item">
				<div>
					<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				<div><?php echo esc_html( $category->name ); ?></div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
