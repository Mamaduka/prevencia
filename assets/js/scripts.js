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
        appendDots: $('.offers-carousel .container'),
        slidesToShow: 4,
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



    // chart 
    function initChart(numbers, dates, recovered, deaths) {
        
        console.log(recovered);
            // console.log(value.match('-(.*)-')[1]);
      
            
        

        var config = {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'დაფიქსირებული',
                    backgroundColor: '#F79403',
                    borderColor: '#CCCCCC',
                    pointBorderColor:'#F79403',
                    data: numbers,
                    fill: false
                },
                {
                    label: 'გამოჯანმრთელებული',
                    backgroundColor: '#0AC918',
                    borderColor: '#CCCCCC',
                    pointBorderColor:'#0AC918',
                    data: recovered,
                    fill: false
                },
                {
                    label: 'გარდაცვლილი',
                    backgroundColor: '#E84F4F',
                    borderColor: '#CCCCCC',
                    pointBorderColor:'#E84F4F',
                    data: deaths,
                    fill: false
                }
            ]
            },
            options: {
                responsive: true,
                defaultFontFamily: 'helvetica-regular',
                title: {
                    display: false,
                    text: ''
                },
                legend: {
                    display: false
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    x: {
                        display: true,
                    },
                    y: {
                        display: true,
                    }
                }
            }
        };


        window.onload = function () {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
        };
    }

    var numbers = [];
    var dates = [];
    var recoveredNum = [];
    var deathNum = [];

    function slicedVal (value) {
        return value.slice(34);
    }

    var months = ['იან', 'თებ', 'მარ', 'აპრ', 'მაი', 'ივნ', 'ივლ', 'აგვ', 'სექ', 'ოქტ', 'ნოე', 'დეკ']

    function dateNormalized (value) {
            const monthIndex = value.substr(5).charAt(0);

            return value.split('-').pop() + ' ' + months[monthIndex - 1] ;
    }


    fetch("https://pomber.github.io/covid19/timeseries.json")
        .then(response => response.json())
        .then(data => {
            data["Georgia"].forEach(({ date, confirmed, recovered, deaths }) => {
                // console.log(`${date} active cases: ${confirmed - recovered - deaths}`);
                deathNum.push(deaths);
                dateNormalized(date);
                dates.push(dateNormalized(date));
                numbers.push(confirmed);
                recoveredNum.push(recovered);
            });
        }).then(() => initChart(slicedVal(numbers), slicedVal(dates), slicedVal(recoveredNum), slicedVal(deathNum)));

});
