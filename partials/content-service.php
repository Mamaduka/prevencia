<?php
$col_class = is_archive() ? 'archive-item col-md-6' : 'col-md-4';
$hide_on_list =  is_archive() ? 'hide-on-list' : '';
?>
<div class="<?php echo $col_class; ?>">
	<div class='offer-item'>
		<div class='right-container'>
			<div class='category-name'>
				<span class='dot-online-shop'></span>
				<?php echo Prevencia\get_service_category(); ?>
			</div>
			<div class="image-title-container">
			<?php if (has_post_thumbnail()) : ?>
				<div class='img-circle'>
					<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
				</div>

			<?php endif; ?>
			<p class="company-title"><?php the_title(); ?></p>
			</div>
		</div>

	
		<span class="description <?php echo $hide_on_list; ?>">
			<strong class="<?php echo $hide_on_list; ?>"><?php echo get_the_excerpt(); ?></strong>
			<span class="more-text"><?php the_content(); ?></span>
		</span>
		<div>
			<a href='#'>წყარო</a>
		</div>

	</div>
</div>