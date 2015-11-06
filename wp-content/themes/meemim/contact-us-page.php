<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>

    <div class="main-heading-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <section class="contact-us-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="contact-us-block">
            <img src="<?php bloginfo('template_url')?>/images/CONTACT-US_img1.jpg">
        </div>

        <div class="contact-us-message">
            <img src="<?php bloginfo('template_url')?>/images/sing_up_for_free.png">
        </div>


        <form role="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Messages</label>
                <textarea class="form-control" rows="10"></textarea>
            </div>
            <button type="submit" class="btn pull-right btn-default">Send</button>
            <button type="submit" class="btn pull-right btn-default">Clear</button>
        </form>

    </section>
<?php get_footer(); ?>