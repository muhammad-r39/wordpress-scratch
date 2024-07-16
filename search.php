<?php get_header(); ?>

<main>
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>

    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'search');
        endwhile;

        the_posts_navigation();
        ?>
    <?php else : ?>
        <p>No results found for your search.</p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
