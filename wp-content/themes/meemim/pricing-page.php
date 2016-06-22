<?php /* Template Name: Pricing Template */ ?>
<?php get_header(); ?>

    <div class="main-heading-title">
        <h1><?php the_field('title'); ?></h1>
    </div>
    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>
    <section class="pricing-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>


        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th class="bg-table">TEAM</th>
                    <th class="bg-table">BUSINESS</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="first-cell">Monthly Fee (paid annually)</td>
                        <td class="pro-cell">$99</td>
                        <td class="pro-cell">$249</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Monthly Fee (paid monthly)</td>
                        <td>$119</td>
                        <td>$269</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Max Users</td>
                        <td class="pro-cell">10</td>
                        <td class="pro-cell">50</td>

                    </tr>
                    <tr>
                        <td class="first-cell">Deployment</td>
                        <td>Cloud</td>
                        <td>Cloud</td>
                    </tr>
		            <tr>
                        <td class="first-cell">Max Boards/Stories</td>
                        <td>Unlimited</td>
                        <td>Unlimited</td>
                    </tr>
		            <tr>
                        <td class="first-cell">Storage Space</td>
                        <td>100 Gb</td>
                        <td>300 Gb</td>
                    </tr>
		            <tr>
                        <td class="first-cell">Additional Storage (per 200 Gb)</td>
                        <td>$50/month</td>
                        <td>$50/month</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Embedded Videos</td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>

                    </tr>
                    <tr>
                        <td class="first-cell">File Attachments</td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>

                    </tr>
                    <tr>
                        <td class="first-cell">Mobile Apps</td>
                        <td>Coming Soon</td>
                        <td>Coming Soon</td>

                    </tr>
                    <tr>
                        <td class="first-cell">Time Machine</td>
                        <td>Coming Soon</td>
                        <td>Coming Soon</td>

                    </tr>
                    <tr>
                        <td class="first-cell">TDE Encryption</td>
                        <td></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>
                    </tr>
                    <tr>
                        <td class="first-cell">Integrations</td>
                        <td></td>
                        <td>Coming Soon</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Client Portals</td>
                        <td></td>
                        <td>Coming Soon</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Advanced Analytics</td>
                        <td></td>
                        <td>Coming Soon</td>
                    </tr>
                    <tr>
                        <td class="first-cell">Advanced HR Tools</td>
                        <td></td>
                        <td>Coming Soon</td>
                    </tr>
                    <tr>
                        <td class="first-cell">HR Automations</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="first-cell">SAML-Based SSO</td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>
                        <td class="first-cell">Priority Support</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="first-cell">Data Migration Services</td>
                        <td></td>
                        <td><img src="<?php bloginfo('template_url'); ?>/images/square_ok_07.png"></td>

                    </tr>
                    <tr>
                        <td class="first-cell">Librarian Services</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="first-cell">Personalized Training</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="FSContact2" class="massage-sign-up <?php $contact_form = $si_contact_form->si_display_thank_you_custom('2');
        if ( !is_array($contact_form) && $contact_form){ echo 'form-sent-ok';}?>">
            <?php if ( $contact_form && !is_array($contact_form) ):?>
                <span><?php echo $contact_form?></span>
            <?php elseif ( is_array($contact_form) ):?>
                <span><?php echo $contact_form['error_correct']?></span>
            <?php else:?>
                <span>
                Sign up for a free 30-day trial
                </span>
            <?php endif?>
            <div class="arrow-bottom"></div>
        </div>


        <?php
        if ( isset($si_contact_form) )  {
            echo $si_contact_form->si_contact_form_short_code( array( 'form' => '2' ) );
        }
        ?>
    </section>
<?php get_footer(); ?>