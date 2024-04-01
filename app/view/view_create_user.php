
<div class="account-frame">
<section class="update">
<h1><?php echo $titreForm ?></h1>
<form action="<?php echo $actionForm ?>" method="POST">
    <input type="text" name="lastNameAdd" placeholder="Votre nom" value=<?php echo $lastNameFill?>>
    <input type="text" name="firstNameAdd" placeholder="Votre prénom" value=<?php echo $firstNameFill?>>
    <input type="email" name="emailAdd" placeholder="Votre Email" value=<?php echo $emailFill?>>
    <input type="text" name="passwordAdd" placeholder="Votre mot de passe" required>
    <input type="submit" id="update-btn" name="submitAdd">
</form>

<p><?php echo $messageAdd ?></p>
</section>
</div>
</div>