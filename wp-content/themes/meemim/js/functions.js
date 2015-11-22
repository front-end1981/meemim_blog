$(function ( ) {

    $(window).mousemove(function( event ) {
        var targetTop = $('.form-inline').offset().top,
            footer = $('footer'),
            footerHeight = footer.height();

        if ( $('body').hasClass('home') ) {
            if ( event.pageY > targetTop && !footer.hasClass('animation-top') ) {
                footer.removeClass('animation-bottom');
                footer.addClass('animation-top');
                footer.stop(true, false).animate( {'top': 0}, 500 );
            }
            if ( event.pageY < targetTop && !footer.hasClass('animation-bottom') ) {
                footer.removeClass('animation-top');
                footer.addClass('animation-bottom');
                footer.stop(true, false).animate( {'top': footerHeight - 34}, 500);
            }
        }

    });

    $('.casuta').hover(
        function () {
            if ( !$(this).hasClass('selected') ) {
                $(this).removeClass('selected-none');
                $(this).removeClass('over');
                $(this).addClass('hover');
            }

        },
        function () {
            if ( !$(this).hasClass('selected') ) {
                $(this).addClass('selected-none');
                $(this).removeClass('hover');
                $(this).addClass('over');
            }
        }
    );

    $('.casuta').on('click', function () {
        $('.casuta').removeClass('selected');
        $('.casuta').not($(this)).addClass('selected-none');
        $(this).removeClass('selected-none');
        $(this).addClass('selected');
    });



    function ToBottom() {
        var browserHeight = $(window).height(),
            footerOuterHeight = $('footer').outerHeight(true),
            mainHeightMarginPaddingBorderHomePage = $('.wrapper.home-page').outerHeight(true) - $('.wrapper.home-page').height(),
            mainHeightMarginPaddingBorder = $('.wrapper').outerHeight(true) - $('.wrapper').height();

        if ($('footer').hasClass('home-page')) {
            $('footer').css({top:footerOuterHeight - 35});
            $('.wrapper.home-page').css({
                'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorderHomePage - $('header').height()
            });
        } else {
            if ( $('section') ) {
                $('.wrapper').css({
                    'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorder - $('header').height()  - $('header').height()
                });
            }
        }
    };
    ToBottom();
    $(window).resize(function (e) {
        ToBottom();
    });

    $('.the_champ_sharing_container').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.the_champ_sharing_container').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.the_champ_sharing_container').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.the_champ_sharing_container').find('.theChampGoogleSvg').addClass('icon-gplus');

    $('.social-blog-single .icon-export').on('click', function (e) {
        e.preventDefault();
        $('.the_champ_sharing_container').slideToggle('slow');
    });


    $('.blog-index .share').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.blog-index .share').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.blog-index .share').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.blog-index .share').find('.theChampGoogleSvg').addClass('icon-gplus');


    $('.blog-index .share').on('click', 'button', function () {
        var self = $(this);

        $(this).hide();
        $(this).parent().find('.social').fadeIn();
    });


                /* Black and White image */
    $('.bwWrapper').BlackAndWhite({
        hoverEffect: true,
        invertHoverEffect: true
    });

    /* Masonry Cascading grid layout library */

    if ($('section').hasClass('blog-index')) {
        $('.grid').masonry({
            itemSelector: '.grid-item',
//            isFitWidth: true,
            "gutter": 10,
            columnWidth: 50
        });
    }

//    var $container = $('.group');
//$container.imagesLoaded(function(){
//    $container.masonry({
//        itemSelector: '.grid-item',
//        isFitWidth: true,
//        "gutter": 10,
//        columnWidth: 50
//    });
//    $('.group').imagefill();
//});



    /* Courusel */

    $('.multiple-items').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll:1,
        centerMode: true,
        variableWidth: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1020,
                settings: {
                    centerPadding: '260px',
                    centerMode: true,
                    variableWidth: true,
                    adaptiveHeight: true,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true
                }
            }
//            {
//                breakpoint: 600,
//                settings: {
//                    centerMode: true,
//                    variableWidth: true,
//                    adaptiveHeight: true,
//                    slidesToShow: 2,
//                    slidesToScroll: 1
//                }
//            },
//            {
//                breakpoint: 480,
//                settings: {
//                    centerMode: true,
//                    variableWidth: true,
//                    adaptiveHeight: true,
//                    slidesToShow: 1,
//                    slidesToScroll: 1
//                }
//            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /* Popover */

    $('[rel="popover1"]').popover({
        trigger: 'manual',
        container: '.meemim_and_me',
        html: true,
        placement: function (context, source) {
            var widthScreen = {'360':360, '800':800};

            if (window.innerWidth <= widthScreen['800']) {
                return "right";
            }

            return $(source).attr('data-placement');
        },
        content: function () {
            return $('.additional_block').html();
        }
    }).click(function(e) {
        e.preventDefault();
    });


    $('[rel="popover1"]').on('click', function (e) {
        var widthScreen = {'360': 360, '480': 480};
        var currSlider = $(".multiple-items[data-employees='" + $(this).data('employees') +"']");

        $('[rel="popover1"]').not(this).popover('hide');

        if (window.innerWidth <= widthScreen['360'] || window.innerWidth <= widthScreen['480']) {
            $(this).popover('hide');
        } else {
            $(this).popover('show');
        }


        $(".multiple-items[data-employees]").not(currSlider).hide();
        $('.slick-track').css({'transform':'translate3d(-1339px, 0px, 0px)'});
        currSlider.fadeIn(500);
    });

});


        /* Slider */

