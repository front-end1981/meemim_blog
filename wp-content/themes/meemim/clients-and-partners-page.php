<?php /* Template Name: Clients and Partners Template */ ?>
<?php get_header(); ?>



<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

    </div>
<?php endif; ?>

<div class="main-heading-title">
    <h1><?php the_title(); ?></h1>
</div>
<section class="about-us-page2">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <div class="about-us-block" style="background-image: url(' <?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]?>')">
        <div class="rectangle">
            <span><?php echo get_post(get_post_thumbnail_id())->post_title;?></span>
        </div>
    </div>

    <div class="leadership-user">
        <?php foreach(AboutPageHelper::getAllImages($post->ID, 'medium') as $index=>$image): ?>
            <?php if ( $index <= 3 ):?>

                <article class="company post-1154 type-company status-publish hentry category-lsa-2 category-lsi-1">

                    <div class="company-logo" style="background: url('<?php echo $image['src']; ?>') no-repeat center center; background-size: 100% auto;">
                        <a href="<?php echo trim($image['description']); ?>" target="_blank" class="open-modal" data-open="company-1154-2">
                        </a>
                    </div>

                </article>
            <?php endif;?>
        <?php endforeach; ?>
    </div>


    <div class="about-us-block2" style="background-image: url(' <?php echo $dynamic_featured_image->get_featured_images($post->ID )[0]['full']?>')">
        <div class="rectangle">
            <span><?php  echo $dynamic_featured_image->get_image_title_by_id($dynamic_featured_image->get_featured_images($post->ID )[0]['attachment_id'])?></span>
        </div>
    </div>

    <div class="leadership-user">
        <?php foreach(AboutPageHelper::getAllImages($post->ID, 'medium') as $index=>$image): ?>
            <?php if ( $index > 3 ):?>

                <article class="company post-1154 type-company status-publish hentry category-lsa-2 category-lsi-1">

                    <div class="company-logo" style="background: url('<?php echo $image['src']; ?>') no-repeat center center; background-size: 100% auto;">
                        <a href="<?php echo trim($image['description']); ?>" target="_blank" class="open-modal" data-open="company-1154-2">
                        </a>
                    </div>

                </article>
            <?php endif;?>
        <?php endforeach; ?>
    </div>

</section>
<?php get_footer(); ?>
