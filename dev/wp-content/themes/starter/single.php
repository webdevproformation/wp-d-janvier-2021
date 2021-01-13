<?php get_header() ?>
    <section class="row">
        <?php if( have_posts()) : ?>
            <?php while (  have_posts() ) : ?>
                <?php the_post() ?>
                <div class="col-6">
                    <?php the_content() ?>
                </div>
                <div class="col-6">
                    <h2><?php the_title() ?></h2>
                    <!-- ajouter une image en dessous de mon titre --> 
                    <!-- utiliser l'image à la une dans gutenberg --> 
                    <?php edit_post_link( "modifier", "<div>", "</div>",$post , "btn btn-danger" ) ?>
                </div>
            <?php endWhile ?>
        <?php endif ?>
    </section>
<?php get_footer() ?>