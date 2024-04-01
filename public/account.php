<?php
session_start();


include '../app/utils/bdd.php';
include '../app/utils/functions.php';
include '../app/model/model_users.php';


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
                        header('location:./account.php');
                        exit;
                    }
                }

            }
        }
}

include '../app/view/header.php';
include '../app/view/view_user.php';
include '../app/view/view_create_user.php';
include '../app/view/footer.php';
?>