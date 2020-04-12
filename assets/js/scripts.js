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

	$(".add-service-button").click(function () {
		$('html, body').animate({
			scrollTop: $("div.sercive-form").offset().top
		}, 700);
	});

	$(".hf-form div.fake-input").click(function () {
		$("#logo").click();
	});


	if (document.getElementById('logo')) {
		document.getElementById('logo').addEventListener('change', function (ev) {
			$('.uploaded').text('თქვენი ფაილი აიტვირთა')
		});
	}

	$('a.b-link').click(function () {
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

	if (window.innerWidth < 768) {
		$(".offers .offer-item .description").after("<button class='btn btn-link show-all' style='padding-left: 0;'>წაიკითხე სრულად...</button>");

		$('button.show-all').click(function () {
			var self = $(this);
			self.closest('div').find('.description span').slideDown();
			$(self).hide();
		});
	}


	jQuery('.category-slider').slick({
		arrows: false,
		dots: true,
		appendDots: jQuery( '.offers-carousel .container' ),
		slidesToShow: 4,
		slidesToScroll: 4,
		infinite: true,
	});


	$('#toList').click(function () {
		$('#archive-grid').addClass('list-view');
		$(this).addClass('active');
		$('#toGrid').removeClass('active');
	});

	$('#toGrid').click(function () {
		$('#archive-grid').removeClass('list-view');
		$(this).addClass('active');
		$('#toList').removeClass('active');
	});


	$('#statistics-tabs li a:not(:first)').addClass('inactive');
	$('.tab-item').hide();
	$('.tab-item:first').show();

	$('#statistics-tabs li a').click(function () {
		var t = $(this).attr('id');
		if ($(this).hasClass('inactive')) { //this is the start of our condition 
			$('#statistics-tabs li a').addClass('inactive');
			$(this).removeClass('inactive');

			$('.tab-item').hide();
			$('#' + t + 'C').fadeIn('fast');
		}
	});

});
