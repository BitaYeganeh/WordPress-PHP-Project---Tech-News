<?php get_header(); ?>

<div id="content"> 


<main id="site-main">
    <div class="posts-container"> <!-- new wrapper -->
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h2>
             
                <?php the_title(); ?>
                </a>
                </h2>
                <p class="date-category"><?php echo get_the_date(); ?> | <?php echo get_the_category_list(', '); ?></p>
                   
                    <p><?php the_content(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div> <!-- .posts-container -->
</main>

<?php get_sidebar(); ?>
</div> <!-- #content -->
<?php get_footer(); ?>