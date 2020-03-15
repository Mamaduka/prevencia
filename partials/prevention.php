<?php
$page_id = get_queried_object_id();
?>

<div class='container'>
	<div class="items-container">
		<div class='content'>
			<h3>პრევენციისთვის</h3>
			<p class='subtitle'>ციფრული სოლიდარობის პლატფორმა</p>
			<p>
				მარტივად ერთ სივრცეში მიიღეთ ინფორმაცია საქართველოში არსებული ონლაინ/დისტანციური სერვისების თუ
				პროდუქტების შესახებ.
			</p>
			<br />
			<p>
				პრევენციისთვის, გთხოვთ გაითვალისწინოთ ყველა რეკომენდაცია, გავურთხილდეთ ერთმანეთს, მეტი
				ყურადღებით და პასუხისმგებლობით ერთად ყველაფერი დაძლევადია!
			</p>
		</div>

		<div>
			<div class="statistics">
				<p class="title">შემთხვევები</p>

				<div class="item">
					<p class='subtitle'>დადასტურებული შემთხვევა</p>
					<div class="count"><?php the_field( 'dadasturebuli', $page_id ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>კარანტინის რეჟიმში</p>
					<div class="count"><?php the_field( 'karantini', $page_id ); ?></div>
				</div>

				<div class="item">
					<p class='subtitle'>სტაციონარში მყოფი</p>
					<div class="count"><?php the_field( 'statsionari', $page_id ); ?></div>
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
