</div>
<?php //if (!is_page('Home')):?>
<div class="green-yellow-block">
    <div class="green-block">
        <div class="green-yellow-content">
            <p>Ready to simplify your team's life?</p>
            <a href="#">Sign Up</a>
        </div>
    </div>
    <div class="yellow-block">
        <div class="green-yellow-content">
            <p>Want to see how it works first?</p>
            <a href="#">Request Demo</a>
        </div>
    </div>
</div>
<?php //endif;?>
<div class="footer-block" style="overflow: hidden;">
    <footer >
        <hr>
<!--        --><?php //echo is_page('Home')? '<div class="bg"></div>' : ''?>
        <div class="left-side">
            <div class="col made-by footer-column">
                <ul>
                    <li>Made by Meemim</li>
                </ul>
                <ul>
                    <li>Collect.</li>
                    <li>Organize.</li>
                    <li>Share.</li>
                    <li class="logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo_page.png" alt="Meemim logo"></a></li>
                </ul>
            </div>

            <div class="col footer-column">
                <?php wp_nav_menu(array('menu' => 'footer-first-column', 'menu_class' => 'footer-first-column')); ?>
            </div>
            <div class="col footer-column">
                <?php wp_nav_menu(array('menu' => 'footer-second-column', 'menu_class' => 'footer-second-column')); ?>
            </div>
            <div class="col footer-column">
                <?php wp_nav_menu(array('menu' => 'footer-third-column', 'menu_class' => 'footer-second-column')); ?>
            </div>
            <div class="col footer-column">
                <?php wp_nav_menu(array('menu' => 'footer-fourth-column', 'menu_class' => 'footer-second-column')); ?>
            </div>
            <div class="col footer-column">
                <?php wp_nav_menu(array('menu' => 'footer-fifth-column', 'menu_class' => 'footer-second-column')); ?>
            </div>
            <div class="col social-list footer-column">
                <ul>
                    <li><a>Follow Us</a></li>
                </ul>
                <ul class="social">
                    <li><a href="https://www.linkedin.com/company/meemim" target="_blank" class="icon-linkedin-squared">Linkedin</a></li>
                    <li><a href="https://twitter.com/Meemim_Inc" target="_blank" class="icon-twitter-squared">Twitter</a></li>
                    <li><a href="https://twitter.com/Meemim_Inc" target="_blank" class="icon-facebook-squared">Facebook</a></li>
                    <li><a href="https://twitter.com/Meemim_Inc" target="_blank" class="icon-gplus-squared">Google+</a></li>
                </ul>
            </div>
            <div class="right-side"></div>
        </div>

    </footer>

</div>
	<?php wp_footer(); ?>

  
</body>
</html>