<?php
$col_class = is_archive() ? 'archive-item col-md-6' : 'col-md-4';
$hide_on_list =  is_archive() ? 'hide-on-list' : '';
?>
<div class="<?php echo $col_class; ?>">
	<div class='offer-item'>
		<header class="offer-header">
			<div class='category-name'>
				<span class='dot-online-shop'></span>
				<?php echo Prevencia\get_service_category(); ?>
			</div>

			<?php if ( is_archive() ) : ?>
				<div class="go-back">
					<button>უკან დაბრუნება</button>
				</div>
			<?php endif; ?>

			<?php if ( has_post_thumbnail() ) : ?>
				<div class='img-circle'>
					<?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
				</div>
			<?php endif; ?>

			<h3 class="company-title"><?php the_title(); ?></h3>
		</header>

		<div class="offer-content">
			<strong class="excerpt"><?php echo get_the_excerpt(); ?></strong>
			<span class="full"><?php the_content(); ?></span>
			<?php echo Prevencia\get_service_source(); ?>
		</div>

		<?php if ( is_archive() ) : ?>
			<button class="expand">წყარო</button>
		<?php endif; ?>
	</div>
</div>
