<?php /* Template Name: Product Template */ ?>
<?php get_header(); ?>



    <div class="main-heading-title" style="margin-bottom: 50px">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-img">
        <div class="rectangle">
                <span>COMPANIES around the world use Meemim
            to make sure EMPLOYEES can find the information
            they need to do their job.</span>
        </div>
    </div>
    <section class="product-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

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

        <div class="massage-sign-up">
            <span>
                Sign up to our blog updates
            </span>
            <div class="arrow-bottom"></div>
        </div>

        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">Sign Up</button>
        </form>

    </section>
<?php get_footer(); ?>