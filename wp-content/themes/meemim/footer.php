
</div>
	<footer class="<?php echo is_page('Home')? 'home-page' : ''?>">

        <?php echo is_page('Home')? '<div class="bg"></div>' : ''?>
        <div class="left-side">
            <div class="first-row">
                <ul>
                    <li>Made by Meemim</li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
                <ul class="social">
                    <li><a href="#" class="icon-linkedin"></a></li>
                    <li><a href="#" class="icon-twitter"></a></li>
                </ul>
                <?php wp_nav_menu(array('menu' => 'footer-menu-right-first-row', 'menu_class' => 'footer-menu-right-first-row')); ?>
            </div>
            <div class="first-column">
                <ul>
                    <li>Made by Meemim</li>
                </ul>
            </div>

            <div class="second-column">

                <?php wp_nav_menu(array('menu' => 'footer-menu-left-second-column', 'menu_class' => 'footer-menu-left-second-column')); ?>
<!--                <ul>-->
<!--                    <li><a href="#">T&C</a></li>-->
<!--                    <li><a href="#">Pri</a></li>-->
<!--                    <li><a href="#">Other Poli</a></li>-->
<!--                </ul>-->
            </div>

            <div class="third-column">
                <ul>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Contact Sales</a></li>
                    <li><a href="#">Contact Support</a></li>
                </ul>
            </div>

            <div class="fourth-column">
                <?php wp_nav_menu(array('menu' => 'footer-menu-fourth-column', 'menu_class' => 'footer-menu-fourth-column')); ?>
            </div>

            <div class="right-side"></div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>