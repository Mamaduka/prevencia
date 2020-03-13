$(function () {
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



    document.getElementById('logo').onchange = function (event) {
        var fileList = event.target.files;
        console.log(fileList);
        //TODO do something with fileList.  
    }

    console.log($('#services')[0].value);

    $("#serviceForm").validate({
        submitHandler: function (form, event) {

            event.preventDefault();

            // let myFile = document.getElementById('logo').files[0];
            let companyname = $('#companyname').value;

            let name = $('#name').value;
            let lastname = $('#lastname').value;
            let email = $('#email').value;

            // let duration = document.querySelector('.tdrive-in__carname').innerText;
            let description = $('#description').value;
            let category = $('#category').value;
            let forwho = $('#services')[0].value;

            let number = document.getElementById('number').value;

            // var formData = new FormData();
            // formData.append('image', document.getElementById('logo').files[0]);
            // console.log(formData.append('image', document.getElementById('logo').files[0]));
            // console.log(formData);



            fetch(
                "https://api.airtable.com/v0/app8wWh1RgLTNSjXX/Edit%20schedule?api_key=keySocayYUzW2pt8E",
                {
                    method: "post",
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify({
                        fields: {
                            "სახელი": 'sandro',
                            "ელ.ფოსტა": 'gadas',
                            "გვარი": 'sdada',
                            "ტელ ნომერი": 'dsadasda',
                            "სერვისის ხანგრძლივობა": 'adsada',
                            "სერვისის აღწერილობა": 'sdaasdas',
                            "სერვისის კატეგორია": 'dasdasd',
                            "ვისთვის": 'dsadasdas'
                        }
                    })
                })
                .then((response) => {
                    if (response) {
                        ga('send', 'event', 'Service Form', 'Success', 'Success');
                        document.querySelector('.tdrive__success').innerHTML = '';
                    }
                });
        }
    });

    (function () {
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
    })();

});