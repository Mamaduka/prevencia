<?php if ( have_posts() ) : ?>

	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', 'service' ); ?>

		<?php endwhile; ?>

		<div class='col-md-4'>
			<div class='add-item'>
				<a class="add-circle">
					<img src="<?php echo Prevencia\the_asset('/img/plus.png'); ?>" alt='plus' />
				</a>
				<p class="description">დაამატე სერვისი</p>
			</div>
		</div>
	</div>

<?php endif; ?>
