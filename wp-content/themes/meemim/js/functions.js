$(function ( ) {

    /* Main page, slide up down footer*/

    $('.wrapper.home-page').css({
        'top': Math.round( $('footer').outerHeight(true) / 2 )
    });

    $(window).mousemove(function( event ) {
        var targetTop = $('.fscf-input-text').offset().top,
            footer = $('footer'),
            footerHeight = footer.height();

        if ( $('body').hasClass('home') ) {
            if ( event.pageY > targetTop && !footer.hasClass('animation-top') ) {
                footer.removeClass('animation-bottom');
                footer.addClass('animation-top');
                //$('.wrapper.home-page').stop(true, false).animate( {'top': 0}, 500 );
                footer.stop(true, false).stop(true, false).animate( {'top': 0}, 500 );
            }
            if ( event.pageY < targetTop && !footer.hasClass('animation-bottom') ) {
                footer.removeClass('animation-top');
                footer.addClass('animation-bottom');
                //$('.wrapper.home-page').stop(true, false).animate( {'top':  Math.round( footerHeight / 2 )}, 500 );
                footer.stop(true, false).stop(true, false).animate( {'top': footerHeight - 34}, 500);
            }
        }
    });

    /* All pages, bottom footer in the page*/

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

        /* Pricing page*/

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

        /* Blog single page */

    $('.the_champ_sharing_container').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.the_champ_sharing_container').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.the_champ_sharing_container').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.the_champ_sharing_container').find('.theChampGoogleSvg').addClass('icon-gplus');

    $('.social-blog-single .icon-export').on('click', function (e) {
        e.preventDefault();
        $('.the_champ_sharing_container').slideToggle('slow');
    });

        /* Blog index page */

    $('.blog-index .share').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.blog-index .share').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.blog-index .share').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.blog-index .share').find('.theChampGoogleSvg').addClass('icon-gplus');


    $('.blog-index .share').on('click', 'button', function () {
        var self = $(this);

        $(this).hide();
        $(this).parent().find('.social').fadeIn();
    });


    /* Courusel */

    $('.multiple-items').each(function () {
        $('#' + $(this).attr('id')).slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll:1,
            centerMode: true,
            variableWidth: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        adaptiveHeight: true
                    }
                }
            ]
        });
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
            //return $('.additional_block').html();
            return $('.additional_block.' + $(this).data('employees') ).html();
        }
    }).click(function(e) {
        e.preventDefault();
    });


    $('[rel="popover1"]').on('click', function (e) {
        var widthScreen = {'360': 360, '480': 480};
        //var currSlider = $(".multiple-items[data-employees='" + $(this).data('employees') +"']");
        var currSlider = $(".responsive[data-employees='" + $(this).data('employees') +"']");

        $('[rel="popover1"]').not(this).popover('hide');

        if (window.innerWidth <= widthScreen['360'] || window.innerWidth <= widthScreen['480']) {
            $(this).popover('hide');
        } else {
            $(this).popover('show');
        }


        //$(".multiple-items[data-employees]").not(currSlider).hide();
        $(".responsive[data-employees]").not(currSlider).hide();
        $('.slick-track').css({'transform':'translate3d(-1339px, 0px, 0px)'});
        currSlider.fadeIn(500);
    });


});


/* Masonry Cascading grid layout library */

//if ($('section').hasClass('blog-index')) {
//    $('.grid').masonry({
//        itemSelector: '.grid-item',
////            isFitWidth: true,
//        "gutter": 10,
//        columnWidth: 50
//    });
//}

/* Black and White image */

    $(window).load(function() {
        $('.bwWrapper').BlackAndWhite({
            hoverEffect: true,
            invertHoverEffect: true,
            webworkerPath : false
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
                    circles = $(this).parent().attr('id'),
                    circles_val  = Math.round( (value) / 100 * 4 );


                if( circles == 'circle1' ) {
                    //$(this).text( sliderNumberObj.roundingNumbers( Math.ceil( (value) / 100 * 10 ) ) );
                    $(this).text( sliderNumberObj.roundingNumbers( Math.round( (value) / 100 * 4 ) ) );
                }
                else if( circles == 'circle2' ) {
                    //$(this).text( sliderNumberObj.roundingNumbers( (value * 6) / 10) );
                    $(this).text( sliderNumberObj.roundingNumbers( Math.round(circles_val * 6) ) );
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
function stepIncrement(currIndex) {
    var result = 10;

    for (var i=1; i < currIndex; i++) {
        switch(true) {
            case ( i > 0 && i < 9 ): //range 10 - 50
                result += 5;
                break;
            case (i > 8 && i < 14): //range 50 - 100
                result += 10;
                break;
            case (i > 13 && i < 30): //range 100 - 500
                result += 25;
                break;
            case (i > 29 && i < 35): //range 500 - 1000
                result += 100;
                break;
            case (i > 34 && i < 43): //range 1000 - 3000
                result += 250;
                break;
            case (i > 42 && i < 47): //range 3000 - 5000
                result += 500;
                break;
            case (i > 46 && i < 52): //range 5000 - 10000
                result += 1000;
                break;
            case (i > 51 && i < 58): //range 10000 - 25000
                result += 2500;
                break;
            case (i > 57 && i < 63): //range 25000 - 50000
                result += 5000;
                break;
            case (i > 62 && i < 68): //range 50000 - 100000
                result += 10000;
                break;
        }
    }
    return result;
}

$("#slider").slider({
    value: 0,
    min: 1,
    max:10000,
    step:145,
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
        var currIndex = (ui.value / 145),
            images = $('.sounds_good .block_circles img'),
            result = stepIncrement(currIndex);

        images.each(function(index) {
            $(this).addClass('paused');
        });

        $('.result').text(result);
        sliderNumberObj.updateCircles(result);
    },
    slide: function (event, ui) {
        var currIndex = (ui.value / 145),
            result = stepIncrement(currIndex);

        $('.result').text(result);
        sliderNumberObj.updateCircles(result);
    }
});






