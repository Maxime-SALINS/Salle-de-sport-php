<?php require ('function.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo !empty($title) ? $title  : "Page | Acceuil" ?></title>
    <!-- <title><?php // echo $title ?? "Page | Acceuil" ?></title> -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/custom-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!--                            NAVBAR                                 -->
    <header>
        <nav class="p-0 w-100 navbar navbar-expand-lg position-absolute z-2">
            <div class="p-0 mx-5 container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo" src="assets/images/logo.png" class="img-fluid"
                        alt=""></a>
                <button class="navbar-toggler bg-white border-bottom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link active text-light text-uppercase" aria-current="page" href="404.php">L'équipe</a>
                        </li> -->
                        <?php echo navLink("404.php" , "L'équipe") ?>
                        <li class="nav-item dropdown style-hover">
                            <a class="style-a fs-4 nav-link dropdown-toggle text-light text-uppercase"
                                href="presentation.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Les Activités
                            </a>
                            <ul class="dropdown-menu bg-black border border-0" aria-labelledby="navbarDropdown">
                                <?php echo drowpdowlink ("404.php" , "Le Cycling")?>
                                <?php echo drowpdowlink ("presentation.php" , "Le Training Fonctionnel")?>
                                <?php echo drowpdowlink ("404.php" , "Le Crossfit")?>
                                <?php echo drowpdowlink ("404.php" , "Personal Training-Coach Personnel")?>
                            </ul>
                        </li>
                        <?php echo navLink("404.php" , "Nos Offres") ?>
                        <?php echo navLink("404.php" , "Planning") ?>
                        <?php echo navLink("404.php" , "Le Blog") ?>
                        <?php echo navLink("contact.php" , "Contact") ?>
                    </ul>
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="tel:+330559478418"><i class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i> 05 59 47 84 18</a>
                        </div>
                    </div>
                    <div class="navbar-nav">
                        <div class="nav-item d-flex">
                            <a class="nav-link" href="404.php"><i class="fa-brands fa-instagram fa-flip"
                                    style="color: #ffffff;"></i></a>
                            <a class="nav-link" href="404.php"><i class="fa-brands fa-facebook fa-flip"
                                    style="color: #ffffff;"></i></a>
                            <a class="nav-link" href="404.php"><i class="fa-brands fa-tiktok fa-flip"
                                    style="color: #f7f7f7;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>