;jQuery(function ( $ ) {

        //header laptop fadeIn
    setTimeout (function() {
        $('.container-header').find('.img-video img').addClass('js-slide-fade-up').next().addClass('js-slide-fade-up');
    }, 500);

        //Home Page viewportChecker images
    $('.content-section .column2').viewportChecker({
        classToAdd: 'animated-fadeIn',
        offset: 300,
        repeat: true
    });

    $('.share-btn').hover(
        function() {
            var self = $(this);
            console.log(self.parent('.share ').find('.social-blog-single'));
            self.find('span').addClass('hover');
            self.parent('.share').find('.social-blog-single').animate({height:140, top:-140, opacity:1}, 100)
        },
        function() {
            var self = $(this);
            self.parent('.share').find('.social-blog-single').animate({height:0, top:10, opacity:0}, 100,function(){
                self.find('span').removeClass('hover');
            });

        }
    );

    //Home Page

    $('.solutions-lines a').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href').slice(1),
            parentElement = $(this).parents().eq(3);

        parentElement.find('p[class*=square]').hide();
        parentElement.find('img[class*=square]').hide();
        parentElement.find('.' + target).show();

    });

    /* All pages, bottom footer in the page*/

    function ToBottom() {
        var browserHeight = $(window).height(),
            footerOuterHeight = $('footer').outerHeight(true),
            mainHeightMarginPaddingBorderHomePage = $('.wrapper footer').outerHeight(true) - $('.wrapper footer').height(),
            mainHeightMarginPaddingBorder = $('.wrapper').outerHeight(true) - $('.wrapper').height();

        if (!$('.wrapper').hasClass('home-page') ) {
            $('.wrapper').css({
                'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorder - $('header').height()  - $('header').height()
            });
        }
    };

    ToBottom();

    $(window).resize(function (e) {
        //ToBottom();
    });


        /* Blog single page */

    $('.the_champ_sharing_container').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.the_champ_sharing_container').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.the_champ_sharing_container').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.the_champ_sharing_container').find('.theChampGoogleplusSvg').addClass('icon-gplus');

    $('.social-blog-single .icon-export').on('click', function (e) {
        e.preventDefault();
        $('.the_champ_sharing_container').slideToggle('slow');
    });
    
    
        /* Blog index page */

    $('.blog-index .share').find('.theChampFacebookSvg').addClass('icon-facebook');
    $('.blog-index .share').find('.theChampTwitterSvg').addClass('icon-twitter');
    $('.blog-index .share').find('.theChampLinkedinSvg').addClass('icon-linkedin');
    $('.blog-index .share').find('.theChampGoogleSvg').addClass('icon-gplus');


    $('.blog-index .share .share-btn').on('click', function (e) {
        e.preventDefault();
        console.log('OK');
        var self = $(this);

        $(this).hide();
        $(this).next().fadeIn();
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


    /* Contact Us Page */
    $(window).load(function () {
        var el = $('<input/>', { type: 'button', class: 'fscf-button-reset', value: 'Clear' });
        el.on('click', function (e) {
            e.preventDefault();
            $('#FSContact1').find('textarea').val('');
            $('#FSContact1').find('input[type=text]').each(function () {
                $(this).val('');
            })

        });
        $('#FSContact1').find('.fscf-div-submit').append(el);
    });

    /* Black and White image */
    $('.bwWrapper').BlackAndWhite({
        hoverEffect: true,
        invertHoverEffect: true,
        webworkerPath : false
    });

    /*blog index page set min height for Title blog item*/
    (function () {
        var max = 0,
            inc = 0;

        $('.group').find('.title').each(function(index) {
            var current = $(this).height();

            ++inc;
            if (max < current) {
                max = current;
            }

            if (inc == 2) {
                $(this).animate({minHeight : max}, 500);
                $('.group').find('.title').eq(index - 1).animate({minHeight : max}, 500);
                inc = 0;
                max = 0;
            }
        })
    })();

    /* Slider */
    (function(){
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

        $('.home-page .slider').slider({
            value: 2700,
            min: 1,
            max:10000,
            step:145,
            create: function( event, ui ) {
                sliderNumberObj.updateCircles(250);
            },
            start: function (event, ui) {
                start_slider(event, ui);
            },
            stop: function (event, ui) {
                stop_slider(event, ui);
            },
            slide: function (event, ui) {
                slide_slider(event, ui);
            }
        });

        $(".product-page .slider").slider({
            value: 0,
            min: 1,
            max:10000,
            step:145,
            create: function( event, ui ) {
                sliderNumberObj.updateCircles(10);
            },
            start: function (event, ui) {
                start_slider(event, ui);
            },
            stop: function (event, ui) {
                stop_slider(event, ui);
            },
            slide: function (event, ui) {
                slide_slider(event, ui);
            }
        });

        function start_slider(event, ui) {
            var images = $('.sounds_good .circles img');

            images.each(function(index) {
                if ( $(this).hasClass('paused')) {
                    $(this).removeClass('paused')
                }
                $(this).addClass('rotate' + (index + 1));
            });
        }
        function stop_slider(event, ui) {
            var currIndex = (ui.value / 145),
                images = $('.sounds_good .block_circles img'),
                result = stepIncrement(currIndex);

            images.each(function(index) {
                $(this).addClass('paused');
            });

            $('.result').text(result);
            sliderNumberObj.updateCircles(result);
        }
        function slide_slider(event, ui) {
            var currIndex = (ui.value / 145),
                result = stepIncrement(currIndex);

            $('.result').text(result);
            sliderNumberObj.updateCircles(result);
        }
    })();


});









