<?php get_header() ?>
    <?php if( have_posts()) : ?>
        <?php while( have_posts() ) : ?>
            <?php the_post() ?>
            <div class="col-12">
                <h2><?php the_title() ?></h2>
                <?php the_post_thumbnail("thumbnail") ?> 
                <div>
                    <?php the_content() ?>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>