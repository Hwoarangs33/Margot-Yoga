<?php
session_start();


include '../app/utils/bdd.php';
include '../app/utils/functions.php';
include '../app/model/model_users.php';

$messageAdd = "";

$lastNameFill = "";
$firstNameFill = "";
$emailFill = "";
$phoneFill = "";


if (isset($_POST['submit_add'])) {
    if (
        isset($_POST['prenom_user']) and !empty($_POST['prenom_user'])
        and isset($_POST['mail_user']) and !empty($_POST['mail_user'])
        and isset($_POST['mdp_user']) and !empty($_POST['mdp_user'])
        and isset($_POST['mdp_confirm']) and !empty($_POST['mdp_confirm'])
    ) {
        // nettoie les données
        $lastName = sanitize($_POST['nom_user']);
        $firstName = sanitize($_POST['prenom_user']);
        $email = sanitize($_POST['mail_user']);
        $phone = sanitize($_POST['tel_num']);
        $password = sanitize($_POST['mdp_user']);

        // hash le mot de passe
        $password = password_hash($password, PASSWORD_BCRYPT);

        // vérifie le format des données
        if (
            filter_var($email, FILTER_VALIDATE_EMAIL)
        ) {
            $user = getUserByMail($email, $bdd);
            if (empty($user)) {
                if ($messageAdd = addUser($lastName, $firstName, $email, $phone, $password, $bdd)) {
                    include '../app/view/modal.php';
                }

            } else {
                $messageAdd = "L'email existe déjà";
            }
        } else {
            $messageAdd = "Email ou téléphone non valide.";
        }
    } else {
        $messageAdd = "Veuillez remplir correctement le formulaire !";
    }
}



$messageLog = "";

//CONNEXION
//Etape 1 : vérifie si le formulaire de connexion est submit
if (isset($_POST['submit_login'])) {
    //ETAPE 2 : véfifie les champs vide
    if (
        isset($_POST['mail_user']) and !empty($_POST['mail_user'])
        and isset($_POST['mdp_user']) and !empty($_POST['mdp_user'])
    ) {

        //ETAPE 3 : nettoyage des données
        $email = sanitize($_POST['mail_user']);
        $password = sanitize($_POST['mdp_user']);

        //ETAPE 4 : vérifie le format de l'email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


            //ETAPE 5 : aller chercher le User en BDD
            $user = getUserByMail($email, $bdd);

            //ETAPE 6 : vérification si le user existe, si c'est le cas $user n'est pas vide
            if (!empty($user)) {


                //Etape 7 : vérification des mots de passe
                if (password_verify($password, $user[0]['mdp_user'])) {
                    //ETAPE 8 : on se connecte en créant les $_SESSION


                    $_SESSION['id'] = $user[0]['id_user'];
                    $_SESSION['lastName'] = $user[0]['nom_user'];
                    $_SESSION['firstName'] = $user[0]['prenom_user'];
                    $_SESSION['email'] = $user[0]['mail_user'];
                    $_SESSION['phone'] = $user[0]['tel_num'];

                    //Message de confirmation
                    $messageLog = "Bravo " . $_SESSION['firstName'] . " ! <br> Vous êtes bien connecté(e) !";

                    //Redirection vers l'accueil
                    header('location:./index.php');
                    include '../app/view/modal.php';

                } else {
                    $messageLog = "Mot de Passe incorrect !";
                }

            } else {
                $messageLog = "Email incorrect !";
            }

        } else {
            $messageLog = "Email pas au bon format !";
        }

    } else {
        $messageLog = "Veuillez remplir correctement le formulaire !";
    }


}




include '../app/view/header.php';
include '../app/view/forms.php';
include '../app/view/footer.php';

?>