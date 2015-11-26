<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>

    <div class="main-heading-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <section class="contact-us-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="contact-us-block" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">

            <div class="contact-data">
                <div class="contact-email">
                    <span class="phone">1-800-503-3027</span>
                    <a href="mailto:info@meemim.com" class="email">Email: info@meemim.com</a>
                </div>
                <div class="contact-address">
                    <p>238 Dunforest Ave.</p>
                    <p>Toronto, ON</p>
                    <p>M2N 4J9</p>
                </div>
            </div>

            <div class="rectangle">
                <p>
                    Please fill out the form below, and we will
                    be in touch shortly.
                </p>
            </div>

        </div>

        <div class="massage-sign-up">
            <div class="arrow-bottom"></div>
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