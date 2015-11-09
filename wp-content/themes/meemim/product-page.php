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
                <span>Meet the team</span>
            </div>
        </div>

    </section>
<?php get_footer(); ?>