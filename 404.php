<?php get_header(); ?>

<body>
	<div class="main-block whiten">
		<?php get_template_part( 'partials/masthead' ); ?>

		<div class='404-main'>
			<div class="container">
				<h3 class='header'>404</h3>
				<p>¯\_(ツ)_/¯</p>
			</div>
		</div>

	<?php get_template_part( 'partials/footer' ); ?>

	</div>

	<?php do_action( 'wp_footer' ); ?>
</body>

</html>
