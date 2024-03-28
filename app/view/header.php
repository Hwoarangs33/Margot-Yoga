
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../public/css/style.css" />
  <link rel="stylesheet" href="../public/css/cssreset.css" />
  <link rel="stylesheet" href="../public/css/header.css" />
  <link rel="stylesheet" href="../public/css/footer.css" />
  <link rel="stylesheet" href="../public/css/button.css" />
  <link rel="stylesheet" href="../public/css/burger.css" />
  <link rel="stylesheet" href="../public/css/modal.css" />
  <link rel="stylesheet" href="../public/css/connexion.css" />
  <script defer src="../public/js/script.js"></script>
  <script defer src="../public/js/burger.js"></script>
  <script defer src="../public/js/modal.js"></script>
  <title>Margot Yoga</title>
</head>

<body>
  <!-- LE HEADER -->
  <header>
<a class="contact" href="/contact.php">
  <img src="../public/images/telephone.png" alt="" width="40" height="40" class="">
</a>

    <!-- 1  -->
    <div class="logo" alt="LogoMargotYoga">
      <a href="index.php"><img src="../public/images/Rectangle2.png" alt="" class="purple-bg-2">
      <h1>MARGOT YOGA</h1></a>
    </div>
    <!-- 2 -->
    <div class="nav hide-mobile">
      <div class="dropdown">
        <a>Cours ⤵︎</a>
        <div class="dropdown-content">
          <p>En studio</p>
          <p>A domicile</p>
          <p>En entreprise</p>
        </div>
      </div>|
      <div class="dropdown">
        <a>Evenements ⤵︎</a>
        <div class="dropdown-content">
          <p>Ateliers</p>
          <p>Retraites</p>
        </div>
      </div>
      | <a> Studio en ligne</a> | <a> À propos </a>|
      <a> Contact</a>
    </div>
    <!-- 3 -->
    <?php if(isset($_SESSION['firstName'])){?>
     
      <div class="account-wrapper">
    <a href="account.php"><img alt="LogoUser" height="45" width="45" class="icons hide-mobile" src="../public/images/user.png" /></a>
   <a href="logout.php" class="hide-mobile"><button class="purple">Se déconnecter</button></a> 
    </div>
    <?php }else{?>
   <a href="connexion.php" class="hide-mobile"><button class="purple">Connexion</button></a> 
    

    <!-- 4 -->
    
    <div class="links hide-mobile">
      <a href="https://www.instagram.com/margot_bruno"><img alt="LogoInstagram" height="50" width="50" class="icons" src="../public/images/instagram.png" /></a>
      <a href="https://www.facebook.com/profile.php?id=100087822937879"><img alt="LogoFacebook" height="50" width="50" class="icons" src="../public/images/logo-de-lapplication-facebook.png" /></a>
        <!-- Image en absolu vers le lien FB -->
  <img alt="ClickMeFb" height="200" width="200" src="../public/images/flechejaune.png" />
 
  <?php }?>

    </div>

    <div id="burger-btn" class="toggle-burger">
      <span></span>
    </div>
    <nav id="burger-menu" class="">
      <div id="burger-menu-container">
        <div class="menu-menu-burger-container">
        <ul id="menu-menu-burger" class="menu">
          <li id="menu-item" class="menu-item"><a href="index.php" aria-current="page" class="menu-link"><p class="">Accueil</p></a></li>
          <li id="menu-item" class="menu-item menu-item-has-children">
            <a href="#" class="menu-link">
              <p class="">Cours ⤵︎</p>
            </a>
            <ul class="sub-menu">
              <li id="menu-item" class="menu-item">
                <a href="#" class="menu-link">En studio</a>
              </li>
              <li id="menu-item" class="menu-item">
                <a href="#" class="menu-link">En entreprise</a>
              </li>
              <li id="menu-item" class="menu-item">
                <a href="#" class="menu-link">Cours privé</a>
              </li>
            </ul>
          </li>
          <li id="menu-item" class="menu-item menu-item-has-children">
            <a href="#" class="menu-link">
              <p class="">Evenements ⤵︎</p>
            </a>
            <ul class="sub-menu">
              <li id="menu-item" class="menu-item">
                <a href="#" class="menu-link">Retraites</a>
              </li>
              <li id="menu-item" class="menu-item">
                <a href="#" class="menu-link">Ateliers</a>
              </li>
            </ul>
          </li>
          <li id="menu-item" class="menu-item"><a href="#" class="menu-link"><p class="">Studio en ligne</p></a></li>
          <li id="menu-item" class="menu-item"><a href="#" class="menu-link"><p class="">A propos</p></a></li>
          <li id="menu-item" class="menu-item"><a href="#" class="menu-link"><p class="">Contact</p></a></li>
        </ul>
  </div>				
  </div>
    </nav>
  </header>

