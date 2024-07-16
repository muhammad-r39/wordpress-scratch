<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <h2>
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                the_post();
                echo 'Author Archives: ' . get_the_author();
                rewind_posts();
            } elseif (is_day()) {
                echo 'Daily Archives: ' . get_the_date();
            } elseif (is_month()) {
                echo 'Monthly Archives: ' . get_the_date('F Y');
            } elseif (is_year()) {
                echo 'Yearly Archives: ' . get_the_date('Y');
            } else {
                echo 'Archives';
            }
            ?>
        </h2>

        <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;

            the_posts_navigation();
        ?>
    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
