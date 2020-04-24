$(document).ready(function () {

    $('[type="tel"]').mask("+7 (999) 99-99-999");

    function summCount() {
        var summ = 0;
        $('.price-value').each(function (i, item) {
            if (!$(this).parent().hasClass('disabled')) {
                summ += Number($(this).html());
            }
        })
        $('.submit-price-value').html(summ);
    }


    function rowCount(elem) {
        $(elem).addClass('counting');
        $(elem).parent().addClass('counting-parent');
        var price = $('.counting .price').attr('default-price');
        var count = $('.counting-parent .requisite-number').val();
        console.log('price= '+price+' count= '+count)
        $('.counting .price-value').html(price * count);
        $('.counting').removeClass('counting');
        $('.counting-parent').removeClass('counting-parent');
    }


    setTimeout(function () {
        $('.feedback-slider').owlCarousel({
            items: 1,
            nav: true
        })
    }, 2000)

    $('.games-list-slider').owlCarousel({
        responsive:{
            0:{
                items:2,
                stagePadding: 20,
            },
            767:{
                items:3,
                stagePadding: 80,
            },
            1200:{
                items:4,
                stagePadding: 100,
            },
            1920:{
                stagePadding: 180
            }
        },
        loop: true,
        nav: true
    })

    $(".age-range").ionRangeSlider({
        grid_num: 3,
        hide_min_max: true,
        hide_from_to: true,
        values: [
            'Дети', 'Молодежь', 'В самом рассвете сил', 'Oldies but goodies'
        ],
        onChange: function () {
            var img = 1;

            if ($('.age-range').val() == 'Дети') {
                img = 1;
            }

            else if ($('.age-range').val() == 'Молодежь') {
                img = 2;
            }

            else if ($('.age-range').val() == 'В самом рассвете сил') {
                img = 3;
            }

            else if ($('.age-range').val() == 'Oldies but goodies') {
                img = 4;
            }

            console.log(img + ' age:' + $('.age-val').val());

            $('.age-val').html($('.age-range').val());
            $('.age-img').css('background-image', 'url("/local/templates/sopdu/img/every-party/age/'+ img +'.jpg")');
        }
    })

    $(".flat-range").ionRangeSlider({
        grid_num: 3,
        hide_min_max: true,
        hide_from_to: true,
        values: [
            'Квартира', 'Офис', 'Кафе / ресторан', 'Большой зал / лофт'
        ],
        onChange: function () {

            var img = 1;

            if ($('.flat-range').val() == 'Квартира') {
                img = 1;
            }

            else if ($('.flat-range').val() == 'Офис') {
                img = 2;
            }

            else if ($('.flat-range').val() == 'Кафе / ресторан') {
                img = 3;
            }

            else if ($('.flat-range').val() == 'Большой зал / лофт') {
                img = 4;
            }

            $('.flat-img').css('background-image', 'url("/local/templates/sopdu/img/every-party/flat/'+ img +'.jpg")');


            $('.flat-val').html($('.flat-range').val());
        }
    })

    $(".level-range").ionRangeSlider({
        grid_num: 3,
        hide_min_max: true,
        hide_from_to: true,
        values: [
            'Не знакомы с игрой', 'Любители', 'Часто играют', 'Профи'
        ],
        onChange: function () {
            var img = 1;

            if ($('.level-range').val() == 'Не знакомы с игрой') {
                img = 1;
            }

            else if ($('.level-range').val() == 'Любители') {
                img = 2;
            }

            else if ($('.level-range').val() == 'Часто играют') {
                img = 3;
            }

            else if ($('.level-range').val() == 'Профи') {
                img = 4;
            }

            $('.level-img').css('background-image', 'url("/local/templates/sopdu/img/every-party/level/'+ img +'.jpg")');

            $('.level-val').html($('.level-range').val());
        }
    })

    $(".players-range").ionRangeSlider({
        grid_num: 3,
        hide_min_max: true,
        hide_from_to: true,
        values: [
            '< 10 чел', '10-20 чел', '20-50 чел', '50+ чел'
        ],
        onChange: function () {
            var img = 1;

            if ($('.players-range').val() == '< 10 чел') {
                img = 1;
            }

            else if ($('.players-range').val() == '10-20 чел') {
                img = 2;
            }

            else if ($('.players-range').val() == '20-50 чел') {
                img = 3;
            }

            else if ($('.players-range').val() == '50+ чел') {
                img = 4;
            }

            $('.players-img').css('background-image', 'url("/local/templates/sopdu/img/every-party/players/'+ img +'.jpg")');

            $('.players-val').html($('.players-range').val());
        }
    })











    $('.spoiler').click(function () {
        $(this).addClass('active');
        $(this).toggleClass('open')
        $('.spoiler.active .spoiler-answer').slideToggle();
        $(this).removeClass('active');
    });

    $('.question-btn').click(function () {
        var elem = $(this).attr('data-questions');
        $('.faq-content').hide();
        $(elem).show();
        $(elem).addClass('active')
    });









    $("a.nav-link[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    });


    if (window.pageYOffset ? window.pageYOffset : document.body.scrollTop > 200) {
        $('.navigation').addClass('green-bg');
    }

    $(document).scroll(function () {
        if (window.pageYOffset ? window.pageYOffset : document.body.scrollTop > 200) {
            $('.navigation').addClass('green-bg');
        }

        else{
            $('.green-bg').removeClass('green-bg');
        }

        $('.navbar-collapse').collapse('hide');
    });





    $('.checkbox').change(function () {
        $(this).parent().parent().parent().addClass('changing');
        $('.changing .price').toggleClass('disabled');
        $(this).parent().parent().parent().removeClass('changing');
    });




    $('.guess-img').click(function () {
        var myAudio = new Audio;
        myAudio.src = "melody.mp3";
        myAudio.play();
    });




    $('.td-4.price').each(function (i, item) {
        rowCount(item);
    });

    summCount();

    $('.requisite-number, .on-off .checkbox').change(function () {
        $(this).parent().parent().addClass('row-count');
        rowCount($('.row-count .td-4'));
        $('.row-count').removeClass('row-count');
        summCount();
    })





})

