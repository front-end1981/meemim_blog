<?php /* Template Name: Resources Template */ ?>
<?php get_header(); ?>


    <div class="main-heading-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <?php if (is_page('Resources')):?>
    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>
    <?php endif?>

<?php if (is_page('Help Center')):?>
    <?php endif?>

    <section class="resources-page pages-tags">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <?php if (is_page('Resources')):?>
        <div class="simplify-team">
            <h2>see meemim in action</h2>
            <p>
                This page features embedded Meemim view. Click on an image or search to access the content you are looking for.
            </p>
        </div>
        <?php endif?>

        <div class="build-in-block">
            <div class="build-in">
                <img src="<?php bloginfo('template_url'); ?>/images/image/Meemim-built-in.jpg">
                <div class="powered-by">Powered by <img src="<?php bloginfo('template_url'); ?>/images/logo_small.jpg"></div>
            </div>
        </div>


    </section>

<?php get_footer(); ?>