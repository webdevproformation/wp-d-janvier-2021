<?php get_header() ?>

<div class="col-12 bg-warning d-flex align-items-center justify-content-center">
    <div>
        <h1>
            Erreur 404 <i class="bi bi-bug-fill"></i>
            <small>la page recherchée n'est plus disponible</small>
        </h1>
        <p>Lancer une recherche :</p>
        <?php echo get_template_part( "search-form" ) ?>
    </div>
</div>

<?php get_footer() ?>