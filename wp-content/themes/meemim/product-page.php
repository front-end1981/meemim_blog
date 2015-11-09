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

    </section>
<?php get_footer(); ?>