sliderNumberObj = {
    increments :[10,100,500,1000,5000,10000,100000,1000000,10000000,100000000, 1000000000,10000000000],
    findNearest:
        function(includeLeft, includeRight, value) {
            var nearest = null;
            var diff = null;
            for (var i = 0; i < sliderNumberObj.increments.length; i++) {
                if ((includeLeft && sliderNumberObj.increments[i] <= value) || (includeRight && sliderNumberObj.increments[i] >= value)) {
                    var newDiff = Math.abs(value - sliderNumberObj.increments[i]);
                    if (diff == null || newDiff < diff) {
                        nearest = sliderNumberObj.increments[i];
                        diff = newDiff;
                    }
                }
            }
            return nearest;
        },
    roundingNumbers: function (number) {
        var value = sliderNumberObj.findNearest(includeLeft=true, includeRight=false, number);
        var result = null;

        switch (value) {
            case 1000:
            case 5000:
                result = (number / 1000).toFixed(1) + 'K';
                break;
            case 10000:
            case 100000:
                result = (number / 1000).toFixed() + 'K';
                break;
            case 1000000:
                result = (number / 1000000).toFixed(1) + 'M';
                break;
            case 10000000:
            case 100000000:
                result = (number / 1000000).toFixed() + 'M';
                break;
            case 1000000000:
                result = (number / 1000000000).toFixed(1) + 'B';
                break;
            case 10000000000:
                result = (number / 1000000000).toFixed() + 'B';
                break;
            default :
                result = number;
                break;
        }
        return result;
    },
    updateCircles:
        function (value) {
            $('.sounds_good .circles .numeric').each(function (e) {
                var min = parseInt($(this).data('min')),
                    circles = $(this).parent().attr('id');

                if( circles == 'circle1' ) {
                    $(this).text( sliderNumberObj.roundingNumbers( (value) / 100 * 10 ) );
                }
                else if( circles == 'circle2' ) {
                    $(this).text( sliderNumberObj.roundingNumbers( (value * 6) / 10) );
                }
                else if ( circles == 'circle3' ) {
                    $(this).text( sliderNumberObj.roundingNumbers( (value) * 2500) );
                }
                else if ( circles == 'circle4' ) {
                    $(this).text( sliderNumberObj.roundingNumbers( (value) * 150) );
                }
                else if ( circles == 'circle5' ) {
                    $(this).text( sliderNumberObj.roundingNumbers( (value) * 400) );
                }
                else {
                    $(this).text( min + ui.value);
                }
            })
        }
};

sliderNumberObj.updateCircles(10);

var blockResult = $('.result');
$(".ui-slider-handle").on('moues', function() {
    console.log("OK");
});

$("#slider").slider({
    value: 0,
    min:1,
    max:10000,
    step:146,
    start: function (event, ui) {
        var images = $('.sounds_good .circles img');

        images.each(function(index) {
            if ( $(this).hasClass('paused')) {
                $(this).removeClass('paused')
            }
            $(this).addClass('rotate' + (index + 1));
        });
    },
    stop: function (event, ui) {
        var currIndex = (ui.value / 146),
            result = 10;
        var images = $('.sounds_good .block_circles img');

        images.each(function(index) {
            $(this).addClass('paused');
        });

        for (var i=1; i < currIndex; i++) {
            switch(true) {
                case ( i > 0 && i < 9 ):
                    result += 5;
                    break;
                case (i > 8 && i < 14):
                    result += 10;
                    break;
                case (i > 13 && i < 30):
                    result += 25;
                    break;
                case (i > 29 && i < 35):
                    result += 100;
                    break;
                case (i > 34 && i < 43):
                    result += 250;
                    break;
                case (i > 42 && i < 47):
                    result += 500;
                    break;
                case (i > 46 && i < 52):
                    result += 1000;
                    break;
                case (i > 51 && i < 58):
                    result += 2500;
                    break;
                case (i > 57 && i < 63):
                    result += 5000;
                    break;
                case (i > 62 && i < 68):
                    result += 10000;
                    break;
            }
        }

        $('.result').text(result);
        $('.ui-slider-float .ui-slider-tip').text(result + ' employees');
        sliderNumberObj.updateCircles(result);
    },
    slide: function (event, ui) {
        var prev = $(this).slider('value'),
            curr = ui.value,
            val = parseInt(blockResult.text()),
            result;

        function setStep (step) {
            if (prev < curr) {
                result = parseInt(blockResult.text()) + step;
            } else {
                result = parseInt(blockResult.text()) - step;
            }
        }

        if (prev < curr) {
            val += 1;
        } else {
            val -= 1;
        }

        switch(true) {
            case ( val > 10 && val < 50 ):
                setStep(5);
                break;
            case (val > 50 && val < 100):
                setStep(10);
                break;
            case (val > 100 && val < 500):
                setStep(25);
                break;
            case (val > 500 && val < 1000):
                setStep(100);
                break;
            case (val > 1000 && val < 3000):
                setStep(250);
                break;
            case (val > 3000 && val < 5000):
                setStep(500);
                break;
            case (val > 5000 && val < 10000):
                setStep(1000);
                break;
            case (val > 10000 && val < 25000):

                setStep(2500);
                break;
            case (val > 25000 && val < 50000):
                setStep(5000);
                break;
            case (val > 50000 && val < 100000):
                setStep(10000);
                break;
        }

        if(!!!result && prev < curr) {
            result = 100000;
        }
        if(!!!result && prev > curr) {
            result = 10;
        }

        if (curr == 1) {
            result = 10;
        } else if (curr == 9929) {
            result = 100000;
        }

        $('.result').text(result);
        $('.ui-slider-float .ui-slider-tip').text(result + ' employees');
        sliderNumberObj.updateCircles(result);
    }
})

