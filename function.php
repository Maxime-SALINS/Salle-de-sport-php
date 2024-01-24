<?php function navLink ($arg1 , $arg2 , $arg3=false){
    return 
        '<li class="nav-item style-hover">
            <a class="style-a fs-4 nav-link active text-light text-uppercase" aria-current="page" href="' . $arg1 . '">' . $arg2 . '</a>
        </li>';

} ?>

<?php function drowpdowlink ($arg1 , $arg2){
    return 
    '<li>
        <a class="style-a dropdown-item text-light text-uppercase style-lien" href="'. $arg1 .'">' . $arg2 . '</a>
    </li>';
} ?>

<?php 
// $Maxime = "Maxime";
// $salins = "salins";

// echo "Bonjour $Maxime$salins";
// echo 'Bonjour ' . $Maxime . ' ' . $salins;
?>
