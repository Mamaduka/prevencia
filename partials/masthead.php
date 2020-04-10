<div class="container">
	<div class='header'>
		<div class='d-flex align-items-center'>
		<div class='logo'>
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo Prevencia\the_asset('/img/logo.png'); ?>" alt='logo' />
			</a>
		</div>
		<div>
			<ul class="menu">
				<li><a href="<?php echo home_url('#offers'); ?>" class='offers-link'>დისტანციური სერვისები</a></li>
				<li><a href="<?php echo home_url('#fake-news'); ?>" class='fakenews-link'>ყალბი ამბები</a></li>
				<li><a href="<?php echo home_url('#FAQ'); ?>" class='recommendations-link'>რეკომენდაციები</a></li>
				<li><a href="<?php echo home_url('#service-form'); ?>" class='about-link'>ჩვებ შესახებ</a></li>
			</ul>
		</div>
		</div>
	

		<div>
		<a class='add-service-button' href="<?php echo home_url('#service-form'); ?>" class='contact-link'>სერვისის დამატება</a>
		<a href="https://www.facebook.com/groups/prevencia.ge" target="_blank"><img src="<?php echo Prevencia\the_asset('/img/facebook.png'); ?>" alt="facebook" /></a>
		</div>
	</div>

	<div>
		<!-- Navigation -->
		<div class="b-nav">
			<li><a class="b-link main-link" href="#">მთავარი</a></li>
			<li><a class="b-link offers-link" href="#">დისტანციური სერვისები</a>
			</li>
			<li><a class="b-link recommendations-link" href="#">რეკომენდაციები</a></li>
			<li><a class="b-link fakenews-link" href="#">ყალბი ამბები</a></li>
			<li><a class="b-link contact-link" href="#">დაამატე სერვისი</a></li>
			<li>
				<a style="margin-left: 30px;" href="https://www.facebook.com/groups/prevencia.ge"  class="main-link" target="_blank" rel="noopener noreferrer">
					<img src="<?php echo Prevencia\the_asset('/img/facebook.png'); ?>" alt="facebook" />
				</a>
			</li>
		</div>

		<!-- Burger-Icon -->
		<div class="b-container">
			<div class="b-menu">
				<div class="b-bun b-bun--top"></div>
				<div class="b-bun b-bun--mid"></div>
				<div class="b-bun b-bun--bottom"></div>
			</div>

		</div>
	</div>
</div>
