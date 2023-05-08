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
    <title>About Us</title>

    <title>About Us</title>
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
            transition: background 0.5s ease-in-out;
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
                        <a href="Home.php" class="nav-link ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="Ai.php" class="nav-link">Onirix</a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.php" class="nav-link nav-active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs.php" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <div class="menu-toggle-icon menu-toggle-close" id="menu-toggle-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <!--Account Section-->
            <div class="sm-nav place-items-center">
                <div class="account-link  place-items-center" onclick="account_toggle()">
                    <div class="place-items-center account-nav"><i class="ri-account-circle-line"></i>Account</div>
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
                    <h2 class="title main-title">Welcome to our dreamy website</h2>
                </div>
            </div>
            <img src="Resources/Background.jpg" class="image" id="back">

        </section>
        <div class="div">
            <h1>
                ABOUT US
            </h1>
        </div><br>
        <article>
            <h3>Goals</h3>
            <br />
            <p>
                <center>Our mission is to help you explore the depths of your subconscious mind through the
                    interpretation of your dreams. We offer a user-friendly platform where you can submit your dreams
                    and receive insightful feedback from our team of experts and advanced AI technology. This can help
                    users better understand their dreams and gain a perception into their own psyche.
                    Offer users an interpretation service for their dreams, where an AI or a team of experts can analyze
                    the user's dream and provide personalized insights and meaning behind it.
                    To use AI technology to identify common patterns and themes in users' dreams, which can offer
                    insights into larger societal issues.
                    provide a platform for individuals to document and analyze their dreams to gain insights into their
                    subconscious mind and promote personal growth.</center>
            <h3>Vision</h3>
            To develop a dream interpretation tool that provides users with personalized insights and advice based on
            their dreams.
            <br />
            <h3>Approach</h3>
            This approach can include information about the psychological interpretation of dreams, the symbolism in
            dreams, and how they can be used to gain insight into the unconscious mind.
            </p>
        </article>
        </div>
        <section class="timeline">
            <ul>
                <li>
                    <div>
                        <time>Development Stage 1</time> Problem identification</br> The first stage involves
                        identifying the problem or opportunity that AI can help address, and planning the project scope,
                        timeline, and resources needed.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Development Stage 2</time> <br>Research</br>It involves collecting and preparing the
                        relevant data needed for the AI model. It include data cleaning, normalization, and
                        transformation.

                    </div>
                </li>
                <li>
                    <div>
                        <time>Development Stage 3</time> <br>Development and Testing</br> The AI model is developed and
                        tested to ensure that it is accurate, reliable, and can achieve the desired results.

                    </div>
                </li>
                <li>
                    <div>
                        <time>Development Stage 4</time> <br>Deployment</br>Once the model is developed and tested, it
                        is deployed and integrated into the target system or application.

                    </div>
                </li>
                <li>
                    <div>
                        <time>Final Stage</time> <br>Maintenance</br>After deployment, the AI model is monitored to
                        ensure that it continues to perform as expected, and maintenance is performed as needed to keep
                        the model up-to-date and functioning optimally.

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
                    <h6>About</h6>
                    <p class="">Onirix was developed by The Iternational Dream Instituite.
                    </p>
                </div>
                <div class="link-column">
                    <h6>Links</h6>
                    <ul class="footer-links">
                        <li><a href="Ai.php">Orinix</a></li>
                        <li><a href="LogIn.php">LogIn/SignUp</a></li>
                    </ul>
                </div>

                <div class="link-column ">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="AboutUs.php">About Us</a></li>
                        <li><a href="ContactUs.php">Contact Us</a></li>
                        <li><a href="#">Contribute</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
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