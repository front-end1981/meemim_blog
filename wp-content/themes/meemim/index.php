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
        <div class="sidebar top">
            <div class="suggested-readings">
                <h3>Suggested readings</h3>
                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

            </div>
        </div>
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
        <div class="sidebar">
            <div class="suggested-readings">
                <h3>Suggested readings</h3>
                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

                <div class="block-sidebar">
                    <div class="title">
                        Social Media News You
                        Need to Know:
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <p>
                        Hatching the ideas and techno
                        Shape the future of the social
                    </p>
                </div>

            </div>
        </div>
    </section>

    <div class="pagination-blog">
        <ul>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#" class="more">...</a></li>
        </ul>
    </div>


    <script>

        $('.blog-index .share').find('.theChampFacebookSvg').addClass('icon-facebook');
        $('.blog-index .share').find('.theChampTwitterSvg').addClass('icon-twitter');
        $('.blog-index .share').find('.theChampLinkedinSvg').addClass('icon-linkedin');
        $('.blog-index .share').find('.theChampGoogleSvg').addClass('icon-gplus');
        $('.bwWrapper').BlackAndWhite({
            hoverEffect: true,
            invertHoverEffect: true
        });

        $('.blog-index .share').on('click', 'button', function () {
            var self = $(this);

            $(this).hide();
            $(this).parent().find('.social').fadeIn();
        });
    </script>
<?php
//get_sidebar();
get_footer();


