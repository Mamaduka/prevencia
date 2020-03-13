<?php get_header(); ?>
<body>
	<div class="main-block">
		<?php get_template_part( 'partials/masthead' ); ?>

		<?php get_template_part( 'partials/prevention' ); ?>
	</div>

	<?php get_template_part( 'partials/services' ); ?>
	
	<?php get_template_part( 'partials/fake-news' ); ?>

	<?php get_template_part( 'partials/faq' ); ?>

	<?php get_template_part( 'partials/service-form' ); ?>

	<?php get_template_part( 'partials/footer' ); ?>

	<?php do_action( 'wp_footer' ); ?>
</body>
</html>
