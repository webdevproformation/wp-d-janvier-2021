<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    <div <?php body_class("container"); ?>>
        <header class="row">
            <nav class="col-12 navbar navbar-expand bg-dark navbar-dark">
                <a href="<?php echo get_option("home") ?>" class="navbar-brand">
                    <img src="<?php echo get_template_directory_uri() ."/img/logo.png" ?>" alt="">
                    <?php echo get_option("blogname") ?> 
                </a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo get_option("home") ?>" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informatique</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a href="<?php echo get_permalink( 13 ) ?>">Article 1</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="<?php echo get_permalink( 18 ) ?>">Article 2</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="<?php echo get_permalink( 20 ) ?>">Article 3</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="<?php echo get_permalink( 22 ) ?>">Article 4</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="row mt-3"  >