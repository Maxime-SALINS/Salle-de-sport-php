<!-- Appel du fichier header.php -->
<?php $title = "Page | Contact"; ?>
<?php require("header.php")?>
<!-- Début du body -->
<img class="img-fluid w-100" src="assets/images/visuel/visuel_2.jpg" alt="image de sport">

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