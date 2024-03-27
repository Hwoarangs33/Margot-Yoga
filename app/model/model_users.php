<?php

function addUser($lastName,$firstName,$email,$phone,$password,$bdd){
        try{
            //Etape 1 : requête préparée
            $req=$bdd->prepare('INSERT INTO users (nom_user, prenom_user, mail_user, tel_num, mdp_user) VALUES(?,?,?,?,?)');

            //Etape 2 : Binding de param
            $req->bindParam(1,$lastName,PDO::PARAM_STR);
            $req->bindParam(2,$firstName,PDO::PARAM_STR);
            $req->bindParam(3,$email,PDO::PARAM_STR);
            $req->bindParam(4,$phone,PDO::PARAM_STR);
            $req->bindParam(5,$password,PDO::PARAM_STR);

            //Etape 3 : exécution de la requête
            $req->execute();

            //Etape 4 : message de confirmation
            return $firstName." ".$lastName." a bien été enregistré !";
        }catch(Exception $error){
            return $error->getMessage();
        }
    }


function getUserByMail($email, $bdd){
    try{
        //Etape 1 : requête préparée
        $req=$bdd->prepare('SELECT users.id_user, users.nom_user, users.prenom_user, users.mail_user, users.mdp_user FROM users WHERE users.mail_user = ?');
        //Etape 2 : Binding de param
        $req->bindParam(1,$email,PDO::PARAM_STR);

        //Etape 3 : exécution de la requête
        $req->execute();

        //Etape 4 : récupère la réponse de la BDD
        $data=$req->fetchAll();

        //Etape 5 : renvoie la réponse au Controller
        return $data;

    }catch(Exception $error){
        return $error->getMessage();
    }
}

function updateUserById($id,$lastName,$firstName,$email,$bdd){
    try{
        //Etape 1 : requête préparée
        $req=$bdd->prepare('UPDATE users SET nom_user = ? WHERE id_user = ?; 
                UPDATE users SET prenom_user = ? WHERE id_user = ?; 
                UPDATE users SET mail_user = ? WHERE id_user = ?;');
    

        //Etape 2 : Binding de param
        $req->bindParam(1,$lastName,PDO::PARAM_STR);
        $req->bindParam(2,$id,PDO::PARAM_INT);
        $req->bindParam(3,$firstName,PDO::PARAM_STR);
        $req->bindParam(4,$id,PDO::PARAM_INT);
        $req->bindParam(5,$email,PDO::PARAM_STR);
        $req->bindParam(6,$id,PDO::PARAM_INT);


        //Etape 3 : exécution de la requête
        $req->execute();

        //Etape 4 : renvoie un message de confirmation au Controller
        return 'Modification effectuée avec succès : '.$firstName.' '.$lastName.' - '.$email;

    }catch(Exception $error){
        return $error->getMessage();
    }
}
