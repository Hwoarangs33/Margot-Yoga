<h1><?php echo $titreForm ?></h1>
<form action="<?php echo $actionForm ?>" method="POST">
    <input type="text" name="lastNameAdd" placeholder="Votre Nom" value=<?php echo $lastNameFill?> required>
    <input type="text" name="firstNameAdd" placeholder="Votre Prénom" value=<?php echo $firstNameFill?> required>
    <input type="email" name="emailAdd" placeholder="Votre Email" value=<?php echo $emailFill?> required>
    <input type="text" name="passwordAdd" placeholder="Votre Mot de Passe" required>
    <input type="submit" name="submitAdd">
</form>

<p><?php echo $messageAdd ?></p>