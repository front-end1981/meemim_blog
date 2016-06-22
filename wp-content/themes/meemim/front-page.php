<?php get_header(); ?>
<section class="main-page pages-tags">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <div class="simplify-team">
        <h2>Simplify your team</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="solutions content-section">
        <div class="column1">
            <h2>Solutions</h2>
            <ul class="solutions-lines">
                <li class="square-green"><a  href="#square1">Content Portal</a></li>
                <li class="square-yellow"><a  href="#square2">Project Management</a></li>
                <li class="square-pink"><a  href="#square3">Employee Self-Service</a></li>
            </ul>
            <p class="square-text square1">
                1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square2">
                2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square3">
                3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="column2">
            <img class="square1" src="<?php bloginfo('template_url'); ?>/images/image/mac.png">
            <img class="square2" src="<?php bloginfo('template_url'); ?>/images/image/administration.jpg">
            <img class="square3" src="<?php bloginfo('template_url'); ?>/images/image/laptop.png">
        </div>
    </div>

    <div class="meemim-people content-section">
        <h2>peple love meemim</h2>
        <ul>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
        </ul>
    </div>

    <div class="meemim-do-it content-section">
        <h2>How does meemim do it?</h2>
        <h3>By making everything simpler.</h3>
        <div class="column2">
            <img class="square1" src="<?php bloginfo('template_url'); ?>/images/image/laptop.png">
            <img class="square2" src="<?php bloginfo('template_url'); ?>/images/image/administration.jpg">
            <img class="square3" src="<?php bloginfo('template_url'); ?>/images/image/mac.png">
            <img class="square4" src="<?php bloginfo('template_url'); ?>/images/image/administration.jpg">
        </div>
        <div class="column1">
            <ul class="solutions-lines">
                <li class="square-green"><a href="#square1">Documenation Creation</a></li>
                <li class="square-yellow"><a href="#square2">Finding</a></li>
                <li class="square-pink"><a href="#square3">Sharing</a></li>
                <li class="square-purple"><a href="#square4">Recieving </a></li>
            </ul>
            <p class="square-text square1">
                1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square2">
                2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square3">
                3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square4">
                4Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </div>

    <div class="sounds_good content-section">
        <div class="text-block">
            <div class="title">
                <p>Sounds good</p>
                <p>But WHY do I need it?</p>
            </div>
            <p class="text">
                Searching for information, getting new employees up to speed, and doing redundant work translate into significant cost to your company.
                Do you know how much?<br/>
                Use the tool below to find out.<br/><br/>
                How many employees does your company have?
            </p>
        </div>

        <div class="slider" data-value="250"></div>
        <div class="block-employees">
            <div class="result" data-value="250" data-step="5">250</div>
            <div>&nbsp;employees</div>
        </div>

        <div class="block_circles">
            <div id="circle1" class="circles">
                <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-1.png">
                <div class="numeric" data-min="65">65</div>
                <div class="title">new employees</div>
                <div class="description">
                    <p>
                        are only 35% as
                        productive as those
                        they replaced
                    </p>
                </div>
            </div>

            <div id="circle2" class="circles">
                <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-2.png">
                <div class="numeric" data-min="5">5</div>
                <div class="title">months</div>
                <div class="description">
                    <p>
                        of productivity lost due to natural
                        employee turnover
                    </p>
                </div>
            </div>

            <div id="circle3" class="circles">
                <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-3.png">
                <div class="numeric" data-min="25">25</div>
                <div class="title">dollars</div>
                <div class="description">
                    <p>
                        spent redoing work due to
                        inability to find information
                    </p>
                </div>
            </div>

            <div id="circle4" class="circles">
                <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-4.png">
                <div class="numeric" data-min="2">2</div>
                <div class="title">hours</div>
                <div class="description">
                    <p>
                        lost due to inability
                        to find information
                        they needed
                    </p>
                </div>
            </div>

            <div id="circle5" class="circles">
                <img src="<?php bloginfo('template_url'); ?>/images/icons/ellipse-5.png">
                <div class="numeric" data-min="5">5</div>
                <div class="title">hours</div>
                <div class="description">
                    <p>
                        spent searching for information
                    </p>
                </div>
            </div>
        </div>

        <div class="chat">
            <div class="chat-title">
                <p>Meemim can reduce this waste by up to 25%</p>
            </div>
        </div>
    </div>

    <div class="meemin-clients content-section">
        <h2>Meemim is trusted by these and many other clients</h2>
        <ul class="clients">
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company1.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company2.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company3.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company4.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company5.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company6.jpg"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company7.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company8.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company9.png"></li>
           <li><img src="<?php bloginfo('template_url'); ?>/images/logo_clients/company9.png"></li>
        </ul>
    </div>

<!--    <div class="center-block">-->
<!--        <div class="title-block">-->
<!--            A KNOWLEDGE HUB BUILT FOR THE FUTURE-->
<!--        </div>-->
<!--        <div class="content-block">-->
<!--            Meemim is a <b>collaboration platform</b> that helps you organize information within your company so that everyone can find what they need, when they need it.-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="form-sing-up">-->
<!--        <div class="wrapper-block">-->
<!--            <div class="massage-sign-up --><?php //$contact_form = $si_contact_form->si_display_thank_you_custom('2');
//            if ( !is_array($contact_form) && $contact_form){ echo 'form-sent-ok';}?><!--">-->
<!--                <div class="corner-left"></div>-->
<!--                <div class="corner-right"></div>-->
<!--                --><?php //if ( $contact_form && !is_array($contact_form) ):?>
<!--                    <span>--><?php //echo $contact_form?><!--</span>-->
<!--                --><?php //elseif ( is_array($contact_form) ):?>
<!--                    <span>--><?php //echo $contact_form['error_correct']?><!--</span>-->
<!--                --><?php //else:?>
<!--                    <span>Sign up for a free 30-day trial</span>-->
<!--                --><?php //endif?>
<!--                <div class="arrow-bottom"></div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        --><?php
//        if ( isset($si_contact_form) )  {
//            echo $si_contact_form->si_contact_form_short_code( array( 'form' => '2' ) );
//        }
//        ?>
<!--        <form class="form-inline" role="form">-->
<!--            <div class="form-group">-->
<!--                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default">Sign Up</button>-->
<!--        </form>-->
<!--    </div>-->

</section>

<?php get_footer(); ?>