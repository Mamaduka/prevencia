jQuery(function ($) {

    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach( ( element ) => {
        element.addEventListener( 'click', () => {
            if (element.classList.contains('open')) {
                element.classList.remove('open');
            } else {
                accordionItems.forEach( other => other.classList.remove('open') );
                element.classList.add('open');
            }
        } );
    } )

    $(".add-item").click(function () {
        $('html, body').animate({
            scrollTop: $("div.service-form").offset().top
        }, 700);
    });


    // $(".recommendations-link").click(function () {
    //     $('html, body').animate({
    //         scrollTop: $("div.recommendations").offset().top
    //     }, 700);
    // });

    // $(".add-service-button").click(function () {
    //     $('html, body').animate({
    //         scrollTop: $("div.service-form").offset().top
    //     }, 700);
    // });

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



    /* In the JS file */
$('.slider').slick({
    arrows: false
  })
  
  $('.slick-prev').click(function(){
    $('.category-slider').slick('slickPrev');
  })
  
  $('.slick-next').click(function(){
    $('.category-slider').slick('slickNext');
  })

    $('.category-slider').slick({
        arrows: false,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow:"<img class='a-left control-c prev slick-prev' src='https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Angle_left_font_awesome.svg/1200px-Angle_left_font_awesome.svg.png'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Angle_right_font_awesome.svg/1200px-Angle_right_font_awesome.svg.png'>",
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
        }
        ]
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

    $('#archive-grid').on('click', '.expand', function (event) {
        event.preventDefault();
        const parent = $(this).parents('.archive-item');
        const siblings = parent.siblings();

        parent
            .removeClass('col-md-6')
            .addClass('col')
            .addClass('expanded');

        siblings.hide();
        $('.toolbar').hide();
        $('.facetwp-pager').hide();
    });

    $('#archive-grid').on('click', '.go-back button', function (event) {
        event.preventDefault();
        const parent = $(this).parents('.archive-item');
        const siblings = parent.siblings();

        if (!parent.hasClass('expanded')) {
            return;
        }

        parent
            .removeClass('col')
            .removeClass('expanded')
            .addClass('col-md-6');

        siblings.show();
        $('.toolbar').show();
        $('.facetwp-pager').show();
    });

    
});
