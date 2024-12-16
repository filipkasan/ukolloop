<?php get_header(); ?>
<body>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <hr>
    <h2><?php bloginfo( 'description' ); ?></h2>
    <hr>

    <?php if ( have_posts() ) : ?>
        <div class="posts-wrapper">
            <?php while ( have_posts() ) : the_post(); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <section class="post-card">
                   
                    <hr>
                    <div class="post-image"><img  src="https://www.heraldtribune.com/gcdn/authoring/authoring-images/2024/08/02/NSHT/74653095007-sar-img-media-day-022.jpg?width=700&height=530&fit=crop&format=pjpg&auto=webp" alt="ez obrzk"></div>
                    <div class="post-content">
                    <p><?php the_excerpt(); ?></p>
                    <p class="post-meta">Autor: <?php the_author(); ?> | Datum: <?php the_time('j. F Y'); ?></p>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-image">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <?php edit_post_link('Editovat příspěvek'); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php if ( get_next_posts_link() ) : ?>
                <div class="next-posts">
                    <?php next_posts_link('Starší příspěvky'); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_previous_posts_link() ) : ?>
                <div class="previous-posts">
                    <?php previous_posts_link('Novější příspěvky'); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <p>Žádné příspěvky nenalezeny. :(</p>
    <?php endif; ?>

    <?php wp_footer(); ?>
</body>
<?php get_footer(); ?>
