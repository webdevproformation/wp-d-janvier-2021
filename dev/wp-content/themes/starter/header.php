<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil de mon site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <?php wp_head() ?>
</head>
<body>
    <div class="container">
        <header class="row mb-3">
            <div class="col-2">
                <h1 class="h2"><?php echo get_option("blogname") ?></h1>
                <p class="mb-0"><?php echo get_option("blogdescription") ?></p>
            </div>
            <nav class="col-10 navbar navbar-expand navbar-light bg-white">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(5) ?>" class="nav-link">
                           Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(7) ?>" class="nav-link">Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(13) ?>" class="nav-link">Article 1</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Les articles <i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                <a href="<?php echo get_category_link( 2 )?>" class="nav-link text-center">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo get_category_link( 3 )?>" class="nav-link text-center">Informatique</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo get_permalink(9) ?>" class="nav-link">Nous contacter</a>
                    </li>
                </ul>
                <form class="form-inline d-flex">
                    <input type="text" class="form-control">
                    <input type="submit" class="btn btn-outline-dark btn-sm ms-2">
                </form>
            </nav>
        </header>