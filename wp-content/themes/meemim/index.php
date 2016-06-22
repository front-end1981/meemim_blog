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
    </div>

    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( 11 ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>
    <section class="blog-index">
        <div class="content-articles">
            <div class="block block-title grid">

                <?php
                $custom_query_args = array(
                    'post_type'  => 'post',
                    'meta_key'   => '_is_ns_featured_post',
                    'meta_value' => 'yes',
                );
                // Get current page and append to custom query parameters array
                $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
                $custom_query = new WP_Query( $custom_query_args ); ?>
                <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                    <?php if (get_post_meta(get_the_ID(), '_is_ns_featured_post', true) == 'yes'):?>
                        <div class="featured">
                            <div class="featured-img"><?php the_post_thumbnail('large');?></div>
                            <div class="short-desc">
                                <div class="featured-title">Featured</div>
                                <div class="title">
                                    <?php
                                    if ( is_single() ) :
                                        the_title( '<h1 class="entry-title">', '</h1>' );
                                    else :
                                        the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );
                                    endif;
                                    ?>
                                </div>

                                <div class="short-content">
                                    <?php the_excerpt()?>
                                </div>


                                <div class="share">
                                    <div class="days-ago">
                                        <?php
                                        $time_diff = current_time('timestamp') - get_the_time('U');
                                        echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' AGO' ;
                                        ?>
                                    </div>
                                    <a  class="share-btn"><span class="icon-export"></span>Share</a>
                                    <div class="social" style="display: none">

                                        <?php echo do_shortcode('[TheChamp-Sharing count="1" total_shares="ON]') ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif?>

                <?php endwhile; ?>

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

        </div>

<!--        <div class="sidebar">-->
<!--            <div class="suggested-readings">-->
<!--                <h3>Suggested readings</h3>-->
<!--                --><?php // echo do_shortcode('[simple-links]');?>
<!--            </div>-->
<!--        </div>-->
    </section>


<?php
//get_sidebar();
get_footer();


