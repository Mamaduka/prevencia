jQuery(function (e) { e("#accordion").accordion({ active: 999, collapsible: !0 }), e(".add-item").click(function () { e("html, body").animate({ scrollTop: e("div.sercive-form").offset().top }, 700) }), e(".main-link").click(function () { e("html, body").animate({ scrollTop: e("div.main-block").offset().top }, 700) }), e(".offers-link").click(function () { e("html, body").animate({ scrollTop: e("div.offers").offset().top }, 700) }), e(".fakenews-link").click(function () { e("html, body").animate({ scrollTop: e("div.fake-news").offset().top }, 700) }), e(".recommendations-link").click(function () { e("html, body").animate({ scrollTop: e("div.FAQ").offset().top }, 700) }), e(".add-service-button").click(function () { e("html, body").animate({ scrollTop: e("div.sercive-form").offset().top }, 700) }), e(".hf-form div.fake-input").click(function () { e("#logo").click() }), document.getElementById("logo") && document.getElementById("logo").addEventListener("change", function (o) { e(".uploaded").text("თქვენი ფაილი აიტვირთა") }), e("a.b-link").click(function () { e(".b-nav").removeClass("open"), e(".b-container").removeClass("open"), e("body").removeClass("open") }); var o = document.body, n = document.getElementsByClassName("b-menu")[0], t = document.getElementsByClassName("b-container")[0], i = document.getElementsByClassName("b-nav")[0]; n.addEventListener("click", function () { [o, t, i].forEach(function (e) { e.classList.contains("open") ? (e.classList.remove("open"), setTimeout(() => { }, 1e3)) : e.classList.add("open") }) }, !1), window.innerWidth < 768 && (e(".offers .offer-item .description").after("<button class='btn btn-link show-all' style='padding-left: 0;'>წაიკითხე სრულად...</button>"), e("button.show-all").click(function () { var o = e(this); o.closest("div").find(".description span").slideDown(), e(o).hide() })), e(".category-slider").slick({ arrows: !1, dots: !0, slidesToShow: 4, centerMode: !0, infinite: !0, centerPadding: 200 }) });
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


	$('.category-slider').slick({
		arrows: false,
		dots: true,
		appendDots: $( '.offers-carousel .container' ),
		slidesToShow:4,
		slidesToScroll: 4,
		infinite: true
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
