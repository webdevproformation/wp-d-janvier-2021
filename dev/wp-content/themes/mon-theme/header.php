<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>
<body>
    <div <?php body_class("container"); ?>>
        <header class="row">
            <nav class="col-12 navbar navbar-expand bg-dark navbar-dark">
                <?php echo mon_theme_generate_menu() ?>
                <form action="<?php echo esc_url(home_url( '/' )); ?>" class="d-flex ms-2">
                    <input type="text" name="s" placeholder="rechercher" class="form-control py-1 px-3" value="<?php echo get_search_query() ?>">
                    <input type="submit" class="btn btn-outline-light btn-sm ms-2 p-1">
                </form>
            </nav>
        </header>
        <section class="row mt-3">