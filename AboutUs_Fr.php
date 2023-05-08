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
    <meta charset="UTF-8">
    <title>Qui sommes-nous</title>

    <title>Qui sommes-nous</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.voidcoders.com/htmldemo/fitgear/main-files/assets/css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Import Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- link to bootstrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">-->
    <!-- Import CSS file -->
    <link rel="stylesheet" href="Resources/Css/Main.css">

    <!--Style-->
    <style>
        /Sweet Alert Mixin/ .swal2-toast {
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


        body {
            font: normal 16px/1.5 "Helvetica Neue", sans-serif;
            background-color: #010a27;
            color: #fff;
            overflow-x: hidden;
            padding-bottom: 50px;
        }

        .div {
            background-color: #010a27;
        }

        /* INTRO SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        /*.intro {
  background: #f45b69;
  padding: 100px 0;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

h1 {
  font-size: 2.5rem;
}
*/

        /* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        @import url('https://fonts.googleapis.com/css?family=Exo+2:700');

        * {
            margin: 0 auto;
            padding: 0;
        }

        body {
            text-align: center;
        }

        h1 {
            color: whitesmoke;
            font-family: 'Exo 2', sans-serif;
            font-size: 46px;
            font-weight: 900;
            text-transform: uppercase;
        }

        h3 {
            color: whitesmoke;
            font-family: 'Exo 2', sans-serif;
            font-size: 35px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .p {
            max-width: 700px;
            min-height: 200px;
            padding: 0;
            color: whitesmoke;
            font-family: OpenSans;
            font-size: 20px;
            font-weight: 300;
        }

        .square {
            height: 60px;
            width: 60px;
            border: 1px dashed white;
            margin: 0 0 0 55px;
            /*   padding: 1px; resize squares */
            background-color: rgba(255, 255, 255, 0.2);
            display: inline-block;
            transform: rotateZ(44deg);
        }

        .square:hover {
            background-color: rgba(27, 182, 239, 0.2);
            transition: ease 0.2s;
            cursor: pointer;
        }

        .square .icons {
            position: absolute;
            transform: rotateZ(-44deg);
            margin: 20px 0 0px 21px;
        }

        .fa-facebook,
        .fa-twitter,
        .fa-dribbbler,
        .fa-youtube,
        .fa-dribbble {
            width: 11px;
            height: 22px;
            color: white;
            font-family: FontAwesome;
            font-size: 23px;
            font-weight: 400;
            text-transform: uppercase;
        }

        .square:hover .fa-facebook {
            color: rgba(59, 89, 152, 1)
        }

        .square:hover .fa-twitter {
            color: rgba(27, 182, 239, 1)
        }

        .square:hover .fa-dribbble {
            color: rgba(199, 59, 111, 1)
        }

        .square:hover .fa-youtube {
            color: rgba(229, 45, 39, 1)
        }

        .logo {
            margin: 1em;
            position: fixed;
            bottom: -72px;
            z-index: 99999999999;
            right: 0;
        }

        svg {}

        .pen {
            fill: black;
            animation: rotateInDownLeft 3s forwards;
        }

        .all {
            animation: rotateOut 3s forwards;
        }

        @keyframes rotateInDownLeft {
            from {
                transform-origin: left bottom;
                transform: rotate3d(0, 0, 0, 0deg);
                opacity: 1;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                transform: ;
                transform: translateX(850px) translateY(-83px) rotate3d(0, 0, 1, -60deg);
                opacity: 1;
            }
        }

        @keyframes rotateOut {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 1;
            }
        }

        .timeline ul {

            padding: 50px 0;
        }

        .timeline ul li {
            list-style-type: none;
            position: relative;
            width: 6px;
            margin: 0 auto;
            padding-top: 50px;
            background-color: #000e35;
        }

        .timeline ul li::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: inherit;
            z-index: 1;
        }

        .timeline ul li div {
            position: relative;
            bottom: 0;
            width: 400px;
            padding: 15px;
            border: #116466 solid 2px;
            background-color: transparent;
        }

        .timeline ul li div::before {
            content: "";
            position: absolute;
            bottom: 7px;
            width: 0;
            height: 0;
            border-style: solid;
        }

        .timeline ul li:nth-child(odd) div {
            left: 45px;
        }

        .timeline ul li:nth-child(odd) div::before {
            left: -15px;
            border-width: 8px 16px 8px 0;
            border-color: transparent #116466 transparent transparent;
        }

        .timeline ul li:nth-child(even) div {
            left: -439px;
        }

        .timeline ul li:nth-child(even) div::before {
            right: -15px;
            border-width: 8px 0 8px 16px;
            border-color: transparent transparent transparent #116466;
        }

        time {
            display: block;
            font-size: 2 rem;
            font-weight: 800;
            margin-bottom: 8px;
        }


        /* EFFECTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        .timeline ul li::after {
            transition: 0.5s ease-in-out;
        }

        .timeline ul li.in-view::after {
            background: #116466;
        }

        .timeline ul li div {
            visibility: hidden;
            opacity: 0;
            transition: all 0.5s ease-in-out;
        }

        .timeline ul li:nth-child(odd) div {
            transform: translate3d(200px, 0, 0);
        }

        .timeline ul li:nth-child(even) div {
            transform: translate3d(-200px, 0, 0);
        }

        .timeline ul li.in-view div {
            transform: none;
            visibility: visible;
            opacity: 1;
        }


        /* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

        @media screen and (max-width: 900px) {
            .timeline ul li div {
                width: 250px;
            }

            .timeline ul li:nth-child(even) div {
                left: -289px;
                /*250+45-6*/
            }
        }

        @media screen and (max-width: 600px) {
            .timeline ul li {
                margin-left: 20px;
            }

            .timeline ul li div {
                width: calc(100vw - 91px);
            }

            .timeline ul li:nth-child(even) div {
                left: 45px;
            }

            .timeline ul li:nth-child(even) div::before {
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent #116466 transparent transparent;
            }
        }


        /* EXTRA/CLIP PATH STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
        .timeline-clippy ul li::after {
            width: 40px;
            height: 40px;
            border-radius: 0;
        }

        .timeline-rhombus ul li::after {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }

        .timeline-rhombus ul li div::before {
            bottom: 12px;
        }

        .timeline-star ul li::after {
            clip-path: polygon(50% 0%,
                    61% 35%,
                    98% 35%,
                    68% 57%,
                    79% 91%,
                    50% 70%,
                    21% 91%,
                    32% 57%,
                    2% 35%,
                    39% 35%);
        }

        .timeline-heptagon ul li::after {
            clip-path: polygon(50% 0%,
                    90% 20%,
                    100% 60%,
                    75% 100%,
                    25% 100%,
                    0% 60%,
                    10% 20%);
        }

        .timeline-infinite ul li::after {
            animation: scaleAnimation 2s infinite;
        }

        @keyframes scaleAnimation {
            0% {
                transform: translateX(-50%) scale(1);
            }

            50% {
                transform: translateX(-50%) scale(1.25);
            }

            100% {
                transform: translateX(-50%) scale(1);
            }
        }

        .background {
            height: 85rem;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
    <span class="animate" style="--count:5;"></span>
        <span class="animate" style="--count:3;"></span>
        <span class="animate" style="--count:4;"></span>
        <span class="animate" style="--count:2;"></span>
        <nav class="nav container ">
            <!--Logo-->
            <a href="Home.php" class="logo-box" style="color:WHITE">
                Orinix.AI
            </a>
            <!--Navbar-->
            <div class="menu" id="mobile-menu">
                <ul class="nav-list d-flex align-items-center">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link ">Domicile</a>
                    </li>
                    <li class="nav-item">
                        <a href="Ai.php" class="nav-link">Onirix</a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.php" class="nav-link nav-active">Environ</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs.php" class="nav-link">Contactez-nous</a>
                    </li>
                </ul>
                <div class="menu-toggle-icon menu-toggle-close" id="menu-toggle-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <!--Account Section-->
            <div class="sm-nav place-items-center">
                <div class="account-link  place-items-center" onclick="account_toggle()">
                    <div class="place-items-center account-nav"><i class="ri-account-circle-line">Compte</i></div>
                    <div class="dropdown" id="account-dropdown">
                        <?php if ($_SESSION['loggedIn'] == "true") {
                            echo '<h3 class="text-center">' . $_SESSION['username'] . '</h3>';
                            echo '<ul>';
                            echo '<li><a href="History.php" class="nav-link">History</a></li>';
                            echo '<li><a href="#" onclick="Logout()" class="nav-link">Log Out</a></li>';
                            echo '</ul>';
                        } else {
                            echo '<li><a href="LogIn.php" class="nav-link">Log In</a></li>';
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
                    <span class="tagline" style="self-align:start !important;">Onirix</span>
                    <h2 class="title main-title">Bienvenue sur notre site de rêve</h2>
                </div>
            </div>
            <img src="Resources/Background.jpg" class="image" id="back">

        </section>
        <div class="div">
            <h1>
                QUI SOMMES-NOUS
            </h1>
        </div><br>
        <article>
            <h3>Buts</h3>
            <br />
            <p>
                <center>Notre mission est de vous aider à explorer les profondeurs de votre subconscient à travers l’interprétation de vos rêves. Nous offrons une plate-forme conviviale où vous pouvez soumettre vos rêves et recevoir des commentaires perspicaces de notre équipe d’experts et de notre technologie d’IA avancée. Cela peut aider les utilisateurs à mieux comprendre leurs rêves et à acquérir une perception de leur propre psyché.Offrez aux utilisateurs un service d’interprétation de leurs rêves, où une IA ou une équipe d’experts peut analyser le rêve de l’utilisateur et fournir des informations personnalisées et un sens qui le sous-tend. Utiliser la technologie de l’IA pour identifier des modèles et des thèmes communs dans les rêves des utilisateurs, ce qui peut donner un aperçu de problèmes sociétaux plus vastes. Il fournit une plate-forme permettant aux individus de documenter et d’analyser leurs rêves afin de mieux comprendre leur subconscient et de promouvoir leur croissance personnelle.</center>
            <h3>Vision</h3>
            Développer un outil d’interprétation des rêves qui fournit aux utilisateurs des informations et des conseils personnalisés basés sur leurs rêves.
            <br />
            <h3>Approcher</h3>
            Cette approche peut inclure des informations sur l’interprétation psychologique des rêves, le symbolisme dans les rêves et comment ils peuvent être utilisés pour mieux comprendre l’inconscient.
            </p>
        </article>
        </div>
        <section class="timeline">
            <ul>
                <li>
                    <div>
                        <time>Étape de développement 1</time>Identification des problèmes </br> La première étape consiste à identifier le problème ou l’opportunité que l’IA peut aider à résoudre, et à planifier la portée, le calendrier et les ressources nécessaires au projet.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Étape de développement 2</time> <br>Recherche</br>Il s’agit de collecter et de préparer les données pertinentes nécessaires au modèle d’IA. Il comprend le nettoyage, la normalisation et la transformation des données.

                    </div>
                </li>
                <li>
                    <div>
                        <time>Étape de développement 3</time> <br>Développement et tests</br> Le modèle d’IA est développé et testé pour s’assurer qu’il est précis, fiable et peut atteindre les résultats souhaités.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Étape de développement 4</time> <br>Déploiement</br> Une fois le modèle développé et testé, il est déployé et intégré dans le système ou l’application cible.

                    </div>
                </li>
                <li>
                    <div>
                        <time>Étape finale></time> <br>Entretien</br>Après le déploiement, le modèle d’IA est surveillé pour s’assurer qu’il continue de fonctionner comme prévu, et la maintenance est effectuée selon les besoins pour maintenir le modèle à jour et fonctionner de manière optimale.

                    </div>
                </li>
            </ul>
        </section>
    </Main>
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row" style="padding-top:2rem;">

                <div class="footer-text">
                    <h6>Environ</h6>
                    <p class="">Onirix a été développé par l’international Dream Instituite.
                    </p>
                </div>
                <div class="link-column">
                    <h6>Liens</h6>
                    <ul class="footer-links">
                        <li><a href="Ai.php">Orinix</a></li>
                        <li><a href="LogIn.php">Connexion/Inscription</a></li>
                    </ul>
                </div>

                <div class="link-column ">
                    <h6>Liens Rapides</h6>
                    <ul class="footer-links">
                        <li><a href="AboutUs.php">Qui sommes-nous</a></li>
                        <li><a href="ContactUs.php">Contactez-nous</a></li>
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
    <!-- partial -->
    <script src="Resources/Js/Timeline.js"></script>
    <!-- Import JS file   -->
    <script src="Resources/Js/Main.js"></script>
    <!--Ajax Library-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>
    <!--SweetAlert2 Library-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>