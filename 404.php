<?php get_header(); ?>

<div class="not-found-wrapper">
    <h1>Oops! Page Not Found</h1>
    <p>Sorry, the page you're looking for doesn’t exist or has been moved.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="home-link">← Back to Homepage</a>
</div>

<?php get_footer(); ?>
