


</div>
<div class="footer-block" style="overflow: hidden;">
    <footer class="<?php echo is_page('Home')? 'home-page' : ''?>">
        <hr>
        <?php echo is_page('Home')? '<div class="bg"></div>' : ''?>
        <div class="left-side">
            <div class="col first-column">
                <ul>
                    <li>Made by Meemim</li>

                </ul>
                <ul>
                    <li>with magic and pixie dust</li>
                </ul>
            </div>

            <div class="col second-column">
                <?php wp_nav_menu(array('menu' => 'footer-menu-first-column', 'menu_class' => 'footer-menu-first-column')); ?>
            </div>

            <div class="col third-column">
                <?php wp_nav_menu(array('menu' => 'footer-menu-second-column', 'menu_class' => 'footer-menu-second-column')); ?>
            </div>

            <div class="col fourth-column">
                <?php wp_nav_menu(array('menu' => 'footer-menu-third-column', 'menu_class' => 'footer-menu-third-column')); ?>
                <ul class="social">
                    <li><a href="https://www.linkedin.com/company/meemim" target="_blank" class="icon-linkedin"></a></li>
                    <li><a href="https://twitter.com/Meemim_Inc" target="_blank" class="icon-twitter"></a></li>
                </ul>
            </div>

            <div class="right-side"></div>
        </div>
    </footer>
</div>

	<?php wp_footer(); ?>

<script>


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
                    footer.stop(true, false).animate( {'top': footerHeight - 15}, 500);
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
                if ( $('section').hasClass('legal-page') ) {
                    $('.wrapper').css({
                        'min-height': browserHeight - footerOuterHeight - mainHeightMarginPaddingBorder - $('header').height()  - $('header').height()
                    });
                }
            }
        };
        ToBottom();
        $(window).resize(function () {
            ToBottom();
        });

    })(jQuery);
</script>
</body>
</html>