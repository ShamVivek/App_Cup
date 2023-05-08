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
    <title>Contactez-nous</title>
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
        .account-nav a:hover,
.nav-link a:hover{
    color: #116466 !important;
    transition:.5s;
}
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

        .background {
            height: 45rem !important;
        }

        .clearfix{
            justify-content: center !important;
        }

        .contact-page-section {
            position: relative;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .contact-page-section .inner-container {

            position: relative;
            z-index: 1;
            box-shadow: 0 0 15px 5px rgba(76, 16, 80, 255);
            border-radius: 5px;
        }

        .contact-page-section .form-column {
            position: relative;
            padding: 0 0 0 15px
        }

        .contact-page-section .form-column .inner-column {
            position: relative;
            padding: 60px 30px 30px 15px;
        }

        .contact-page-section .info-column {
            position: relative
        }

        .contact-page-section .info-column .inner-column {
            position: relative;
            padding: 60px 35px;
          

        }

        .contact-page-section .info-column h2 {
            position: relative;
            color: #00ffff;
            font-size: 30px;
            font-weight: 700;
            line-height: 1.4em;
            margin-bottom: 45px
        }

        .contact-page-section .info-column .list-info {
            position: relative;
            margin-bottom: 60px
        }

        .contact-page-section .info-column .list-info li {
            position: relative;
            margin-bottom: 25px;
            font-size: 18px;
            color: #00ffff;
            line-height: 1.8em;
            padding-left: 45px
        }

        .contact-page-section .info-column .list-info li:last-child {
            margin-bottom: 0
        }

        .contact-page-section .info-column .list-info li i {
            position: absolute;
            left: 0;
            top: 8px;
            color: #00ffff;
            font-size: 30px
        }

        .contact-form {
            position: relative
        }

        .contact-form .form-group {
            position: relative;
            margin-bottom: 20px
        }

        .form-group input,.form-group textarea{
            background-color: transparent!important;
            color:white!important;
            width:100% !important;
        }

        .contact-form input[type=text],
        .contact-form input[type=email],
        .contact-form textarea {
            position: relative;
            display: block;
            width: 100%;
            height: 60px;
            color: white;
            font-size: 14px;
            line-height: 38px;
            padding: 10px 30px;
            border: 1px solid white;
            background-color: white;
            transition: all .3s ease;
            -ms-transition: all .3s ease;
            -webkit-transition: all .3s ease;
            border-radius: 5px;
        }

        .contact-form input[type=text]:focus,
        .contact-form input[type=email]:focus,
        .contact-form textarea:focus {
            border: color white;
        }

        .contact-form textarea {
            height: 250px;
            resize: none
        }

        .contact-form .theme-btn {
            font-size: 16px;
            font-weight: 700;
            margin-top: 10px;
            text-transform: capitalize;
            padding: 16px 39px;
            border: 2px solid #001446;
            font-family: Arimo, sans-serif;
            background: #001446;
            display: inline-block;
            position: relative;
            line-height: 24px;
            cursor: pointer;
            color: #00ffff;
            border-radius: 5px;
        }

        .contact-form .theme-btn:hover {
            color: #001446;
            border-color: #001446;
            background: 0 0
        }

        .contact-form input.error,
        .contact-form select.error,
        .contact-form textarea.error {
            border-color: red !important
        }

        .contact-form label.error {
            display: block;
            line-height: 24px;
            padding: 5px 0 0;
            margin: 0;
            text-transform: uppercase;
            font-size: 12px;
            color: red;
            font-weight: 500
        }
        .theme-btn{
            color:white !important;
            border:1px solid #116466 !important;
            background-color: #4d104e !important;
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
                        <a href="Home_Fr.php" class="nav-link">Domicile</a>
                    </li>
                    <li class="nav-item">
                        <a href="Ai_Fr.php" class="nav-link">Onirix</a>
                    </li>
                    <li class="nav-item">
                        <a href="About_Fr.php" class="nav-link">Environ</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs_Fr.php" class="nav-link  nav-active">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <a href="ContactUs_Fr.php" class="nav-link">Langue:Englaise</a>
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
                    <span class="tagline">Contactez-nous</span>
                    <h2 class="title main-title">Entrons en contact!</h2>
                </div>
            </div>

            <img src="Resources/Background.jpg" class="image" id="back">
        </section>

        <section class="contact-page-section">

            <div class="container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!--Form Column-->
                        <div class="form-column col-md-8 col-sm-12 col-xs-12">
                            <div class="inner-column">

                                <!--Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="sendemail.php" id="contact-form">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="text" name="name" value="" placeholder="Name" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                                <input type="email" name="email" value="" placeholder="Email" required>
                                            </div>
                                            <div class="form-group" style="width:97%!important;">
                                                <input type="text" name="subject" value="" placeholder="Subject"
                                                    required>
                                            </div>
                                           
                                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                                <button type="submit" class="theme-btn btn-style-one">Envoyer un message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End Contact Form-->

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </Main>
    <!--footer-->
    <footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row" style="padding-top:2rem;">

                <div class="footer-text">
                    <h6>Environ</h6>
                    <p class="">Onirix a été développé par l’International Dream Instituite.
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
                    <h6>Liens Rapides</h6>
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
    <script>
        /*Form Validation*/
    function ValidateForm(form) {

let name = form.name.value;
let email = form.email.value;
let subject = form.subject.value;
let message = form.message.value;
$.ajax({ //to go to php page
                    url: "Resources/Php/contact.php",
                    method: "post",
                    data: {
                        uname: uname,
                        email: email,
                       subject: subject,
                       description:message
                    },
                    success: function (response) {
                        Swal.fire(
  'Form Submitted',
  'We will respond soon',
  'success'
)
                    }
                });
}
</script>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.1.0.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
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