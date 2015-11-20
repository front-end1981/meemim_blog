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
        <div class="main-img-post">
            <div class="img-block">
                <div class="rectangle">
                    <div class="main-img-title">
                     <span>
                         <?php the_title()?>
                    </span>
                    </div>
                </div>
                <?php the_post_thumbnail();?>
            </div>
        </div>
        <div class="content">
            <div class="user">
                <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                <div class="block-user">
                    <div class="user-name"><?php the_author_meta('last_name', get_post( $id )->post_author) . ' ' .  the_author_meta('first_name', get_post( $id )->post_author);?></div>
                    <div class="user-data">16 October / 1 views / 3 shares</div>
                </div>
            </div>

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

               the_content();

//                // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) {
//                    comments_template();
//                }
            endwhile;
            ?>

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

            <p class="title-form" for="exampleInputEmail1">Sign in or Post as Guest</p>
            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
            endwhile;
            ?>
<!--            <form role="form" class="set-comments">-->
<!--                <div class="form-group">-->
<!--                    <label for="exampleInputEmail1">Sign in or Post as Guest</label>-->
<!--                    <textarea class="form-control" rows="10"></textarea>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <ul>-->
<!--                        <li><a href="">Newest</a></li>-->
<!--                        <li><a href="">Oldest</a></li>-->
<!--                        <li><a href="">Top Comments</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </form>-->
<!---->
<!--            <div class="comments">-->
<!---->
<!--                <div class="user">-->
<!--                    <img src="--><?php //bloginfo('template_url'); ?><!--/images/user.jpg">-->
<!--                    <div class="block-user">-->
<!--                        <div class="user-name">suyantof</div>-->
<!--                        <div class="user-data">-->
<!--                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.-->
<!--                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.-->
<!--                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.-->
<!--                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.-->
<!--                            Dara is a Blog Writer at Hootsuite. She writes about social media,technology, and Hootsuite happenings.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->

    </section>

    <div class="social-blog-single">
        <ul>
            <li>
                <a href="#" class="icon-export"></a>
            </li>
        </ul>

        <?php echo do_shortcode('[TheChamp-Sharing count="1" total_shares="ON type="vertical"]') ?>

    </div>
<?php
//get_sidebar( 'content' );
//get_sidebar();
get_footer();
