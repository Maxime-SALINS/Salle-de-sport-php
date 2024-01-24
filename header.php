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
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="tel:+330559478418"><i
                                    class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i> 05 59 47 84 18</a>
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
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btnc1"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btnc1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btnc1"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active">
                    <img src="assets/images/slider/slide_1.jpg" class="d-block w-100" alt="slider-1">
                    <div
                        class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                        <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                            OFFERT!</p>
                        <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2"
                            href="404.php">PLUS D'INFOS</a>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="assets/images/slider/slide_2.jpg" class="d-block w-100" alt="slide_2">
                    <div
                        class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                        <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                            OFFERT!</p>
                        <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2"
                            href="404.php">PLUS D'INFOS</a>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="assets/images/slider/slide_3.jpg" class="d-block w-100" alt="slide_3">
                    <div
                        class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                        <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                            OFFERT!</p>
                        <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2"
                            href="404.php">PLUS D'INFOS</a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>