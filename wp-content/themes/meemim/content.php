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
                the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );
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

                //                            // Set up and print post meta information.
                //                            printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
                //                                esc_url( get_permalink() ),
                //                                esc_attr( get_the_date( 'c' ) ),
                //                                esc_html( get_the_date('F, Y') ),
                //                                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                //                                get_the_author()
                //                            );
                echo get_the_date('F, Y');

                if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                    ?>


                <?php
                endif;

                edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
                ?>
            </div><!-- .entry-meta -->
        </div>
        <div class="share">
            <div class="days-ago">
                <?php
                $time_diff = current_time('timestamp') - get_the_time('U');
                echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' AGO' ;
                ?>
            </div>
            <button  class="btn btn-default">Share</button>
            <div class="social" style="display: none">

                <?php echo do_shortcode('[TheChamp-Sharing count="1" total_shares="ON]') ?>

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

