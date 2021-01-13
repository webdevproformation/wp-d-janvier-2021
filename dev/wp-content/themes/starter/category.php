<?php get_header() ?>
    <section class="row">
        <?php if( have_posts()) : ?>
            <?php while ( have_posts() ) : ?>
                <?php the_post() ?>
                <div class="col-4">
                    <div class="card">
                        <header class="card-header">
                            <h2><i class="bi bi-chat-square-text"></i> <?php the_title() ?> </h2>
                        </header>
                        <div class="card-body">
                            <?php the_excerpt() ?>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink() ?>">lire la suite <i class="bi bi-suit-heart"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
        <?php endif ?>
    </section>
<?php get_footer() ?>