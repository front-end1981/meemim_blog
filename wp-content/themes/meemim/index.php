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
                    <div class="featured">
                        <span>Featured</span>
                    </div>
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>

                    <div class="title">
                        <?php
                            if ( is_single() ) :
                                the_title( '<h1 class="entry-title">', '</h1>' );
                            else :
                                the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
                            endif;
                        ?>
                    </div>
                    <div class="date">
                        <div class="entry-meta">
                            <?php
                            if ( 'post' == get_post_type() )
                                if ( is_sticky() && is_home() && ! is_paged() ) {
                                    echo '<span class="featured-post">' . __( 'Sticky', 'twentyfourteen' ) . '</span>';
                                }

                            // Set up and print post meta information.
                            printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
                                esc_url( get_permalink() ),
                                esc_attr( get_the_date( 'c' ) ),
                                esc_html( get_the_date('F, Y') ),
                                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                                get_the_author()
                            );

                            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                                ?>
                                <?php
                            endif;

                            edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
                            ?>
                        </div><!-- .entry-meta -->
<!--                        October 2015 Roundup-->
                    </div>
                    <div class="share">
                        <div class="days-ago">
                            <?php
                            $happyday = get_the_date('d.m.Y');
                            $curday = date('d.m.Y');
                            $d1 = strtotime($happyday);
                            $d2 = strtotime($curday);
                            $diff = $d2-$d1;
                            $diff = $diff/(60*60*24*365);
                            $years = floor($diff);
                            echo $years;
                            ?>
                            2 days ago
                        </div>
                        <button  class="btn btn-default">Share</button>
                        <div class="social" style="display: none">
                            <ul>
                                <li><a href="#" class="icon-linkedin"></a></li>
                                <li><a href="#" class="icon-twitter"></a></li>
                                <li><a href="#" class="icon-facebook"></a></li>
                                <li><a href="#" class="icon-gplus"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block first">

                <div class="group">
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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
                        <div class="social" style="display: none">
                            <ul>
                                <li><a href="#" class="icon-linkedin"></a></li>
                                <li><a href="#" class="icon-twitter"></a></li>
                                <li><a href="#" class="icon-facebook"></a></li>
                                <li><a href="#" class="icon-gplus"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
                    <div class="title">
                        Our New Plan to Educate 1 Million
                    </div>
                    <div class="date">
                        October 2015 Roundup
                    </div>
                    <div class="share">
                        <div class="days-ago">2 days ago</div>
                        <button  class="btn btn-default" style="display: none">Share</button>
                        <div class="social">
                            <ul>
                                <li>
                                    <div class="posted">3</div>
                                    <a href="#" class="icon-linkedin"></a>
                                </li>
                                <li>
                                    <div class="posted">3</div>
                                    <a href="#" class="icon-twitter"></a>
                                </li>
                                <li>
                                    <div class="posted">3</div>
                                    <a href="#" class="icon-facebook"></a>
                                </li>
                                <li>
                                    <div class="posted">3</div>
                                    <a href="#" class="icon-gplus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="block second">
                <div class="group">
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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
                    <div class="bwWrapper">
                        <img src="<?php bloginfo('template_url'); ?>/images/about-us-img2.jpg">
                    </div>
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


<?php
//get_sidebar();
get_footer();
