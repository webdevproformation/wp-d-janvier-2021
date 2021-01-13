<?php get_header() ?>
<section class="row">
    <?php if( have_posts()) : ?>
        <?php while ( have_posts() ) : ?>
            <?php the_post() ?>
            <div class="col-6">
                <h2><?php the_title() ?></h2>
                <?php edit_post_link( "modifier", "<div class='btn btn-outline-success'>", "</div>", $post ) ?>
            </div>
            <div class="col-6">
                <?php the_content() ?>
            </div>
        <?php endwhile ?>
    <?php  endif ?>
</section>
<?php get_footer() ?>