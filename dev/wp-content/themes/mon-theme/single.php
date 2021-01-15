<?php get_header() ?>
    <?php if( have_posts()) : ?>
        <?php while( have_posts() ) : ?>
            <?php the_post() ?>
            <div class="col-10" >
                <h2><?php the_title() ?></h2>
                <?php the_post_thumbnail("thumbnail") ?> 
                <div id="contenu">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-2" id="sommaire"></div>
            <?php echo get_template_part( "articles-informatique" ) ?>
            <?php echo get_template_part( "articles-all" ) ?>
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>