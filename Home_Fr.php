<?php
session_start();
if (!(isset($_SESSION['loggedIn']))) {
    $_SESSION['loggedIn'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domicile</title>

    <!-- Import Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- link to bootstrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
    <!-- Import CSS file -->
    <link rel="stylesheet" href="Resources/Css/Main.css">

    <!--Style-->
    <style>
        /*Sweet Alert Mixin*/
        .swal2-toast {
            padding-top: 5rem;
        }

        @media (max-width: 426px) {
            .swal2-toast {
                max-width: 60% !important;
            }
        }

        @media (min-width: 768px) {
            .swal2-toast {
                height: 7.rem !important;
                font-size: 1.8rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container ">
            <!--Logo-->
            <a href="Home.html" class="logo-box" style="color:WHITE">
                Orinix.AI
            </a>
            <!--Navbar-->
            <div class="menu" id="mobile-menu">
                <ul class="nav-list d-flex align-items-center">
                    <li class="nav-item">
                        <a href="Home_Fr.php" class="nav-link nav-active">Domicile</a>
                    </li>
                    <li class="nav-item">
                        <a href="Ai_Fr.php" class="nav-link">Onirix</a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs_Fr.php" class="nav-link">Environ</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs_Fr.php" class="nav-link">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link">Langue:Englaise</a>
                    </li>
                </ul>
                <div class="menu-toggle-icon menu-toggle-close" id="menu-toggle-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <!--Account Section-->
            <div class="sm-nav place-items-center">
                <div class="account-link  place-items-center" onclick="account_toggle()">
                    <div class="place-items-center account-nav"><i class="ri-account-circle-line"></i>Compte</div>
                    <div class="dropdown" id="account-dropdown">
                        <?php if ($_SESSION['loggedIn'] == "true") {
                            echo '<h3 class="text-center">' . $_SESSION['username'] . '</h3>';
                            echo '<ul>';
                            echo '<li><a href="History_Fr.php" class="nav-link">History</a></li>';
                            echo '<li><a href="#" onclick="Logout()" class="nav-link">Log Out</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<li><a href="LogIn_Fr.php" class="nav-link">Enregistrer</a></li>';
                        }
                        ?>
                    </div>
                </div>

                <!--Hamburger Menu-->
                <div class="menu-toggle-icon menu-toggle-open" id="menu-toggle-open">
                    <i class="ri-menu-4-line"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <Main class="main">
        <!--Banner-->
        <section class="background">
            <div class="background-container container d-grid">
                <div class="background-data" id="background-data">
                    <span class="caption">Onirix</span>
                    <span class="tagline">Onirix</span>
                    <h2 class="title main-title">Bienvenue sur notre site de rêve,où nous croyons que les rêves sont plus qu’une pensée fugace dans la nuit.</h2>
                </div>
            </div>

            <img src="Resources/Background.jpg" class="image" id="back">
        </section>
        <!--Page info-->
        <section class="info section" id="info">
            <div class="card-container container">
                <div class="card">
                    <div class="card-info">
                        <span class="tagline">Future</span>
                        <h2 class="title card-title">Plongez dans le futur avec Onirix</h2>
                        <p class="card-description"> Onirix a la capacité de prédire votre avenir à travers votre rêve. Nous croyons que l’avenir n’est pas quelque chose dans lequel nous entrons mais quelque chose que nous créons, chaque rêve contient un sens, si vous voulez en savoir plus à ce sujet, alors vous n’êtes pas la bonne voie.</p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-info">
                        <span class="tagline">Technologie</span>
                        <h2 class="title card-title">Onirix leader en technologie</h2>
                        <Technology class="card-description">
                        Onirix a été développé à travers des années de recherche approfondie percée technologique. C’est actuellement la seule technologie d’IA à offrir ce type de capacités telles que le décodage des rêves. </p>

                    </div>
                </div>
        </section>
    </main>
</body>
<!--footer-->
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row" style="padding-top:2rem;">

            <div class="footer-text">
                <h6>Environ</h6>
                <p class="">Onirix a été développé par l’International Dream Institute.
                   </p>
            </div>
            <div class="link-column">
                <h6>Liens</h6>
                <ul class="footer-links">
                    <li><a href="Ai_Fr.php">Orinix</a></li>
                    <li><a href="LogIn_Fr.php">Connexion/Inscription</a></li>
                </ul>
            </div>

            <div class="link-column ">
                <h6>Liens rapides</h6>
                <ul class="footer-links">
                    <li><a href="About_Fr.php">Qui sommes-nous</a></li>
                    <li><a href="ContactUs_Fr.php">Contactez-nous</a></li>
                    <li><a href="#">Contribuer</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright © 2017 Tous droits réservés par
                    <a href="#">Orinix</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
</footer>
<!-- Import JS file   -->
<script src="Resources/Js/Main.js"></script>
<!--Ajax Library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
<!--SweetAlert2 Library-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>