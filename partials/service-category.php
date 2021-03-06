<?php

use function Prevencia\get_service_image;
use function Prevencia\get_facet_term_url;

$categories = get_terms(['taxonomy' => 'service_category']);
?>
<div class="offers-carousel">
	<div class="container">
		<p class="title">სერვისები კატეგორიის მიხედვით</p>
		<div class="arrow-container">
			<div class="slick-prev">
				<img class='a-right control-c next' src="<?php echo Prevencia\the_asset('/img/angle-left.png'); ?>">
			</div>
			<div class="slick-next">
				<img class='a-right control-c next' src="<?php echo Prevencia\the_asset('/img/angle-right.png'); ?>">
			</div>
		</div>
	</div>
	<br />
	<br />
	<div class="category-slider">
		<?php foreach ($categories as $term) : ?>
			<a href="<?php echo get_facet_term_url($term->slug); ?>" class="slider-item">
				<?php if ($image = get_service_image($term)) : ?>
					<img class="category-image" src="<?php echo esc_url($image); ?>" />
				<?php endif; ?>
				<span class="category-name"><?php echo esc_html($term->name); ?></span>
			</a>
		<?php endforeach; ?>
	</div>
</div>
