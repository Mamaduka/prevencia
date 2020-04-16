<?php get_header(); ?>

<body <?php body_class(); ?>>
	<div class="main-block whiten">
		<?php get_template_part( 'partials/masthead' ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class='container'>
			<div class="blog-inner-container">
				

				<div class="title"><?php the_title(); ?></div>

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image' ] ); ?>
				<?php endif; ?>
				<div class="top">
					<span class="date"><?php echo wp_date( 'F j, Y' ); ?></span>
				</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<div class="source">
					<?php echo Prevencia\display_source(); ?>
				</div>
			</div>
		</div>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'partials/footer' ); ?>
	</div>

	<?php do_action( 'wp_footer' ); ?>
</body>
</html>
