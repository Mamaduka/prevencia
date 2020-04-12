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
				

				<div class="title-item">
							დაფიქსირებული შემთხვევა <span><?php echo Prevencia\get_stat('dadasturebuli'); ?> </span>
						</div>
						<ul id="statistics-tabs">
							<li><a id="tab1">მონაცემები</a></li>
							<li><a id="tab2">სტატისტიკა</a></li>
						</ul>
					<div id="tab1C" class="tab-item">
						<div class="row">
							<div class="item col-md-6">
								<img src='<?php echo Prevencia\the_asset('/img/recovered.png'); ?>' alt='recovered' />
								<p class='subtitle'>გამოჯანმრთელებული</p>
								<div class="count"><?php echo Prevencia\get_stat('gamojanmrtelebuli'); ?></div>
							</div>

							<div class="item col-md-6">
								<img src='<?php echo Prevencia\the_asset('/img/dead.png'); ?>' alt='dead' />
								<p class='subtitle'>გარდაცვლილი</p>
								<div class="count"><?php echo Prevencia\get_stat('gardaicvlili'); ?></div>
							</div>

							<div class="item col-md-6">
								<img src='<?php echo Prevencia\the_asset('/img/stationary.png'); ?>' alt='stationary' />
								<p class='subtitle'>სტაციონარში მყოფი</p>
								<div class="count"><?php echo Prevencia\get_stat('statsionari'); ?></div>
							</div>

							<div class="item col-md-6">
								<img src='<?php echo Prevencia\the_asset('/img/quarantined.png'); ?>' alt='quarantined' />
								<p class='subtitle'>კარანტინის რეჟიმში</p>
								<div class="count"><?php echo Prevencia\get_stat('karantini'); ?></div>
							</div>
							<hr />

							<div class="item col-md-12">
								<p class='subtitle'>ბოლოს განახლებული</p>
								<div class="date"><?php echo get_the_modified_date('G:i სთ / j F'); ?><span class="stopcov"><a href='https://stopcov.ge/' target="_blank">წყარო: stopcov.ge</a></div>
							</div>
						</div>

					</div>
					<div id="tab2C" class="tab-item" style="padding:46px 20px">
						<canvas id="canvas"  width="500" height="400"></canvas>
					</div>
				
			</div>
		</div>

	</div>
</div>