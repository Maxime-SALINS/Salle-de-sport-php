<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | Contact</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom-theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-------------------- NAVBAR---------------------->
    <header>
        <nav class="p-0 w-100 navbar navbar-expand-lg position-absolute z-2">
            <div class="p-0 mx-5 container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo" src="assets/images/logo.png" class="img-fluid"
                        alt=""></a>
                <button class="navbar-toggler bg-white border-bottom" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link active text-light text-uppercase" aria-current="page"
                                href="404.php">L'équipe
                            </a>
                        </li>
                        <li class="nav-item dropdown style-hover">
                            <a class="style-a fs-4 nav-link dropdown-toggle text-light text-uppercase"
                                href="presentation.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Les Activités
                            </a>
                            <ul class="dropdown-menu bg-black border border-0" aria-labelledby="navbarDropdown">
                                <li><a class="style-a dropdown-item text-light text-uppercase style-lien"
                                        href="404.php">Le
                                        Cycling</a></li>
                                <li><a class="style-a dropdown-item text-light text-uppercase style-lien"
                                        href="presentation.php">Le Training Fonctionnel</a></li>
                                <li><a class="style-a dropdown-item text-light text-uppercase style-lien"
                                        href="404.php">Le
                                        Crossfit</a></li>
                                <li><a class="style-a dropdown-item text-light text-uppercase style-lien"
                                        href="404.php">Personal Training-Coach Personnel</a></li>
                            </ul>
                        </li>
                        <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="404.php">Nos Offres</a>
                        </li>
                        <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="404.php">Planning</a>
                        </li>
                        <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="404.php">Le Blog</a>
                        </li>
                        <li class="nav-item style-hover">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="style-a fs-4 nav-link text-light text-uppercase" href="tel:+330559478418"><i
                                    class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i> 05 59 47 84
                                18</a>
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
        <img class="img-fluid w-100" src="assets/images/visuel/visuel_2.jpg" alt="image de sport">
    </header>

<!-- ............................ Début de la section contact .................................... -->
    <div class="container p-5">
        <div class="row justify-content-center">
            <!-- ............................... Section Nos coordonnées ............................. -->
            <section class="col-12 col-md-6 col-lg-3">
                <h2 class="mb-0 text-uppercase">nos coordonnées</h2>
                <img src="assets/images/bg_titre.jpg" alt="ligne-soutitre">
                <div class="mt-5 ms-5 text-start">
                    <div>
                        <p class="mb-0 fw-bold">Studio Sport & Coaching</p>
                        <p class="mb-0">01 Allée Marie Politzer</p>
                        <p>64200 Biarritz</p>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Téléphone</p>
                        <p>05 59 47 84 18</p>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Horaires</p>
                        <P class="mb-0">Du lundi au vendredi</P>
                        <p class="mb-0">de 8h à 14h, de 16h à 21h</p>
                        <p class="mb-0">Le samedi</p>
                        <p>de 10h à 13h</p>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold">Email</p>
                        <p>contact (at) studiobiarritz.com ou via ce formulaire</p>
                    </div>
                </div>
            </section>
            <!-- ............................... Section Formulaire de contact ............................. -->
            <section class="col-12 col-md-6 col-lg-9">
                <h2 class="mb-0">FORMULAIRE DE CONTACT</h2>
                <img src="assets/images/bg_titre.jpg" alt="ligne-soutitre">
                <div class="mt-5">
                    <form action="#">
                        <div class="row mb-3">
                            <div class="mt-1 col-12 col-xxl-8">
                                <input class="p-2 col-12 form-control bg-secondary-subtle" id="name" type="text" placeholder="VOTRE NOM" aria-label="nom">
                            </div>
                            <div class="mt-1 col-12 col-xxl-4">
                                <input class="p-2 col-12 form-control bg-secondary-subtle" id="firstname" type="text" placeholder="VOTRE PRENOM" aria-label="prénom">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="mt-1 col-12 col-xxl-4">
                                <input class="p-2 col-12 form-control bg-secondary-subtle" id="phone" type="tel" placeholder="VOTRE TELEPHONE">
                            </div>
                            <div class="mt-1 col-12 col-xxl-8">
                                <input class="p-2 col-12 form-control bg-secondary-subtle" id="email" type="email" placeholder="VOTRE EMAIL">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <input class="p-2 col-12 form-control bg-secondary-subtle" id="sujet" type="text" placeholder="SUJET">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea class="h-textarea p-2 col-12 form-control bg-secondary-subtle" id="message" placeholder="VOTRE MESSAGE"></textarea>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="color-btn text-light px-4 py-1 fw-bold">ENVOYER</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- ............................... Localisation du Studio sport ............................. -->
    <div>
        <img class="img-fluid w-100" src="assets/images/map.png" alt="localisation du club de sport">
    </div>
    
<!--       Appeler le footer     -->
<?php require 'footer.php';?>