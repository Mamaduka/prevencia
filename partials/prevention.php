<div class='container'>
	<div class="items-container">
		<div class='content'>
			<h3>პრევენციისთვის</h3>
			<p class='subtitle'>ციფრული სოლიდარობის პლატფორმა</p>
			<p>
				მარტივად ერთ სივრცეში მიიღეთ ინფორმაცია საქართველოში არსებული ონლაინ/დისტანციური სერვისების თუ
				პროდუქტების შესახებ.
			</p>
		
		</div>

		<div>
			<div class="statistics">
				<div class="d-none">
				<div class="item d-flex">
					<p class='subtitle'>დაფიქსირებული შემთხვევა</p>
					<div class="count"><?php echo Prevencia\get_stat( 'dadasturebuli' ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>მათ შორის გამოჯანმრთელდა</p>
					<div class="count"><?php echo Prevencia\get_stat( 'gamojanmrtelebuli' ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>მათ შორის გარდაიცვალა</p>
					<div class="count"><?php echo Prevencia\get_stat( 'gardaicvlili' ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>კარანტინის რეჟიმში</p>
					<div class="count"><?php echo Prevencia\get_stat( 'karantini' ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>სტაციონარში მყოფი</p>
					<div class="count"><?php echo Prevencia\get_stat( 'statsionari' ); ?></div>
				</div>
				<hr />

				<div class="item">
					<p class='subtitle'>ბოლოს განახლებული</p>
					<div class="date"><?php echo get_the_modified_date( 'G:i / j F'); ?> <span class="stopcov"><a href='https://stopcov.ge/'
								target="_blank">წყარო: stopcov.ge</a></div>
				</div>
				</div>
				
			</div>
		</div>

	</div>
</div>
