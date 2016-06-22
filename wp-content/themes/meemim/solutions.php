<?php /* Template Name: Solutions Template */ ?>
<?php get_header(); ?>

    <div class="main-heading-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-img" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle product-page">
             <span>
                 <?php echo get_post(get_post_thumbnail_id())->post_excerpt;?>
             </span>
        </div>
    </div>

    <section class="solutions-page pages-tags">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="simplify-team">
            <h2>Simplify your team</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <?php foreach($dynamic_featured_image->get_featured_images($post->ID) as $index=>$imageOption):?>
        <div class="content-section">
                <?php if ( $index % 2 == 0):?>
                <div class="column2 odd">
                    <img class="square1" src="<?php echo $imageOption['full']?>">
                </div>
                <?php endif?>
                <div class="column1">
                    <h2><?php echo $dynamic_featured_image->get_image_title_by_id($dynamic_featured_image->get_featured_images($post->ID )[$index]['attachment_id'])?></h2>
                    <p class="square-text square1">
                        <?php  echo $dynamic_featured_image->get_image_description_by_id($dynamic_featured_image->get_featured_images($post->ID )[$index]['attachment_id'])?>
                    </p>

                </div>
                <?php if ( $index % 2 == 1):?>
                <div class="column2 even">
                    <img class="square1" src="<?php echo $imageOption['full']?>">
                </div>
                <?php endif?>
        </div>
        <?php endforeach?>

    </section>

<?php get_footer(); ?>