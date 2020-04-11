<?php $col_class = is_archive() ? 'col-md-6' : 'col-md-4'; ?>
<div class="<?php echo $col_class; ?>">
	<div class='offer-item'>
		<div class='category-name'>
			<span class='dot-online-shop'></span>
			<?php echo Prevencia\get_service_category(); ?>
		</div>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'img-fluid' ] ); ?>
		<?php endif; ?>
		<p class="company-title"><?php the_title(); ?></p>
		<span class="description">
			<strong><?php echo get_the_excerpt(); ?></strong>
			<span class="more-text"><?php the_content(); ?></span>
		</span>
	</div>
</div>
