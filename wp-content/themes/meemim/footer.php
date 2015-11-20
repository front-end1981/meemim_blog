


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
</body>
</html>