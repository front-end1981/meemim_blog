<?php /* Template Name: Legal Template */ ?>
<?php get_header(); ?>

    <section class="legal-page">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <h3>Policies</h3>
        <div class="policies">

            <?php wp_nav_menu(
                array(
                    'menu' => 'footer-menu-first-column',
                    'menu_class' => 'footer-menu-first-column',
                    'walker'=> new True_Walker_Nav_Menu()
                )
            ); ?>
        </div>

    </section>
<?php get_footer(); ?>