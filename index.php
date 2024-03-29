<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IM+Fell+Great+Primer&family=IM+Fell+Great+Primer+SC&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <title>Le quai antique</title> 
</head>
<body>
    <header>
      <a href="./index.html"><img src="./images/logo2.png" class="logo"></a>
      <div class="nav-container">
        <nav class="navbar-menu">
          <button class="hamburger">☰</button>
          <ul class="navbar-ul">
            <li class="navbar-li"><a class="navbar-a" href="index.html">Accueil</a></li>
            <li class="navbar-li"><a class="navbar-a" href="reserver.html">Reserver</a></li>
            <li class="navbar-li"><a class="navbar-a" href="carte.html">La carte</a></li>
            <li class="navbar-li-connect">
              <div class="container-connect">
                <a class="connect" href="sign-form.html">
                  <img src="./images/user.png" class="user">
                  Se connecter
                </a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div class="container-top">
        <h2 class="top-title">
          Bienvenue au Quai Antique
        </h2>
        <?php echo "¨FLKEDSÖGPINDSGÏONGOI¨DSFNGFDOINGHFDGNQSDGOÏDHSGIOQDSBFDISOFGBUDSYQFB QDSUKFGDSUQYKJFBVDKSUYIFGDSUQYFJHJDSUFYGKDS7IYQFUJVHDKSQFGDSKYUQFHJSDUKQYVFDSYQFVYHDSYUQFGSDQFVKY" ?>
        <div id="carouselExampleSlidesOnly" class="carousel slide diapo-container" data-bs-ride="carousel">
          <div class="carousel-inner diapo">
            <div class="carousel-item active diapo-item">
              <img src="./images/banniere1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item diapo-item">
              <img src="./images/banniere2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item diapo-item">
              <img src="./images/banniere3.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div class="container-middle">
        <div class="container-text">
            <p class="middle">
              Nous sommes passionnés par les produits locaux et nous<br> vous proposons une expérience gastronomique<br> authentique, mettant en valeur les saveurs de la<br> région. 
            </p>
          <div class="middle-line"></div>
          <p class="middle">
            Découvrez notre carte, nos menus et réservez<br> facilement votre table en ligne.
          </p>
          <h2 class="bottom">
            Nous sommes impatients de<br> vous accueillir dans notre<br> univers culinaire.
          </h2>
        </div>
        <div class="container-carousel">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner galerie">
              <div class="carousel-item active galerie-item" data-bs-interval="10000">
                <img src="./images/oeufs-mimosa.jpeg" class="d-block w-100 galerie-img" alt="...">
                <div class="carousel-title">
                  <h3>Oeufs mimosa</h3>
                </div>
              </div>
              <div class="carousel-item galerie-item" data-bs-interval="2000">
                <img src="./images/soupe-potiron.jpg" class="d-block w-100 galerie-img" alt="...">
                <div class="carousel-title">
                  <h3>Soupe au potiron</h3>
                </div>
              </div>
              <div class="carousel-item galerie-item">
                <img src="./images/croque-myrtille.jpeg" class="d-block w-100 galerie-img" alt="...">
                <div class="carousel-title">
                  <h3>Croque myrtille</h3>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
     
    </main>
    <footer id="footer">
      <div class="footer-horaires">
        <h3 class="footer-title">HORAIRES</h3>
          <p id="horaires">
            Mardi : 12h - 14h30 / 19h30 - 22h30<br>
            Mercredi : 12h - 14h30 / 19h30 - 22h30<br>
            Jeudi : 12h - 14h30 / 19h30 - 22h30<br>
            Vendredi : 12h - 14h30 / 19h30 - 22h30<br>
            Samedi : 12h - 14h30 / 19h30 - 22h30
          </p>
      </div>
      <div class="footer-container-follow">
        <div class="footer-follow">
          <h3 class="footer-title">Suivez nous</h3>
          <div>
            <a href=""><img class="footer-logo" src="./images/icon-facebook.png"></a>
            <a href=""><img class="footer-logo" src="./images/icon-instagram.png"></a>
            <a href=""><img class="footer-logo" src="./images/icon-twitter.png"></a>
          </div>
        </div>
        <div class="footer-contact">
          <h3 class="footer-title">Contactez nous :</h3>
          <a href="mailto:mail@example.com">
            <button class="footer-contact-button">mail@example.com</button>
          </a>
        </div>
      </div>
    </footer>
    <script src="./scripts/script.js"></script>
</body>
</html>