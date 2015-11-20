(function ( $ ) {

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


})(jQuery);

//var $container = $('.group');
//$container.imagesLoaded(function(){
//    $container.masonry({
//        itemSelector: '.grid-item',
//        isFitWidth: true,
//        "gutter": 10,
//        columnWidth: 50
//    });
//    $('.group').imagefill();
//});


$('.bwWrapper').BlackAndWhite({
    hoverEffect: true,
    invertHoverEffect: true
});



// layout Masonry after each image loads

//if ($('section').hasClass('blog-index')) {
    $('.grid').masonry({
        itemSelector: '.grid-item',
        isFitWidth: true,
        "gutter": 10,
        columnWidth: 50
    });
//}

