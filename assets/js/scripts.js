jQuery(function ($) {
	$("#accordion").accordion({
		active: 999,
		collapsible: true
	});

	$(".add-item").click(function () {
		$('html, body').animate({
			scrollTop: $("div.sercive-form").offset().top
		}, 700);
	});

	$(".main-link").click(function () {
		$('html, body').animate({
			scrollTop: $("div.main-block").offset().top
		}, 700);
	});


	$(".offers-link").click(function () {
		$('html, body').animate({
			scrollTop: $("div.offers").offset().top
		}, 700);
	});


	$(".fakenews-link").click(function () {
		$('html, body').animate({
			scrollTop: $("div.fake-news").offset().top
		}, 700);
	});

	$(".recommendations-link").click(function () {
		$('html, body').animate({
			scrollTop: $("div.FAQ").offset().top
		}, 700);
	});

	$(".contact-link").click(function () {
		$('html, body').animate({
			scrollTop: $("div.sercive-form").offset().top
		}, 700);
	});

	$(".hf-form div.fake-input").click(function () {
		$("#logo").click();
	});


	if(document.getElementById('logo')){
		document.getElementById('logo').addEventListener('change', function(ev){
			$('.uploaded').text('თქვენი ფაილი აიტვირთა')
		});
	}

	$('a.b-link').click(function(){
		$('.b-nav').removeClass('open');
		$('.b-container').removeClass('open');
		$('body').removeClass('open');
	})

	var body = document.body;
	var burgerMenu = document.getElementsByClassName('b-menu')[0];
	var burgerContain = document.getElementsByClassName('b-container')[0];
	var burgerNav = document.getElementsByClassName('b-nav')[0];

	burgerMenu.addEventListener('click', function toggleClasses() {
		[body, burgerContain, burgerNav].forEach(function (el) {

			if (!el.classList.contains('open')) {
				el.classList.add('open');
			} else {
				el.classList.remove('open');
				setTimeout(() => {

				}, 1000)
			}
		});
	}, false);

	if ( window.innerWidth < 768 ) {
		$(".offers .offer-item .description").after("<button class='btn btn-link show-all' style='padding-left: 0;'>წაიკითხე სრულად...</button>");
	
		$('button.show-all').click(function () {
			$(this).parent().find('.description').removeClass('line-clamp');
		});
	}
});
