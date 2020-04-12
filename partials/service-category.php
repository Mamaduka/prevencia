<?php
use function Prevencia\get_service_image;
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
				<?php if ( $image = get_service_image( $term ) ) : ?>
					<img class="category-image" src="<?php echo esc_url( $image ); ?>" />
				<?php endif; ?>
				<div class="category-name">
					<a href="<?php echo get_facet_term_url( $term->slug ); ?>">
						<?php echo esc_html( $term->name ); ?>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
