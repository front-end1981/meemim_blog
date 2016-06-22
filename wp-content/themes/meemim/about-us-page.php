<?php /* Template Name: About Us Template */ ?>
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
<section class="about-us-page pages-tags">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>


    <div class="simplify-team">
        <h2>Simplify your team</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>

    <div class="content-section">
        <div class="column1">
            <h2>Explore Meemim</h2>
            <ul class="solutions-lines">
                <li class="square-green"><a  href="#square1">About Meemim</a></li>
                <li class="square-yellow"><a  href="#square2">Team</a></li>
                <li class="square-pink"><a  href="#square3">Contact Us</a></li>
            </ul>
            <p class="square-text square1">
                1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square2">
                2Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="square-text square3">
                3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
        <div class="column2">
            <img class="square1" src="<?php bloginfo('template_url'); ?>/images/image/mac.png">
            <img class="square2" src="<?php bloginfo('template_url'); ?>/images/image/administration.jpg">
            <img class="square3" src="<?php bloginfo('template_url'); ?>/images/image/laptop.png">
        </div>
    </div>

    <div class="meemim-people content-section">
        <h2>peple love meemim</h2>
        <ul>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
            <li>
                <div class="user-info">
                    <div class="side left">
                        <img src="<?php bloginfo('template_url'); ?>/images/user.jpg">
                    </div>
                    <div class="side right">
                        <span class="name">First Name</span>
                        <span class="title">Title</span>
                        <span class="company">Company</span>
                    </div>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipis
                    elit, sed do eiusmod tempor incididunt ut labor
                    dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit.
                </p>
            </li>
        </ul>
    </div>


<!--    <div class="about-us-block" style="background-image: url(' --><?php //echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>/*')">*/
<!--/*        <div class="rectangle">*/-->
<!--/*            <span>*/--><?php ////echo get_post(get_post_thumbnail_id())->post_title;?><!--<!--</span>-->-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="leadership-user">-->
<!--        --><?php //foreach(AboutPageHelper::getAllImages(13, 'medium') as $index=>$image): ?>
<!--        --><?php //if ( $index < 2 ):?>
<!--            <div class="users">-->
<!--                <img src="--><?php //echo $image['src']; ?><!--" alt="">-->
<!--                <div class="users-name">--><?php //echo trim($image['caption']); ?><!--</div>-->
<!--                <div class="users-data">--><?php //echo trim($image['description']); ?><!--</div>-->
<!--            </div>-->
<!--            --><?php //endif;?>
<!--        --><?php //endforeach; ?>
<!--    </div>-->
<!---->
<!--    <div class="about-us-block2" style="background-image: url(' --><?php //echo $dynamic_featured_image->get_featured_images($post->ID )[0]['full']?>/*')">*/
/*        <div class="rectangle">*/
/*            <span>*/<?php // echo $dynamic_featured_image->get_image_title_by_id($dynamic_featured_image->get_featured_images($post->ID )[0]['attachment_id'])?><!--</span>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="leadership-user">-->
<!--        --><?php //foreach(AboutPageHelper::getAllImages(13, 'medium') as $index=>$image): ?>
<!--            --><?php //if ( $index > 1 ):?>
<!--            <div class="users">-->
<!--                <img src="--><?php //echo $image['src']; ?><!--" alt="">-->
<!--                <div class="users-name">--><?php //echo trim($image['caption']); ?><!--</div>-->
<!--                <div class="users-data">--><?php //echo trim($image['description']); ?><!--</div>-->
<!--            </div>-->
<!--            --><?php //endif;?>
<!--        --><?php //endforeach; ?>
<!--    </div>-->

</section>
<?php get_footer(); ?>
