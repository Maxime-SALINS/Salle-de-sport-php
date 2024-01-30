<!-- Appeler le Header -->
<?php $title;?>
<?php require('header.php'); ?>

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
                <?php require('actualites.php')?>   
            </div>
        </div>
    </section>


    <section class="p-5 container-fluid style-section-partenaire text-center">
        <h2 class="text-light text-uppercase">Studio sport & coaching, nos partenaire</h2>
        <img class="d-block mx-auto p-3" src="assets/images/bg_titre.jpg" alt="ligne">
        <p class="my-4 text-light">En tant que membre du Studio Sport & Coaching, vous bénéficierez dans ces établissement d'avantges exclusifs. <a class="text-warning" href="404.php" >Cliquez ici</a> pour en savoir plus.</p>

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
<?php require 'footer.php';?>