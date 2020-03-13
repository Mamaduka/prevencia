<div class="col-md-4">
	<div class="fake-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image' ] ); ?>
			</a>
		<?php endif; ?>
		<p class='date'><?php echo wp_date( 'F j, Y' ); ?></p>
		<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
		<div class='seemore'>
			<a href="<?php the_permalink(); ?>">
				<span class="circle"><img src="<?php echo Prevencia\the_asset('/img/angle.png'); ?>" alt="angle" /></span><span>სრულად ნახვა</span>
			</a>
		</div>
	</div>
</div>
