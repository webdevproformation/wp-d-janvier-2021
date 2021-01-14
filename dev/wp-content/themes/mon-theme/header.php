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
            <?php echo mon_theme_generate_menu() ?>
        </header>
        <section class="row mt-3">