<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <div class="main-heading-title">
        <h1>Meemim Blog</h1>
        <p>
            Hatching the ideas and technology that
            will shape the future of the social web
        </p>
    </div>

    <section class="blog-index">
        <div class="content">
            <div class="block block-title">
                <div class="suggested-readings">
                    <h3>Suggested readings</h3>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>
                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million Social Media
                        Professionals for Free by 2017
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>
            </div>
            <div class="block first">

                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million Social Media
                        Professionals for Free by 2017
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

            </div>
            <div class="block second">
                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

            </div>
            <div class="block third">
                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>

                <div class="group">
                    <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    <div class="title">
                        Our New Plan to Educate 1 Million Social Media Professionals for Free by 2017
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default">Share</button>
                    </div>
                </div>
            </div>
            <div class="massage-sign-up">
                <span>
                    Choose your plan and enter your email to get started
                </span>
                <div class="arrow-bottom"></div>
            </div>
            <form class="form-inline" role="form">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-default">sing up</button>
            </form>
        </div>
        <div class="sidebar"></div>
    </section>


<?php
//get_sidebar();
get_footer();
