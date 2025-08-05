<?php get_header(); ?>

<div class="page-links">
    <?php
    $pages = get_pages();
    foreach ($pages as $page) {
        echo '<a href="' . get_page_link($page->ID) . '">' . esc_html($page->post_title) . '</a>';
    }
    ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
        $featured_img_url = get_template_directory_uri() . '/assets/images/background-image.png';

        ?>
        <div class="single-hero" style="background-image: url('<?php echo $featured_img_url; ?>');">
            <div class="overlay animate-fade-in-up">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <p class="post-meta">Published on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
            </div>
        </div>

        <div class="content-wrapper animate-fade-in-up">
            <main class="main-content">
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-nav">
                    <div class="prev-post"><?php previous_post_link(); ?></div>
                    <div class="next-post"><?php next_post_link(); ?></div>
                </div>
            </main>


        </div>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>