<?php /* Template Name: Team Template */ ?>
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

    <section class="team-page pages-tags">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="simplify-team">
            <h2>our teamour team</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="content-section">
            <?php foreach(AboutPageHelper::getAllImages($post->ID, 'medium') as $index=>$image): ?>
            <div class="team-member">
                <img src="<?php echo $image['src']?>">
                <div class="member-data">
                    <div class="member-name"><?php echo $image['title']?></div>
                    <div class="member-title"><?php echo $image['caption']?></div>
                </div>
            </div>
            <?php endforeach;?>
        </div>


    </section>

<?php get_footer(); ?>