
        <div class="grid-item">

        <div class="group">

            <a href="<?php echo get_permalink()?>">
                <div class="bwWrapper">
                    <?php the_post_thumbnail();?>
                </div>
            </a>
            <div class="short-desc">
                <div class="title">
                    <?php the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );?>
                </div>

                <div class="short-content">
                    <?php the_excerpt()?>
                </div>

                <div class="share">
<!--                    <div class="social-blog-single">-->
<!--                        --><?php //echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
<!--                    </div>-->
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
<!--                    <a  class="btn btn-default">Share</a>-->
                    <a  class="share-btn">
<!--                        <div class="social-blog-single">-->
<!--                            --><?php //echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
<!--                        </div>-->
                        <span class="icon-export"></span>Share
                    </a>
                    <div class="social" style="display: none">

                        <?php echo do_shortcode('[TheChamp-Sharing count="1" total_shares="ON]') ?>

                    </div>
                </div>
            </div>


        </div>
    </div>




