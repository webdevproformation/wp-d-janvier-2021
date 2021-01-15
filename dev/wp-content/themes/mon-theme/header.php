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
        <?php echo generate_banniere() ?>
        <header class="row">
            <nav class="col-12 navbar navbar-expand bg-dark navbar-dark">
                <?php echo mon_theme_generate_menu() ?>
                <?php echo get_template_part( "search-form" ) ?>
            </nav>
        </header>
        <section class="row mt-3">