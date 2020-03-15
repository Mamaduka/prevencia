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


    if($( "#serviceForm" ).length ){
        $("#serviceForm").validate({
            submitHandler: function (form, event) {

                event.preventDefault();

                // let myFile = document.getElementById('logo').files[0];
                let companyname = $('#companyname')[0].value;
                let name = $('#name')[0].value;
                let lastname = $('#lastname')[0].value;
                let email = $('#email')[0].value;
                let description = $('#description')[0].value;
                let category = $('#category')[0].value;
                let forwho = $('#services')[0].value;
                let number = $('#phone')[0].value;
                let servicename = $('#servicename')[0].value;
                let companysite = $('#companysite')[0].value;
                let serviceduration = $('#serviceduration')[0].value;

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
                                "სახელი": name ,
                                "ელ.ფოსტა": email,
                                "გვარი": lastname,
                                "ტელ ნომერი": number,
                                "კომპანიის სახელი": companyname,
                                "სერვისის ხანგრძლივობა": serviceduration,
                                "სერვისის აღწერილობა": description,
                                "სერვისის დასახელება": servicename,
                                "კომპანიის ვებსაიტი": companysite,
                                "სერვისის კატეგორია": category,
                                "ვისთვის": forwho,

                            }
                        })
                    })
                    .then((response) => {
                        if (response) {
                            $('#serviceForm').hide();
                            $('#successBlock').show();
                        }
                    });
            }
        });

    }




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


});
