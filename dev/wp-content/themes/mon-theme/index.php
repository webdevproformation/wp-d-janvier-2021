<?php get_header() ?>
    <?php if( have_posts()) : ?>
        <?php while( have_posts() ) : ?>
            <?php the_post() ?>
            <div class="col-3">
                <div class="card">
                    <header class="card-header">
                        <h2><?php the_title() ?></h2>
                    </header>  
                    <div  class="card-body">
                        <?php the_content() ?>
                    </div>
                    <div  class="card-footer">
                        <a href="<?php the_permalink( ) ?>" class="btn btn-outline-dark btn-sm">lire la suite </a>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>