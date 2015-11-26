

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
<?php echo get_post_field( 'post_content', get_option( 'page_for_posts' ) );?>
    <section class="blog-index">
        <div class="sidebar top">
            <div class="suggested-readings">
                <h3>Suggested readings</h3>
                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

            </div>
        </div>


        <div class="content">
            <div class="block block-title grid">

                <?php
                    if ( have_posts() ) :

                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );

                        endwhile;
                        else :
                        // If no content, include the "No posts found" template.
                        get_template_part( 'content', 'none' );

                    endif;
                ?>
            </div>

            <?php if(function_exists('wp_simple_pagination')) {
                wp_simple_pagination();
            }?>

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
        </div>

        <div class="sidebar">
            <div class="suggested-readings">
                <h3>Suggested readings</h3>
                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        <a href="">
                            Social Media News You
                            Need to Know:
                        </a>
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        <a href="#">
                            Hatching the ideas and techno
                            Shape the future of the social
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </section>

<?php
//get_sidebar();
get_footer();


