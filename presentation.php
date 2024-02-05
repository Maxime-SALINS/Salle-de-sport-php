<!-- Appel du fichier header.php -->
<?php $title = "Page | Présentation"; ?>
<?php require("header.php") ?>
<!--................................  BACKGROUND NAVBAR ..................................................-->
<img class="img-fluid w-100" src="assets/images/visuel/visuel_3.jpg" alt="image de sport">
<!--................................ PARTIE 1 DE LA PAGE PRESENTATION LE TRAINING FONCTIONNEL ..................................-->
<section>
  <h2 class="text-center pt-5">LE TRAINING FONCTIONNEL</h2>
  <img class="d-block mx-auto p-3" src="assets/images/bg_titre.jpg" alt="ligne-soutitre">
  <div class="container-fluid p-5">
    <div class="row ">
      <div class="col-sm-3 col-xl-6 p-3">
        <div class="p-4">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas recusandae sin Lorem ipsum dolor, sit
            amet consectetur adipisicing elit. Perferendis repellat repudiandae sunt maiores, adipisci sint iste odio
            explicabo rerum, dicta deleniti dolor. Nostrum deleniti veniam itaque praesentium, ratione ad autem.
          </p>
          <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem harum sapiente quidem eum inventore magni,
            voluptatum omnis vitae atquecommodi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
            accusamus quibusdam ullam fugit molestiae sapiente, laudantium repudiandae, enim at doloremque vero nam
            aspernatur ex illum quasi perspiciatis consectetur, possimus impedit.
          </p>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, nesciunt fugiat! Nesciunt quisquam quas
            illum?
          </p>
        </div>
        <div class="row justify-content-around">
          <div class=" col-1 col-sm-12 col-xl-1 btnm1 btn2 text-center ">
            <a class="text-light text-decoration-none fw-bold" href="404.php">VOIR NOS OFFRES ET FORMULES</a>
          </div>
          <div class="col-1 col-sm-12 col-xl-1 btnm1 btn2 text-center ">
            <a class="text-light text-decoration-none fw-bold" href="contact.php">CONTACT ET RESERVATIONS</a>
          </div>
        </div>
      </div>
      <!--.................................. CAROUSEL DE LA PAGE PRESENTATION ..................................-->
      <div class="col-sm-3 col-xl-6 p-3">
        <div id="carouselExampleIndicators" class="carousel slide cacarrousel" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btnc1" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btnc1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btnc1" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/slider/crossfit.jpg" class="img-fluid" alt="photo carousel">
            </div>
            <div class="carousel-item">
              <img src="assets/images/slider/cycling.jpg" class="img-fluid" alt="photo carousel">
            </div>
            <div class="carousel-item">
              <img src="assets/images/slider/functional-training.jpg" class="img-fluid" alt="photo carousel">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
        </div>
      </div>
    </div>
  </div>
</section>
<!--                    PARTIE 2 DE LA PAGE PRESENTATION LES ATELIERS                             -->
<section class="container p-5">
  <h2 class="text-center mb-0">les ateliers présents dans le training Fonctionnel</h2>
  <img class="d-block mx-auto p-3" src="assets/images/bg_titre.jpg" alt="">
  <div class="d-flex flex-row align-items-centre justify-content-around gy-0 w-100 ">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-xxl-4">
      <div>
        <img class="card-img-top radius" src="assets/images/bg_temoignage.jpg" alt="">
        <div class="card-body">
          <h3 class="card-title text-center mt-4 mb-3">TRX CORE</h3>
          <p class="card-text">Ce cours a pour but d'améliorer votre force fonctionelle ainsi que votre mobilité à
            l'aide de sangles en suspension.
            L'accent est mis sur le CORE (centre du corps ) afin d'obtenir un gainage, une sangle abdominale résistante
            à toute épreuve et un renforcement musculaire. En complément, des automassages et des exercices de mobilités
            et d'étirements sont également présents dans ce cours.
          </p>
          <p class="card-text"> <strong>Durée:</strong> 45 minutes</p>
        </div>
      </div>
      <div>
        <img class="card-img-top radius" src="assets/images/bg_temoignage.jpg" alt="">
        <div class="card-body">
          <h3 class="card-title text-center mt-4 mb-3">BOXE</h3>
          <p class="card-text">Ici un seul mot d'ordre: se défouler i
            Mélange de karaté, de boxe , de kick boxing et de MMA, le cours se déroule face a un sac de frappe, gants
            aux poings et accompagné de petits matériels: corde à sauter, slam ball
            L'objectif ici est d'améliorer vos qualités de résistance à leffort, de vitesse, de
          </p>
          <p class="card-text"> <strong>Durée:</strong> 30 minutes</p>
        </div>
      </div>
      <div>
        <img class="card-img-top radius" src="assets/images/bg_temoignage.jpg" alt="">
        <div class="card-body">
          <h3 class="card-title text-center mt-4 mb-3">HIIT</h3>
          <p class="card-text">Le HIT est l'acronyme de Ligh Intensity.
            Inferval training en anglais.
            cet entrainement à haute Intensité réalisé avec le poids du corps, alterne périodes d'efforts courts et
            intenses et période de récupération active, dans le but de bruler un maximum de calories.
          </p>
          <p class="card-text"> <strong>Durée:</strong> 30 minutes</p>
        </div>
      </div>
      <div>
        <img class="card-img-top radius" src="assets/images/bg_temoignage.jpg" alt="">
        <div class="card-body">
          <h3 class="card-title text-center mt-4 mb-3">TRX FUSION</h3>
          <p class="card-text">Un excellent programme pour travailler
            Pensemble du corps et transpirer à grosses gouttes. Grâce à des exercices d'une intensité allant de modérée
            à forte, vous allez sculpter et tonifier votre corps tout en perdant du poids.
            Un bon compromis entre renforcement musculaire et cardin.
          </p>
          <p class="card-text"> <strong>Durée:</strong> 30 minutes</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--       Appeler le footer     -->
<?php require 'footer.php'; ?>