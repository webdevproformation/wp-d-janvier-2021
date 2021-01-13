<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil de mon site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head() ?>
</head>
<body>
    <div class="container">
        <header class="row mb-3">
            <div class="col-4">
                <h1 class="h2"><?php echo get_option("blogname") ?></h1>
                <p class="mb-0"><?php echo get_option("blogdescription") ?></p>
            </div>
            <nav class="col-8 navbar navbar-expand navbar-light bg-white">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Présentation</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Nous contacter</a>
                    </li>
                </ul>
                <form class="form-inline d-flex">
                    <input type="text" class="form-control">
                    <input type="submit" class="btn btn-outline-dark btn-sm ms-2">
                </form>
            </nav>
           
        </header>