<?php

session_start();

$style = './public/css/style.css';
$cssreset = './public/css/cssreset.css';
$header = './public/css/header.css';
$footer = './public/css/footer.css';
$button = './public/css/button.css';
$burgercss = './public/css/burger.css';
$modal = './public/css/modal.css';
$connexion = './public/css/connexion.css';
$account = './public/css/account.css';

$scriptjs = './public/js/script.js';
$burgerjs = './public/js/burger.js';
$modaljs = './public/js/modal.js';

$logoig = './public/images/instagram.png';
$logofb = './public/images/logo-de-lapplication-facebook.png';
$logouser =  './public/images/user.png';
$logopanier =  './public/images/panier.png';
$logophone = './public/images/telephone.png';
$yellowarw = './public/images/flechejaune.png';
$rectangle = './public/images/Rectangle2.png';

$logout = './app/controller/logout.php';
$indexlink = './index.php';



include './app/utils/bdd.php';
include './app/utils/functions.php';
include './app/view/header.php';
include './app/view/home-section.php';
include './app/view/footer.php';

?>
