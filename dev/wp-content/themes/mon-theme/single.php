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
            <div class="col-12">
                <?php $articles = get_articles() ; ?>
                <?php if (count($articles ) > 0) : ?>
                    <hr>
                    <h3>Articles associés</h3>
                    <div class="row">
                    <?php foreach( $articles as $article ) : ?>
                        <article class="col-3 card">
                            <h4><?php echo $article->post_title ?> </h4>
                            <a href="<?php the_permalink($article->ID) ?>">voir l'article</a>
                        </article>
                    <?php endforeach ?>
                    </div>
                <?php endif ?>
            </div>  
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>