<?php
    /*
    Template Name: politique de confidentialité
    */
?>
<!-- modèle de page rdv dans 15 min // rdv 10h54 bon café !!! -->
<?php get_header() ?>
    <?php if( have_posts()) : ?>
        <?php while( have_posts() ) : ?>
            <?php the_post() ?>
            <div class="col-3">
                <?php the_title( "<h1>", "</h1>" ) ?>
                <?php edit_post_link( "modifier", "<div>", "</div>", $post, "btn btn-outline-success") ?>
            </div>
            <div class="col-9">
                <?php the_content() ?>
            </div>
        <?php endwhile ?>
    <?php endif  ?>
<?php get_footer() ?>