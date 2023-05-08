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
    <title>Home</title>

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
            <a href="Home.php" class="logo-box" style="color:WHITE">
                Orinix.AI
            </a>
            <!--Navbar-->
            <div class="menu" id="mobile-menu">
                <ul class="nav-list d-flex align-items-center">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="Ai.php" class="nav-link">Onirix</a>
                    </li>
                    <li class="nav-item">
                        <a href="AboutUs.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="Home_Fr.php" class="nav-link">Language:French</a>
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
                    <span class="tagline">Onirix</span>
                    <h2 class="title main-title">Welcome to our dreamy website, where we believe that dreams are more
                        than just a fleeting thought in the night.</h2>
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
                        <h2 class="title card-title">Dive into the Future with Onirix</h2>
                        <p class="card-description"> Onirix has the ability of predicting your future through your dream.
                    We believe that future is not something we enter into but something we create, each dreams contain a
                    meaning, if you want to learn more about this,then you are no the right track.</p>

                    </div>
                </div>

                <div class="card">
                    <div class="card-info">
                        <span class="tagline">Technology</span>
                        <h2 class="title card-title">Onirix leads in Technolgy</h2>
                        <Technology class="card-description">
                            Onirix was Develop Through Years of Extensive Research Technological breakthrough.It is Currently the only AI technology to offer this Kind of Capabilties such as Decoding Dreams </p>

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
<!-- Import JS file   -->
<script src="Resources/Js/Main.js"></script>
<!--Ajax Library-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>
<!--SweetAlert2 Library-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>