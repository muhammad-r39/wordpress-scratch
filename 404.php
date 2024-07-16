<?php get_header(); ?>

<main>
    <h1>Page Not Found</h1>
    <p>Sorry, the page you are looking for does not exist. You can return to the <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a> or use the search form below.</p>
    <?php get_search_form(); ?>
</main>

<?php get_footer(); ?>