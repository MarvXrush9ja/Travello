<?php include "includes/db.php";
ob_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/signup.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="index.html">Travello</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<!-- <li><a href="news.php">News</a></li> -->
									<li><a href="contact.php">Contact</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="signup.php">Sign up</a></li>
								</ul>
							</nav>
							<div class="header_phone ml-auto">Call us: 00-56 445 678 33</div>

							<!-- Hamburger -->

							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Travello</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About us</a></li>
				<!-- <li><a href="#">Services</a></li> -->
				<!-- <li><a href="news.php">News</a></li> -->
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign up</a></li>
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_phone ml-auto">Call us: 00-56 445 678 33</div>
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
	</div>

	<!-- Search -->

<?php
	if(isset($_POST["sign_up"])){
		$firstname =  $_POST["signup_first_name"];
		$lastname =  $_POST["signup_last_name"];
		$username =  $_POST["signup_username"];
		$email =  $_POST["signup_email"];
		$p1 =  $_POST["signup_password"];
		$p2 =  $_POST["confirm_password"];

		if($p1 != $p2){
		echo "<div class='alert alert-danger'>Passwords not the same</div>";
		}else{
			$check = "SELECT * FROM signup WHERE signup_username = '$username' ";
			$check_query = mysqli_query($connection,$check);
			if(mysqli_num_rows($check_query) != 0){
				echo "<div class='alert alert-danger'>Sorry,username already exists. Try something else.</div>";
			}else{
				$submit = "INSERT INTO signup(signup_first_name,signup_last_name,signup_username,signup_email,signup_password) VALUES('$firstname','$lastname','$username','$email','$p1')";
				$submit_query = mysqli_query($connection,$submit);
				if($submit_query){
					header("Location: login.php?signup=yes");
				}
			}
		}

	}
?>


	<div class="" style="top: 80px; left: 300px; position: absolute;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" >
					<div class="contact_form_container">
						<form action="" method="post" id="contact_form" class="contact_form">
							<div style="margin-bottom: 18px">
								<input type="text" name="signup_first_name" class="contact_input contact_input_name inpt" placeholder="First Name" required="required">
								<div class="input_border"></div>
							</div>

							<div style="margin-bottom: 18px">
								<input type="text" name="signup_last_name" class="contact_input contact_input_name inpt" placeholder="Last Name" required="required">
								<div class="input_border"></div>
							</div>

							<div style="margin-bottom: 18px">
								<input type="text" name="signup_username" class="contact_input contact_input_name inpt" placeholder="UserName" required="required">
								<div class="input_border"></div>
							</div>

							<div style="margin-bottom: 18px">
								<input type="email" name="signup_email" class="contact_input contact_input_name inpt" placeholder="Email" required="required">
								<div class="input_border"></div>
							</div>

							<!-- Password section -->
							<div class="row">

								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
										<input type="password" name="signup_password" id="password" class="contact_input contact_input_email input" placeholder="Password" required="required">
										<div class="input_border"></div>
										<div class="spanl">Enter a password longer than 8 characters</div>
										
									</div>
								</div>
								<!-- pattern=".{8,}" title="minimum of 8 characters needed" html password valdation -->

								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
										<input type="password" name="confirm_password" id="Confirm_password" class="contact_input contact_input_subject input" placeholder="Confirm Password" required="required">
										<div class="input_border"></div>
										<div class="spang">Confirm your password</div>
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-lg-6" style="display: inline-block;">
									<input type="submit" class="contact_button btn-sm"style="display: inline-block;" value="Sign-up" name="sign_up">
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- SIGNUP PAGE -->
	<!-- <form action="" method="">
		<div class=" travello_container">
			<div class="row">
				<div class="col-6 offset-3 mt-5">
					<div class="mt-2">
						<input class="mr-5" type="text" name="first_name" placeholder="First Name"style="width:200px; height:40px;">
						<input type="text" name="last_name" placeholder="Last Name" style="width:200px; height:40px;">
					</div>

					<div class="mt-2">
						<input class="mr-5" type="text" name="username" placeholder="UserName" style="width:200px; height:40px;">
						<input type="email" name="email" placeholder="Email" style="width:200px; height:40px;">
					</div>

					<div class="mt-2">
						<input class="mr-5" type="password" name="pass" placeholder="Password"style="width:200px; height:40px;">
						<input type="password" name="repass" placeholder="Re-enter Password" style="width:200px; height:40px;">
					</div>

					<div class="mt-2">
						<input class="mr-1" type="checkbox" name="sign" value=""><label for="sign"> Keep me signed in</label>
						<input type="submit" class="btn btn-primary" name="sub" placeholder="Sign Up">
					</div>

				</div>

				
			</div>
		</div>
	</form> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter">
						<div class="newsletter_title_container text-center">
							<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
							<div class="newsletter_subtitle">Join our database NOW!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
									<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name" required="required"><div class="input_border"></div></div>
									<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email" placeholder="Your e-mail" required="required"><div class="input_border"></div></div>
								</div>
								<div><button class="newsletter_button">subscribe</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_contact_row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
								<div class="footer_contact_title">give us a call</div>
								<div class="footer_contact_list">
									<ul>
										<li>Office Landline: +44 5567 32 664 567</li>
										<li>Mobile: +44 5567 89 3322 332</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
								<div class="footer_contact_title">come & drop by</div>
								<div class="footer_contact_list">
									<ul style="max-width:190px">
										<li>4124 Barnes Street, Sanford, FL 32771</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Footer Contact Item -->
						<div class="col-xl-4 footer_contact_col">
							<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
								<div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
								<div class="footer_contact_title">send us a message</div>
								<div class="footer_contact_list">
									<ul>
										<li>youremail@gmail.com</li>
										<li>Office@yourbusinessname.com</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="col text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/signup.js"></script>
</body>
</html>