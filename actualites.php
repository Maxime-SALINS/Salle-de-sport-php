<?php
$article1 = [
    "url_img" => "assets/images/bg_temoignage.jpg",
    "date" => "28 OCTOBRE 2018",
    "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
    "url_lien" => "404.php",
];

$article2 = [
    "url_img" => "assets/images/bg_temoignage.jpg",
    "date" => "22 OCTOBRE 2018",
    "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
    "url_lien" => "404.php",
];

$article3 = [
    "url_img" => "assets/images/bg_temoignage.jpg",
    "date" => "18 OCTOBRE 2018",
    "titre" => "Titre de l'actualité sur une lignes",
    "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
    "url_lien" => "404.php",
];
?>

<div class="d-flex flex-row align-items-centre justify-content-around gy-0 w-100 ">
    <div class="row row-cols-12 row-cols-sm-3">
        <div class="mb-3">
            <img class="card-img-top radius" src="<?php echo $article1["url_img"]; ?>" alt="">
            <div class="card-body">
                <p class="mt-5 mb-0 style-p"><?php echo $article1["date"]; ?></p>
                <h5 class="fs-4 crad-title style-h5"><?php echo $article1["titre"]; ?></h5>
                <p class="mt-3 mb-0 "><?php echo $article1["text"]; ?></p>
                <a href="<?php echo $article1["url_lien"]; ?>" class="animation card-link fw-bold text-dark text-uppercase text-decoration-none">lire la suite</a>
            </div>
        </div>
        <div class="mb-3">
            <img class="card-img-top radius" src="<?php echo $article2["url_img"]; ?>" alt="">
            <div class="card-body">
                <p class="mt-5 mb-0 style-p"><?php echo $article2["date"]; ?></p>
                <h5 class="fs-4 crad-title style-h5"><?php echo $article2["titre"]; ?></h5>
                <p class="mt-3 mb-0 "><?php echo $article2["text"]; ?></p>
                <a href="<?php echo $article2["url_lien"]; ?>" class="animation card-link fw-bold text-dark text-uppercase text-decoration-none">lire la suite</a>
            </div>
        </div>
        <div class="mb-3">
            <img class="card-img-top radius" src="<?php echo $article3["url_img"]; ?>" alt="">
            <div class="card-body">
                <p class="mt-5 mb-0 style-p"><?php echo $article3["date"]; ?></p>
                <h5 class="fs-4 crad-title style-h5"><?php echo $article3["titre"]; ?></h5>
                <p class="mt-3 mb-0 "><?php echo $article3["text"]; ?></p>
                <a href="<?php echo $article3["url_lien"]; ?>" class="animation card-link fw-bold text-dark text-uppercase text-decoration-none">lire la suite</a>
            </div>
        </div>
    </div>
</div>