<?php
// $article1 = [
//     "url_img" => "assets/images/bg_temoignage.jpg",
//     "date" => "28 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
//     "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
//     "url_lien" => "404.php",
// ];

// $article2 = [
//     "url_img" => "assets/images/bg_temoignage.jpg",
//     "date" => "22 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
//     "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
//     "url_lien" => "404.php",
// ];

// $article3 = [
//     "url_img" => "assets/images/bg_temoignage.jpg",
//     "date" => "18 OCTOBRE 2018",
//     "titre" => "Titre de l'actualité sur une lignes",
//     "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
//     "url_lien" => "404.php",
// ];
?>

<?php
$articles = [
    [
        "url_img" => "assets/images/bg_temoignage.jpg",
        "date" => "28 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
        "url_lien" => "404.php",
    ],
    [
        "url_img" => "assets/images/bg_temoignage.jpg",
        "date" => "22 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une ou deux lignes en majuscules",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
        "url_lien" => "404.php",
    ],
    [
        "url_img" => "assets/images/bg_temoignage.jpg",
        "date" => "18 OCTOBRE 2018",
        "titre" => "Titre de l'actualité sur une lignes",
        "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam…",
        "url_lien" => "404.php",
    ]
];

foreach ($articles as $article) : ?>

    <div class="mb-3">
        <img class="card-img-top radius" src="<?php echo $article["url_img"]; ?>" alt="">
        <div class="card-body">
            <p class="mt-5 mb-0 style-p"><?php echo $article["date"]; ?></p>
            <h5 class="fs-4 crad-title style-h5"><?php echo $article["titre"]; ?></h5>
            <p class="mt-3 mb-0 "><?php echo $article["text"]; ?></p>
            <a href="<?php echo $article["url_lien"]; ?>" class="animation card-link fw-bold text-dark text-uppercase text-decoration-none">lire la suite</a>
        </div>
    </div>

<?php endforeach; ?>