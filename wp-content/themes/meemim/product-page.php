<?php /* Template Name: Product Template */ ?>
<?php get_header(); ?>

    <!--    <div class="main-heading-title">-->
    <!--        <h1>--><?php //the_title(); ?><!--</h1>-->
    <!--    </div>-->
    <section class="product-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="main-img">
            <div class="rectangle">
                <span>COMPANIES around the world use Meemim
            to make sure EMPLOYEES can find the information
            they need to do their job.</span>
            </div>
        </div>

        <div class="container">
           <div class="row">
               <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/discover.png"></div>
               <div class="col-md-5">
                   <h1>Find</h1>
                   <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
               </div>
           </div>
            <div class="row even">
                <div class="col-md-5">
                    <h1>Share</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/relevant.png"></div>

            </div>
            <div class="row">
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/discover.png"></div>
                <div class="col-md-5">
                    <h1>Find</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
            </div>
            <div class="row even">
                <div class="col-md-5">
                    <h1>Share</h1>
                    <p>With high engagement rates and over 400 million active monthly users, it comes as no surprise then that gaining more Instagram followers is a high priority for any business using the platform.</p>
                </div>
                <div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/images/relevant.png"></div>

            </div>
        </div>

    </section>
<?php get_footer(); ?>