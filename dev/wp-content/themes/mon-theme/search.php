<?php get_header() ?>

<?php if( have_posts() ) : ?>
    <!--  si on a des articles qui contiennent le mot clé recherché -->
    <h2>voici les résultats pour <b><?php echo get_search_query() ?></b></h2>
    <?php while( have_posts() ) : ?>
        <?php the_post() ?>
        <div class="col-6 mb-3">
            <article class="card">
                <header class="card-header">
                    <?php the_title() ?>
                </header>
                <div class="card-header">
                    <a href="<?php the_permalink() ?>" class="btn btn-outline-success">voir l'article</a>
                </div>
            </article>
        </div>
    <?php endwhile ?>
<?php else : ?>
    <h2>Aucun article trouvé pour le mot recherché</h2>
    <p>Relancer une recherche :</p>
    <?php echo get_template_part( "search-form" ) ?>
    <!--  on n'a pas de contenu pour le texte recherché -->
<?php endif ?>

<?php get_footer() ?>