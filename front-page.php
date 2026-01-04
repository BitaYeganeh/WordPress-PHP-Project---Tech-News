<?php get_header(); ?>

<div id="content"> 
    <main id="site-main">
        <div class="posts-container"> 
            <?php 
            // Custom query: only show AI posts
            $the_query = new WP_Query( array(
                'category_name'  => 'AI',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'posts_per_page' => 2
            ) );
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        </h2>
                        <p class="date-category">
                            <?php echo get_the_date(); ?>
                        </p>
                        <p><?php the_content(); ?></p>
                    </article>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>No AI posts found.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
