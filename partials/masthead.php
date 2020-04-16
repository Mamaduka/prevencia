<header id='sticky'>
<div class="container">
	<div class='header'>
		<div class='d-flex align-items-center'>
		<div class='logo'>
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo Prevencia\the_asset('/img/logo.png'); ?>" alt="logo" width="237" height="43" />
			</a>
		</div>
		<div>
			<ul class="menu">
				<li><a href="<?php echo home_url('/remote-services'); ?>">დისტანციური სერვისები</a></li>
				<li><a href="<?php echo home_url('/fake-news'); ?>" >ყალბი ამბები</a></li>
				<li><a href="<?php echo home_url('#FAQ'); ?>" class='recommendations-link'>რეკომენდაციები</a></li>
				<li><a href="<?php echo home_url('/about'); ?>" >ჩვენ შესახებ</a></li>
			</ul>
		</div>
		</div>
	

		<div class="header-right">
		<a class='add-service-button' href="<?php echo home_url('#service-form'); ?>" class='contact-link'>სერვისის დამატება</a>
		<a href="https://www.facebook.com/groups/prevencia.ge" target="_blank"><img src="<?php echo Prevencia\the_asset('/img/facebook.png'); ?>" alt="facebook" /></a>
		</div>
	</div>

	<div>
		<!-- Navigation -->
		<div class="b-nav">
			<li><a class="b-link" href="<?php echo home_url('/remote-services'); ?>">დისტანციური სერვისები</a>
			</li>
			<li><a class="b-link recommendations-link" href="#">რეკომენდაციები</a></li>
			<li><a class="b-link" href="<?php echo home_url('/fake-news'); ?>">ყალბი ამბები</a></li>
			<li><a class="b-link" href="<?php echo home_url('/about'); ?>">ჩვენ შესახებ</a></li>
			<li><a class="b-link" href="<?php echo home_url('/terms'); ?>">პირობები</a></li>
			<li>
			<a class='b-link add-service-button' href="#" class='contact-link'>სერვისის დამატება</a>
				<a href="https://www.facebook.com/prevencia.ge" class="main-link" target="_blank" rel="noopener noreferrer">
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

</header>
