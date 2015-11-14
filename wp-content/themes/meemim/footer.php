


</div>
<div style="overflow: hidden">
    <footer class="<?php echo is_page('Home')? 'home-page' : ''?>">
        <hr>
        <?php echo is_page('Home')? '<div class="bg"></div>' : ''?>
        <div class="left-side">
            <div class="col first-column">
                <ul>
                    <li>Made by Meemim</li>
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
                    <li><a href="#" class="icon-linkedin"></a></li>
                    <li><a href="#" class="icon-twitter"></a></li>
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
                footer = $('footer');

            if ( $('body').hasClass('home') ) {
                if ( event.pageY > targetTop ) {
                    footer.removeClass('animation-bottom');
                    footer.addClass('animation-top');
                } else {
                    footer.removeClass('animation-top');
                    footer.addClass('animation-bottom');
                }
            }

        });

        $('.casuta').hover(
            function () {
                $(this).removeClass('animation-none');
                $(this).addClass('animation');
            },
            function () {
                $(this).removeClass('animation');
                $(this).addClass('animation-none');
            }
        );

    })(jQuery);
</script>
</body>
</html>