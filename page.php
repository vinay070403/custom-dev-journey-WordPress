<?php get_header(); ?>

<?php

if (has_post_thumbnail()) {
    $bg_image = get_the_post_thumbnail_url(null, 'full');
} else {
    $bg_image = get_template_directory_uri() . '/assets/images/index.jpg';
}
?>

<div class="page-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="overlay">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
</div>

<div class="content-wrapper full-width">
    <main class="main-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>Sorry, this page could not be found.</p>';
        endif;
        ?>
    </main>
</div>


<?php get_footer(); ?>