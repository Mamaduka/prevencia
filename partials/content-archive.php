<div class="col-md-4">
	<div class="fake-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium', [ 'class' => 'image' ] ); ?>
			</a>
		<?php endif; ?>
		<p class='date'><?php echo get_post_time( 'F j, Y' ); ?></p>
		<p class="excerpt"><?php the_title(); ?></p>
		<div class='seemore'>
			<a href="<?php the_permalink(); ?>">
				 <span>ნახე მეტი</span>
			</a>
		</div>
	</div>
</div>
