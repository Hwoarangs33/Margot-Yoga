<div class="account-bg">
<div class="account-frame">
<section class="account">
<h1>Mon Profil</h1>
<p>Nom :  <?php if(empty($lastName)){echo "non défini";}else{echo $lastName;} ?> </p>
<p>Prénom :  <?php echo $firstName ?> </p>
<p>Email : <?php echo $email ?> </p>
</section>
</div>
 <?php // var_dump($phone); ?>
