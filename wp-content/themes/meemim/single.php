<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


    <div class="main-heading-title">
        <h1>Meemim Blog</h1>
    </div>
    <section class="blog-single">
        <div class="main-img">
            <div class="rectangle">
                <div class="main-img-title">
                     <span>
                    Our New Plan to Educate 1 Million Social Media
                    Professionals for Free by 2017
                </span>
                    <span>October 2015 Roundup</span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="user">
                <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                <div class="block-user">
                    <div class="user-name">Alexandre Pistov</div>
                    <div class="user-data">16 October / 1 views / 3 shares</div>
                </div>
            </div>
            <h1>
                How to get more Instagram followers in 7 ways
            </h1>
            <p>
                Instagram is quickly becoming a focal point for brands looking to use social media to connect with current and potential new customers—and for good reason.
            </p>
            <p>
                Dubbed the “king of social engagement” by Forrester Research, the top brands on Instagram are seeing a per-follower interaction rate of 2.3 percent, which far surpasses the engagement rate these brands are seeing on both Facebook (0.2 percent) and Twitter (0.02 percent).
            </p>
            <p>
                With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.
            </p>

            <h2>How to get more Instagram followers in 7 ways</h2>
            <p>
                In this guide, we’ll cover some of the tactics we at Hootsuite have seen to be the most effective for gaining more followers on Instagram. Want to jump ahead? Click the buttons below to jump to the sections you want to focus on.
            </p>

            <div class="massage-sign-up">
                <span>
                 Sign up to our blog updates
                </span>
                <div class="arrow-bottom"></div>
            </div>

            <form class="form-inline" role="form">
                <div class="form-group" id="blog-index">
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-default">sing up</button>
            </form>

            <div class="user written-by">
                <span>Written By</span>
                <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                <div class="block-user">
                    <div class="user-name">Alexandre Pestov and the Meemim Team</div>
                    <div class="user-data"> Dara is a Blog Writer at Hootsuite. She writes about social media,<br>
                        technology, and Hootsuite happenings.</div>
                </div>
            </div>

            <p>
                In this guide, we’ll cover some of the tactics we at Hootsuite have seen to be the most effective for gaining more followers on Instagram. Want to jump ahead? Click the buttons below to jump to the sections you want to focus on.
            </p>

            <form role="form" class="set-comments">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sign in or Post as Guest</label>
                    <textarea class="form-control" rows="10"></textarea>
                </div>
                <div>
                    <ul>
                        <li><a href="">Newest</a></li>
                        <li><a href="">Oldest</a></li>
                        <li><a href="">Top Comments</a></li>
                    </ul>
                </div>
            </form>

            <div class="comments">

                <div class="user">
                    <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    <div class="block-user">
                        <div class="user-name">suyantof</div>
                        <div class="user-data">
                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.
                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.
                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.
                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.
                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="social">
            <ul>
                <li>
                    <a href="#" class="icon-export"></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="icon-linkedin"></a>
                </li>
                <li>
                    <a href="#" class="icon-twitter"></a>
                </li>
                <li>
                    <a href="#" class="icon-facebook"></a>
                </li>
                <li>
                    <a href="#" class="icon-gplus"></a>
                </li>
            </ul>
        </div>
    </section>

<!--	<div id="primary" class="content-area">-->
<!--		<div id="content" class="site-content" role="main">-->
<!---->
<!--			--><?php
//				// Start the Loop.
//				while ( have_posts() ) : the_post();
//
//					/*
//					 * Include the post format-specific template for the content. If you want to
//					 * use this in a child theme, then include a file called called content-___.php
//					 * (where ___ is the post format) and that will be used instead.
//					 */
//					get_template_part( 'content', get_post_format() );
//
//					// Previous/next post navigation.
////					twentyfourteen_post_nav();
//
//					// If comments are open or we have at least one comment, load up the comment template.
//					if ( comments_open() || get_comments_number() ) {
//						comments_template();
//					}
//				endwhile;
//			?>
<!--		</div><!-- #content -->
<!--	</div><!-- #primary -->

<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
