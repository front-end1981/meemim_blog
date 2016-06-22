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


    <div class="main-img-post" style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
<!--        <img src="--><?php //echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?><!--">-->
        <div class="user">
            <?php echo get_avatar( $post->post_author, 102 );?>
            <div class="block-user">
                <div class="user-name"><?php the_author_meta('first_name', $post->post_author)?>&nbsp;&nbsp;<?php the_author_meta('last_name', $post->post_author);?></div>
                <div class="user-data">   <?php echo get_post_meta ($post->ID,'views', true); ?> views / <span class="social-share-count"></span> shares</div>
            </div>
        </div>
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
            <div class="main-img-title small-screen">
                     <span>
                         <?php the_title()?>
                    </span>
            </div>
            <div class="user small-screen">
                <?php echo get_avatar( $post->post_author, 102 );?>
                <div class="block-user">
                    <div class="user-name"><?php the_author_meta('first_name', $post->post_author)?>&nbsp;&nbsp;<?php the_author_meta('last_name', $post->post_author);?></div>
                    <div class="user-data">   <?php echo get_post_meta ($post->ID,'views', true); ?> views / <span class="social-share-count"></span> shares</div>
                </div>
            </div>
            <div class="social-blog-single small-screen" style="display: none">
                <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
            </div>

            <div class="content-text">
                <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
                <div class="user written-by">
                    <span></span>
                    <?php echo get_avatar( $post->post_author, 102 );?>
                    <div class="block-user">
                        <div class="user-name"><?php the_author_meta('first_name', $post->post_author)?>&nbsp;&nbsp;<?php the_author_meta('last_name', $post->post_author);?></div>
                        <div class="user-data"><?php the_author_meta('description', $post->post_author)?></div>
                    </div>
                </div>
            </div>

            <div id="FSContact3" class="massage-sign-up <?php $contact_form = $si_contact_form->si_display_thank_you_custom('3');
            if ( !is_array($contact_form) && $contact_form){ echo 'form-sent-ok';}?>">
                <?php if ( $contact_form && !is_array($contact_form) ):?>
                    <span><?php echo $contact_form?></span>
                <?php elseif ( is_array($contact_form) ):?>
                    <span><?php echo $contact_form['error_correct']?></span>
                <?php else:?>
                    <span>
                Sign up to our blog updates
                </span>
                <?php endif?>
                <div class="arrow-bottom"></div>
            </div>
            <?php
            if ( isset($si_contact_form) )  {
                echo $si_contact_form->si_contact_form_short_code( array( 'form' => '3' ) );
            }
            ?>

<!--            <form class="form-inline" role="form">-->
<!--                <div class="form-group" id="blog-index">-->
<!--                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-default">Sign In</button>-->
<!--            </form>-->
            <div class="content-articles">
                <div class="block grid">
                    <?php $args = array('posts_per_page'   => 2,'order' => 'ASC', 'post_type' => 'post', 'post_status' => 'publish');
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <?php include ('content.php'); ?>
                    <?php endforeach;
                    wp_reset_postdata();?>
                </div>
            </div>



	
	    <p>&nbsp;</p>
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
        <?php echo do_shortcode('[supsystic-social-sharing id="1"]') ?>
    </div>
<script>
    jQuery(function() {

        url = window.location.href;

        jQuery.getJSON("<?php echo dirname(get_stylesheet_uri()).'/socialworth.php'?>", { url: url }, function(data) {
            jQuery(".social-share-count").html(data.count);
        });
        return false;
    });
</script>
<?php


get_footer();
