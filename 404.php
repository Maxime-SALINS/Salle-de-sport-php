<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page | ERROR 404</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <header>
    <nav class="p-0 w-100 navbar navbar-expand-lg position-absolute z-2">
        <div class="p-0 mx-5 container-fluid">
            <a class="navbar-brand" href="index.php"><img id="logo" src="assets/images/logo.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler bg-white border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item style-hover">
                        <a class="style-a fs-4 nav-link active text-light text-uppercase" aria-current="page" href="404.php">L'équipe</a>
                    </li>
                    <li class="nav-item dropdown style-hover">
                        <a class="style-a fs-4 nav-link dropdown-toggle text-light text-uppercase"  href="presentation.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Les Activités
                        </a>
                        <ul class="dropdown-menu bg-black border border-0" aria-labelledby="navbarDropdown">
                            <li><a class="style-a dropdown-item text-light text-uppercase style-lien" href="404.php">Le Cycling</a></li>
                            <li><a class="style-a dropdown-item text-light text-uppercase style-lien" href="presentation.php">Le Training Fonctionnel</a></li>
                            <li><a class="style-a dropdown-item text-light text-uppercase style-lien" href="404.php">Le Crossfit</a></li>
                            <li><a class="style-a dropdown-item text-light text-uppercase style-lien" href="404.php">Personal Training-Coach Personnel</a></li>
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
                      <a class="style-a fs-4 nav-link text-light text-uppercase" href="tel:+330559478418"><i class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i> 05 59 47 84 18</a>
                    </div>
                </div>
                <div class="navbar-nav">
                    <div class="nav-item d-flex">
                      <a class="nav-link" href="404.php"><i class="fa-brands fa-instagram fa-flip" style="color: #ffffff;"></i></a>
                      <a class="nav-link" href="404.php"><i class="fa-brands fa-facebook fa-flip" style="color: #ffffff;"></i></a>
                      <a class="nav-link" href="404.php"><i class="fa-brands fa-tiktok fa-flip" style="color: #f7f7f7;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <img class="img-fluid w-100"src="assets/images/visuel/visuel_2.jpg" alt="image de sport">
  </header>
<section class="container-fluid text-center p-5 ">
  <h2 class="p-5 display-1"> OUPS ! ERREUR 404</h2>
  <h3 class="p-4 fw-bold">LA PAGE QUE VOUS RECHERCHEZ SEMBLE INTROUVABLE.</h3>
  <img class="img-fluid" src="assets/images/img error 404.png" alt="error 404">
</section>

<!--       Appeler le footer     -->
<?php require 'footer.php';?>