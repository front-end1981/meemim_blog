<?php get_header(); ?>
<section class="main-page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <div class="center-block">
        <div class="title-block">
            &nbsp; FIND FASTER &nbsp; SHARE EASIER &nbsp; WORK BETTER
        </div>
        <div class="content-block">
            COMPANIES around the world use Meemim
            to make sure EMPLOYEES can find the information
            they need to do their job.
        </div>
    </div>
    <div class="form-sing-up">
        <div class="sing-up-message">
            <span>Sing up for free</span>
        </div>
        <form>
            <input type="text" >
            <div class="button-form">
                <span>sing up</span>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>