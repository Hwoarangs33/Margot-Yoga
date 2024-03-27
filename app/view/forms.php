<div class="forms-wrapper">
    <div class="form-frame-1">
        <h2>
            Nouveau ici ?
        </h2>
        <h2>
            Inscrivez vous :
        </h2>

        <p>
            <?php echo $messageAdd ?>
        </p>
        <form class="form first-form" action="connexion.php" method="POST">
            <input type="text" name="nom_user" placeholder="NOM">
            <input type="text" name="prenom_user" placeholder="PRÉNOM" required>
            <input type="email" name="mail_user" placeholder="ADRESSE E-MAIL" required>

            <input type="tel" name="tel_num" placeholder="TÉLÉPHONE">
            <input type="password" name="mdp_user" placeholder="MOT DE PASSE" required>
            <input type="password" name="mdp_confirm" placeholder="CONFIRMER LE MOT DE PASSE" required>
            <div class="obligated">
                <p><span class="asterisk">* </span>Champ obligatoire.</p>
            </div>
            <input type="submit" name="submit_add" id="submit-signin" value="S'inscrire">

        </form>
    </div>

    <div class="form-frame-2">

        <h2>
            Déjà client ?
        </h2>
        <p>
            <?php echo $messageLog ?>
        </p>
        <form class="form second-form" action="connexion.php" method="POST">
            <input type="email" name="mail_user" placeholder="ADRESSE E-MAIL">
            <input type="password" name="mdp_user" placeholder="MOT DE PASSE">

            <p class="forgotten-pass">Mot de passe oublié ?</p>

            <input type="submit" name="submit_login" id="submit_login" value="Se connecter">

        </form>
    </div>

</div>