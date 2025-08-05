<?php get_header(); ?>

<div class="search-results-wrapper">
    <h1>Search Results for: <span><?php echo get_search_query(); ?></span></h1>

    <?php if (have_posts()) : ?>
        <div class="search-posts">
            <?php while (have_posts()) : the_post(); ?>
                <article class="search-post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="meta">Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                    <a class="read-more" href="<?php the_permalink(); ?>">Read More →</a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No results found. Try a different search.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
