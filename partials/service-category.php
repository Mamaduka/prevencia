<?php
use function Prevencia\get_facet_term_url;

$categories = get_terms( [ 'taxonomy' => 'service_category' ] );
?>
<div class="offers-carousel">
	<div class="container">
		<p>სერვისები კატეგორიის მიხედვით</p>
	</div>
	<br/>
	<br/>
	<div class='category-slider'>
		<?php foreach ( $categories as $term ) : ?>
			<div class="slider-item">
				<img class="category-image" src="<?php echo Prevencia\the_asset('/img/government-services.png'); ?>" />
				<div class="category-name">
					<a href="<?php echo get_facet_term_url( $term->slug ); ?>">
						<?php echo esc_html( $term->name ); ?>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
