<?php
session_start();

$style = '../../public/css/style.css';
$cssreset = '../../public/css/cssreset.css';
$header = '../../public/css/header.css';
$footer = '../../public/css/footer.css';
$button = '../../public/css/button.css';
$burgercss = '../../public/css/burger.css';
$modal = '../../public/css/modal.css';
$connexion = '../../public/css/connexion.css';
$account = '../../public/css/account.css';

$scriptjs = '../../public/js/script.js';
$burgerjs = '../../public/js/burger.js';
$modaljs = '../../public/js/modal.js';

$logoig = '../../public/images/instagram.png';
$logofb = '../../public/images/logo-de-lapplication-facebook.png';
$logouser =  '../../public/images/user.png';
$logopanier =  '../../public/images/panier.png';
$logophone = '../../public/images/telephone.png';
$yellowarw = '../../public/images/flechejaune.png';
$rectangle = '../../public/images/Rectangle2.png';
$indexlink = '../../index.php';
$logout = 'logout.php';

include '../utils/bdd.php';
include '../utils/functions.php';
include '../model/model_users.php';


$lastName = $_SESSION['lastName'];
$firstName = $_SESSION['firstName'];
$email = $_SESSION['email'];


$messageAdd="";
$actionForm="account.php";
$titreForm="Modification";

$lastNameFill = $_SESSION['lastName'];
$firstNameFill = $_SESSION['firstName'];
$emailFill = $_SESSION['email'];


//MODIFICATION
//ETAPE 1 : vérifie que le modif a été submit
if(isset($_POST['submit_add'])){

    //ETAPE 2 : vérifie les champs vide
    if(isset($_POST['lastNameAdd']) and !empty($_POST['lastNameAdd'])
        and isset($_POST['firstNameAdd']) and !empty($_POST['firstNameAdd'])
        and isset($_POST['emailAdd']) and !empty($_POST['emailAdd'])
        and isset($_POST['passwordAdd']) and !empty($_POST['passwordAdd'])){

            //ETAPE 3 : nettoie les données
            $lastName = sanitize($_POST['lastNameAdd']);
            $firstName = sanitize($_POST['firstNameAdd']);
            $email = sanitize($_POST['emailAdd']);
            $password = sanitize($_POST['passwordAdd']);

            //ETAPE 4 : vérifie le format du mail
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                //ETAPE 5 : vérifie correspondance des mot de passe
                $user = getUserByMail($_SESSION['email'],$bdd);
                if(password_verify($password,$user[0]['mdp_user'])){

                    //ETAPE 6 : on vérifie que l'email est disponible
                    $user = getUserByMail($email,$bdd);
                    if(empty($user) || $email == $user[0]['email'] ){
                        //ETAPE 7 : mise à jour du user
                        $messageAdd=updateUserById($_SESSION['id'],$lastName,$firstName,$email,$bdd);


                        //ETAPE 8 : mise à jour des info de SESSION
                        $_SESSION['lastName']=$lastName;
                        $_SESSION['firstName']=$firstName;
                        $_SESSION['email']=$email;

                        //ETAPE 9 : redirection vers le profil
                        header('location:account.php');
                        exit;
                    }
                }

            }
        }
}

include '../view/header.php';
include '../view/view_user.php';
include '../view/view_create_user.php';
include '../view/footer.php';
?>