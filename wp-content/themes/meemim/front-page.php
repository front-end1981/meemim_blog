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
        <div class="wrapper-block">
            <div class="massage-sign-up">
                <div class="corner-left"></div>
                <div class="corner-right"></div>
                <span>Sign up for free</span>
                <div class="arrow-bottom"></div>
            </div>
        </div>


        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-default">Sign Up</button>
        </form>
    </div>

</section>

<?php get_footer(); ?>