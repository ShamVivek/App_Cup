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
	<title>Orinix Chat</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
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
	<style>
		* {
			box-sizing: border-box;
			font-family: "Quicksand", sans-serif;
		}

		body {
			margin: 0;
			height: 100%;
			padding: 1.5em;
			background-color: #49134e;
		}

		@media screen and (min-width: 768px) {
			body {
				padding: 3em;
			}
		}

		form {
			background-color: #001446;
			border-radius: 5px;
			-webkit-box-shadow: 5px 5px 20px 0px #adadad;
			-moz-box-shadow: 5px 5px 20px 0px #adadad;
			box-shadow: 5px 5px 20px 0px #adadad;
			padding: 1.5em;
		}

		@media screen and (min-width: 768px) {
			form {
				padding: 2.5em;
			}
		}

		h2 {
			text-align: center;
			font-size: 28px;
			padding: 0;
			margin-bottom: 20px;
		}

		@media screen and (min-width: 700px) {
			.large-group {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}

			.small-group {
				width: 45%;
			}


		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input,
		select {
			padding: 10px 16px;
			width: 100%;
			outline: 0;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 0;
			background-color: #ededed;
			font-size: 14px;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
		}

		.btn {
			background-color: #dc3daa;
			padding: 12px 15px;
			width: 20%;
			font-weight: 700;
			text-transform: uppercase;
			border: 1px solid transparent;
			border-radius: 5px;
			transition: 0.3s all ease;
			color: white;
		}

		.btn:hover {
			background-color: #2FECF7;
		}
		.form{
			margin-top
		}
	</style>

</head>

<body>
	<!-- partial:index.partial.html -->
	<!-- Responsive form design I created. Feel free to visit my website at jacoblisic.com -->

	<body>
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
							<a href="Home.php" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="Ai.php" class="nav-link nav-active">Onirix</a>
						</li>
						<li class="nav-item">
							<a href="AboutUs.php" class="nav-link">About</a>
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
			<form>
				<h2>Chat</h2>
				<div class="large-group">
					<div class="small-group">
						<label for="firstname">User Name</label>
						<input id="firstname" type="text" name="firstname" />
					</div>

					<div class="small-group">
						<label for="date">Date Of Birth</label>
						<input id="date" type="date" name="date" />
					</div>

					<div class="small-group">
						<label for="dropdown">Dream Type</label>
						<select id="dropdown" name="dropdown">
							<option value="Good Experience">Good Experience</option>
							<option value="Bad Experience">Bad Experience</option>
						</select>
					</div>

					<div class="small-group">
						<label for="description">Description</label>
						<input id="description" type="textarea" name="description" />
					</div>

					<input id="submit" class="btn" type="submit" name="submit" />

				</div>
			</form>
		</Main>
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