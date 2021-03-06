<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170621109-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170621109-1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belviso - Salon Lepote - Niš Srbija</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/lightbox.min.css">


      <!-- Ikonice -->
      <script defer src="js/all.min.js"></script>
</head>
<style>
    * {
        overflow: hidden;
    }

    .telo {
        height: 100vh;
    }
</style>

<body>
    <nav>
        <div class="header">
            <div class="menu-toggle">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="logo">
                <h2>Belviso</h2>
            </div>
        </div>
        <div class="mobile-nav">
            <ul>
                <li><a href="index.html">Početna</a></li>
                <li><a href="usluge.html">Usluge</a></li>
                <li><a href="galerija.html">Galerija</a></li>
                <li><a href="akcije.html">Akcije</a></li>
                <li><a href="cenovnik.html">Cenovnik</a></li>
                <li><a href="zakazivanje.html">Zakazivanje tretmana</a></li>
                <li><a href="posao.html">Posao</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
    </nav>

    <div class="navigacija">
        <div class="sidebar">
            <div class="logo">
                <h1>Belviso</h1>
                <p>Tamo gde lepota nije prolazna</p>
            </div>
            <ul>
                <li><a href="index.html">Početna</a></li>
                <li><a href="usluge.html">Usluge</a></li>
                <li><a href="galerija.html">Galerija</a></li>
                <li><a href="akcije.html">Akcije</a></li>
                <li><a href="cenovnik.html">Cenovnik</a></li>
                <li><a href="zakazivanje.html">Zakazivanje tretmana</a></li>
                <li><a href="posao.html">Posao</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
            <div class="social_media">
                <a target="_blank" href="https://www.facebook.com/belvisonis/" class="face"><i
                        class="fab fa-facebook-f"></i></a>
                <a target="_blank" href="https://www.instagram.com/belviso_beauty_center/" class="insta"><i
                        class="fab fa-instagram"></i></a>
                <a href="mailto: info@belviso.rs" class="email"><i class="fas fa-envelope"></i></a>
                <a href="tel:+381-63-265-266" class="phone"><i class="fas fa-phone"></i></a>
            </div>
        </div>
    </div>

    <div class="telo">

        <div id="particles-js"></div>

        <div class="wrap">
            <form class="login-div" method="POST" action="admin.php">
                <div class="logo">
                    <h2>Belviso</h2>
                    <p>Admin Team</p>
                </div>

                <div class="fields">
                    <div class="username"><input name="username" type="username" class="user-input"
                            placeholder="Korisnicko ime"/></div>
                    <div class="password"><input name="sifra" type="password" class="pass-input" placeholder="Sifra" />
                    </div>
                </div>
                <button class="signin-button" name="uloguj-se">Uloguj se</button>

                <?php require_once 'php/login.php' ?>
            </form>
        </div>
    </div>


    <script src="js/aos.js"></script>
    <script src="js/vanilla-tilt.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="js/particles.min.js"></script>
    <script src="js/particle.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>