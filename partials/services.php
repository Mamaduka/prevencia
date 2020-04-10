<div class='offers'>
	<div class="container">
		<h3 class="header">დისტანციური სერვისები</h3>
		<?php if (function_exists('facetwp_display')) : ?>

			<form action='' class='d-flex'>
				<?php echo facetwp_display('facet', 'service_categories'); ?>
				<input type='search' class="search-input" placeholder="ჩაწერეთ სერვისი" />
				<button type='submit' class='search-submit'><img src='<?php echo Prevencia\the_asset('/img/search-icon.png'); ?>' /></button>
			</form>
	</div>

	<div class="offers-carousel">
		<div class="container">
			<p>სერვისები კატეგორიის მიხედვით</p>
			</div>
			<br/>
			<br/>
			<div class='category-slider'>
				<div class="slider-item">
				<div>
				<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				  <div>სახელმწიფო
სერვისები</div>
				</div>
				<div class="slider-item">
				<div>
				<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				  <div>სახელმწიფო
სერვისები</div>
				</div>
				<div class="slider-item">
				<div>
				<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				  <div>სახელმწიფო
სერვისები</div>
				</div>
				<div class="slider-item">
				<div>
				<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				  <div>სახელმწიფო
სერვისები</div>
				</div>
				<div class="slider-item">
				<div>
				<img src='<?php echo Prevencia\the_asset('/img/government-services.png'); ?>' />
				</div>
				  <div>სახელმწიფო
სერვისები</div>
				</div>
			</div>
	
	</div>

	<div class="container">
		<?php echo facetwp_display('template', 'services'); ?>

	<?php endif; ?>
	<a href="<?php echo get_post_type_archive_link('service'); ?>" class="light-btn">ყველას ნახვა</a>
	</div>
</div>