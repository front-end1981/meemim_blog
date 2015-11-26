<?php /* Template Name: Static Template */ ?>
<?php get_header(); ?>
<div class="main-heading-title">
    <h1><?php the_title(); ?></h1>
</div>
<section class="static-page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
