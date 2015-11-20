<?php /* Template Name: About Us Template */ ?>
<?php get_header(); ?>



<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

    </div>
<?php endif; ?>

<div class="main-heading-title">
    <h1><?php the_title(); ?></h1>
</div>
<section class="about-us-page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <div class="about-us-block">
        <div class="rectangle">
            <span>Meet the leadership</span>
        </div>
    </div>

    <div class="leadership-user">
        <?php foreach(AboutPageHelper::getAllImages(13, 'meemim') as $index=>$image): ?>
        <?php if ( $index < 2 ):?>
            <div class="users">
                <img src="<?php echo $image['src']; ?>" alt="">
                <div class="users-name"><?php echo trim($image['caption']); ?></div>
                <div class="users-data"><?php echo trim($image['description']); ?></div>
            </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>

    <div class="about-us-block2">
        <div class="rectangle">
            <span>Meet the team</span>
        </div>
        <div class="content-block">
                 COMPANIES around the world use Meemim
            to make sure EMPLOYEES can find the information
            they need to do their job.

        </div>
    </div>

    <div class="leadership-user">
        <?php foreach(AboutPageHelper::getAllImages(13, 'meemim') as $index=>$image): ?>
            <?php if ( $index > 1 ):?>
            <div class="users">
                <img src="<?php echo $image['src']; ?>" alt="">
                <div class="users-name"><?php echo trim($image['caption']); ?></div>
                <div class="users-data"><?php echo trim($image['description']); ?></div>
            </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>

</section>
<?php get_footer(); ?>
