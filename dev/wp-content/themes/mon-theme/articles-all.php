<?php if(function_exists("get_all_articles")) : ?>
<div class="col-12">
    <?php $articles = get_all_articles() ; ?>
    <?php if (count($articles ) > 0) : ?>
        <hr>
        <h3>Tous les Articles publiés</h3>
        <div class="row">
        <?php foreach( $articles as $article ) : ?>
            <article class="col-3 card  py-4">
                <h4><?php echo $article->post_title ?> </h4>
                <a href="<?php the_permalink($article->ID) ?>">voir l'article</a>
            </article>
        <?php endforeach ?>
        </div>
    <?php endif ?>
</div>  
<?php endif ?>