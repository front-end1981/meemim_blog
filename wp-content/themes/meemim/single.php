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

    <div class="main-img-post" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle">
            <div class="main-img-title">
                     <span>
                         <?php the_title()?>
                    </span>
            </div>
        </div>
    </div>
    <section class="blog-single">
        <div class="content">
            <div class="user">
               <?php echo get_avatar( $post->post_author, 102 );?>
                <div class="block-user">
                    <div class="user-name"><?php the_author_meta('last_name', get_post( $id )->post_author)?> &nbsp; <?php the_author_meta('first_name', get_post( $id )->post_author);?></div>
                    <div class="user-data">   <?php echo get_post_meta ($post->ID,'views', true); ?> views / <?php echo pssc_all($post->ID) ?> shares</div>
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
                <button type="submit" class="btn btn-default">Sign In</button>
            </form>

            <div class="user written-by">
                <span>Written&nbsp;By</span>
               <?php echo get_avatar( $post->post_author, 102 );?>
                <div class="block-user">
                    <div class="user-name"><?php the_author_meta('last_name', get_post( $id )->post_author)?> &nbsp; <?php the_author_meta('first_name', get_post( $id )->post_author);?></div>
                    <div class="user-data"><?php the_author_meta('description', get_post( $id )->post_author)?></div>
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
