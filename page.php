<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'partials/masthead' ); ?>
	<div class="page-container ">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class='container'>
			<div class="hero-container">
				<h2><?php the_title(); ?></h2>
			</div>
	
			<div class="text-container">
				

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image' ] ); ?>
				<?php endif; ?>

				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'partials/footer' ); ?>
	</div>

	<?php do_action( 'wp_footer' ); ?>
</body>
</html>
