<?php get_header(); ?>

</div>
<div class="logocenter"><?php
                        $bg_image = get_template_directory_uri() . '/assets/images/background-image.png';
                        ?></div>


<div class="homepage-hero" style="background-image: url('<?php echo esc_url($bg_image); ?>');">
    <div class="overlay">
        <div class="homepage">
            <h1 class="homepage-title">My WordPress Developer Journey</h1>
            <p class="homepage-description">Follow along as I build this theme from scratch — day by day.</p>

            <div class="post-grid">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="post-thumbnail" alt="<?php the_title(); ?>">
                                </a>
                            <?php endif; ?>

                            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="post-meta">Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></p>
                            <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>