<?php get_header(); ?>

<main>
    <h2><?php single_cat_title(); ?></h2>
    <?php if (category_description()) : ?>
        <div><?php echo category_description(); ?></div>
    <?php endif; ?>

    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;

        the_posts_navigation();
        ?>
    <?php else : ?>
        <p>No posts found in this category.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
