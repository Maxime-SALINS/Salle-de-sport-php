<!-- Appeler le Header -->
<?php $title; ?>
<?php require('header.php'); ?>
<!-- Début du Carousel -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btnc1" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btnc1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btnc1" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item position-relative active">
            <img src="assets/images/slider/slide_1.jpg" class="d-block w-100" alt="slider-1">
            <div class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                    OFFERT!</p>
                <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2" href="404.php">PLUS D'INFOS</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="assets/images/slider/slide_2.jpg" class="d-block w-100" alt="slide_2">
            <div class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                    OFFERT!</p>
                <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2" href="404.php">PLUS D'INFOS</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="assets/images/slider/slide_3.jpg" class="d-block w-100" alt="slide_3">
            <div class="top-67 carousel-caption d-none d-md-block position-absolute start-50 translate-middle w-100">
                <p class="d-block fs-1 mb-5 style-p w-100">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS
                    OFFERT!</p>
                <a class="style-a text-light bg-transparent text-decoration-none border border-3 px-4 py-2" href="404.php">PLUS D'INFOS</a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- FIN du Carousel -->
<!-- PARTIE 1 LE STUDIO SPORT & COACHING SALLE DE SPORT FITNESS ET CROSSFIT A BIARRITZ -->
<section class="p-5 container style-marge-section">
    <h2 class="text-center mb-0">LE STUDIO SPORT & COACHING,<br> SALLE DE SPORT, FITNESS ET CROSSFIT A BIARRITZ.</h2>
    <img class="d-block mx-auto mb-3 p-3" src="assets/images/bg_titre.jpg" alt="">
    <div class="container-fluid">
        <p class="px-5">
            Aujourd'hui beaucoup de salles de sport vendent des abonnements où vous avez accès à tous les services du club (cours collectifs, plateau musculation...) mais combien vous
            connaissent au point de connaitre vos objectifs et de savoir si vous êtes en bonne voie pour les atteindre ?
        </p>
        <p class="px-5">
            Beaucoup de gens estiment être livrés à eux même dans ce genre de salle. Nous avons choisi la direction diamétralement opposée ! Notre seule priorité ? La qualité du Ser-vice. Notre nouveau concept de salle de sport SUR MESURE trouve une solution adaptée à votre budget et vos disponibilités. Nous oeuvrons pour créer une ambiance conviviale tout en vous aidant à vous dépasser dans l'effort et ce, pour maximiser vos chances d'obtenir des résultats. Les sportifs de Haut-Niveau ont des entraîneurs et des prépar
            rateurs physiques pour atteindre leurs objectifs. Alors, pourquoi pas vous ?
        </p>
        <p class="text-center">
            Vous voulez plus de Motivation, plus de Résultats, plus vite...<strong> Alors bienvenue au Studio Sport & Coaching !</strong>
        </p>
    </div>
</section>

<main class="container-fluid row g-0 text-center">
    <section>
        <h2 class="text-center text-uppercase mb-0">Les Activités proposées au studio sport biarritz</h2>
        <img class="d-block mx-auto mb-3 p-3" src="assets/images/bg_titre.jpg" alt="ligne">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xxl-4">
            <div id="act1" class="position-relative col">
                <div class="card-body w-100 position-absolute top-50 start-50 translate-middle  text-light">
                    <img class="mb-4" src="assets/images/activites/icon_poids.png" alt="icon poids">
                    <h5 class="card-title style-h5">PERSONNAL TRAINING</h5>
                    <p class="card-text">Le service 100% individualisé et adapté vos disponibilités, votre condition physique et vos objectifs.</p>
                    <a href="404.php" class="animation-a fw-bold text-white text-decoration-none">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div id="act2" class="position-relative text-center col">
                <div class="card-body w-100 position-absolute top-50 start-50 translate-middle  text-light">
                    <img class="mb-4" src="assets/images/activites/icon_velo.png" alt="icon vélo">
                    <h5 class="card-title style-h5">CYCLING</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque architecto dignissimos eos accusantium voluptatibus magnam.</p>
                    <a href="404.php" class="animation-a fw-bold text-white text-decoration-none">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div id="act3" class="position-relative text-center col">
                <div class="card-body w-100 position-absolute top-50 start-50 translate-middle  text-light">
                    <img class="mb-4" src="assets/images/activites/icon_corde.png" alt="icon corde">
                    <h5 class="card-title style-h5">TRAINING FONCTIONNEL</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque architecto dignissimos eos accusantium voluptatibus magnam.</p>
                    <a href="presentation.php" class="animation-a fw-bold text-white text-decoration-none">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div id="act4" class="position-relative text-center col">
                <div class="card-body w-100 position-absolute top-50 start-50 translate-middle  text-light">
                    <img class="mb-4" src="assets/images/activites/icon_alter.png" alt="icon poids">
                    <h5 class="card-title style-h5">CROSSFIT</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque architecto dignissimos eos accusantium voluptatibus magnam.</p>
                    <a href="404.php" class="animation-a fw-bold text-white text-decoration-none">EN SAVOIR PLUS</a>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="container p-5">
    <h2 class="text-center mb-0">NOS DERNIERES ACTUALITES</h2>
    <img class="d-block mx-auto p-3" src="assets/images/bg_titre.jpg" alt="">
    <div class="d-flex flex-row align-items-centre justify-content-around gy-0 w-100 ">
        <div class="row row-cols-12 row-cols-sm-3">
            <?php require('actualites.php') ?>
        </div>
    </div>
</section>

<section class="p-5 container-fluid style-section-partenaire text-center">
    <h2 class="text-light text-uppercase">Studio sport & coaching, nos partenaire</h2>
    <img class="d-block mx-auto p-3" src="assets/images/bg_titre.jpg" alt="ligne">
    <p class="my-4 text-light">En tant que membre du Studio Sport & Coaching, vous bénéficierez dans ces établissement d'avantges exclusifs. <a class="text-warning" href="404.php">Cliquez ici</a> pour en savoir plus.</p>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xxl-5 g-0 p-5 text-center">
            <div class="col d-flex align-items-center justify-content-center p-4 m-75">
                <img src="assets/images/partenaires/mini.png" class="img-fluid w-100" alt="logo-mini">
            </div>
            <div class="col d-flex align-items-center justify-content-center p-4 m-75">
                <img src="assets/images/partenaires/massage.png" class="img-fluid w-100" alt="">
            </div>
            <div class="col d-flex align-items-center justify-content-center p-4 m-75">
                <img src="assets/images/partenaires/tellechea.png" class="img-fluid w-75" alt="">
            </div>
            <div class="col d-flex align-items-center justify-content-center p-4 m-75">
                <img src="assets/images/partenaires/ocean.png" class="img-fluid w-100" alt="">
            </div>
            <div class="col d-flex align-items-center justify-content-center p-4 m-75">
                <img src="assets/images/partenaires/decathlon.png" class="img-fluid w-100" alt="">
            </div>
        </div>
    </div>

</section>
<!--       Appeler le footer     -->
<?php require 'footer.php'; ?>