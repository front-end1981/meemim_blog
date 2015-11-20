
<!--<div class="block block-title">-->
<!--    <div class="grid-item grid-item--width2 grid-item--height2">-->
<!---->
<!--        <div class="suggested-readings">-->
<!--            <h3>Suggested readings</h3>-->
<!--            <p>-->
<!--                <a href="#">-->
<!--                    Hatching the ideas and techno-->
<!--                    Shape the future of the social-->
<!--                    Hatching the ideas and techno-->
<!--                    Shape the future of the social-->
<!--                </a>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->

<?php //if ($post->ID == 129):?>
<!--    <div class="grid-item grid-item--width3 grid-item--height3">-->

        <div class="grid-item grid-item--width4 grid-item--height4">

        <div class="group">
            <div class="featured">
                <span>Featured</span>
            </div>
            <div class="bwWrapper">
                <?php the_post_thumbnail();?>
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
                    echo get_the_date('F, Y');

                    if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                        ?>


                        <?php
                    endif;

                    edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
                    ?>
                </div>
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

<!--</div>-->
<!--<div class="block first">-->
<!---->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million Social Media-->
<!--            Professionals for Free by 2017-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--            <div class="social" style="display: none">-->
<!--                <ul>-->
<!--                    <li><a href="#" class="icon-linkedin"></a></li>-->
<!--                    <li><a href="#" class="icon-twitter"></a></li>-->
<!--                    <li><a href="#" class="icon-facebook"></a></li>-->
<!--                    <li><a href="#" class="icon-gplus"></a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default" style="display: none">Share</button>-->
<!--            <div class="social">-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <div class="posted">3</div>-->
<!--                        <a href="#" class="icon-linkedin"></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="posted">3</div>-->
<!--                        <a href="#" class="icon-twitter"></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="posted">3</div>-->
<!--                        <a href="#" class="icon-facebook"></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="posted">3</div>-->
<!--                        <a href="#" class="icon-gplus"></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<div class="block second">-->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<div class="block third">-->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="group">-->
<!--        <div class="bwWrapper">-->
<!--            <img src="--><?php //bloginfo('template_url'); ?><!--/images/about-us-img2.jpg">-->
<!--        </div>-->
<!--        <div class="title">-->
<!--            Our New Plan to Educate 1 Million Social Media Professionals for Free by 2017-->
<!--        </div>-->
<!--        <div class="date">-->
<!--            October 2015 Roundup-->
<!--        </div>-->
<!--        <div class="share">-->
<!--            <div class="days-ago">2 days ago</div>-->
<!--            <button  class="btn btn-default">Share</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



