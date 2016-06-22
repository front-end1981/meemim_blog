<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>

    <div class="main-heading-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>
    <section class="contact-us-page pages-tags">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php
            if ( isset($si_contact_form) )  {
                echo $si_contact_form->si_contact_form_short_code( array( 'form' => '1' ) );
            }
        ?>

        <div class="content-section">
            <h2>Other ways to contact us </h2>
            <ul>
                <li>
                    <p>Sales Inquiries</p>
                    <p>Contact sales about purchasing Meemim.</p>
                    <br/>
                    <p>sales@meemim.com</p>
                    <p>1-800-503-3027</p>
                </li>
                <li>
                    <p>Help & Support</p>
                    <p>We're here to help with any questions.</p>
                    <br/>
                    <p>support@meemim.com</p>
                    <p>@Meemim_Inc on Twitter</p>
                    <p>1-800-503-3027</p>
                </li>
                <li>
                    <p>Help Center</p>
                    <p>Knowledge base and help articles about Meemim.</p>
                    <br/>
                    <p>Visit our support center</p>
                </li>
                <li>
                    <p>Toronto Office</p>
                    <br/>
                    <p>238 Dunforest Ave.</p>
                    <p>Toronto, ON</p>
                    <p>M2N 4J9</p>
                </li>
            </ul>
        </div>
<!--        <div class="massage-sign-up --><?php //$contact_form = $si_contact_form->si_display_thank_you_custom('1');
//        if ( !is_array($contact_form) && $contact_form){ echo 'form-sent-ok';}?><!--">-->
<!--            --><?php //if ( $contact_form && !is_array($contact_form) ):?>
<!--                <span>--><?php //echo $contact_form?><!--</span>-->
<!--            --><?php //elseif ( is_array($contact_form) ):?>
<!--                <span>--><?php //echo $contact_form['error_correct']?><!--</span>-->
<!--            --><?php //else:?>
<!--                <span>-->
<!---->
<!--                </span>-->
<!--            --><?php //endif?>
<!--            <div class="arrow-bottom"></div>-->
<!--        </div>-->

<!--        <form role="form">-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputEmail1">Name</label>-->
<!--                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputEmail1">Email</label>-->
<!--                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputEmail1">Messages</label>-->
<!--                <textarea class="form-control" rows="10"></textarea>-->
<!--            </div>-->
<!--            <button type="submit" class="btn pull-right btn-default">Send</button>-->
<!--            <button type="submit" class="btn pull-right btn-default">Clear</button>-->
<!--        </form>-->

    </section>
<?php get_footer(); ?>