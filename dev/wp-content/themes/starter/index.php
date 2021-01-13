<?php get_header() ?>
    <section class="row">
        <?php if( have_posts() ) :  ?>
            <?php while( have_posts() ) : ?>
                <?php the_post() ; ?>
                <!-- la boucle crée une variable $post  -->
                <h2><?php the_title() ?></h2>
                <div>
                    <?php the_content() ?>
                </div>
            <?php endwhile ?>
        <?php endif ?>
    </section>
<?php get_footer() ?>