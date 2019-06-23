<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Montserrat:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="fh5co-top-logo">
				<div id="fh5co-logo"><a style="color: #2196f3;" href="index.html">Go Back</a></div>
			</div>
			<div class="fh5co-top-menu menu-1 text-center">
				<ul>
					<li><a href="https://play.google.com/store/apps/details?id=com.zeepzoop.user" target="_blank">
				<span>Get the App</span></a></li>
					<li class="has-dropdown">
						<a href="">Categories</a>
						<ul class="dropdown">
						<li><a href="slider.html">Clothing</a></li>
					<li><a href="">Jwellory</a></li>
					<li><a href="">Accessory</a></li>
					<li><a href="slider.html">Home decor</a></li>
						</ul>
					
					<li class="has-dropdown">
						<a href="">Company</a>
						<ul class="dropdown">
							<li><a href="">Our story</a></li>
							<li><a href="">Our Team</a></li>
							<li><a href="">Our Partners</a></li>
							<li><a href="">Meet The CEO</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="fh5co-top-social menu-1 text-right">
				<ul class="fh5co-social">
					<li><a href=""><i class="fab fa-twitter"></i></a></li>
					<li><a href=""><i class="fab fa-github"></i></a></li>
					<li><a href=""><i class="fab fa-linkedin"></i></a></li>
					<li><a href=""><i class="fab fa-facebook"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
					<li><a href="mailto:harshit.pandey1798@gmail.com"><i class="fab fa-mail"></i></a></li>
				</ul>
			</div>
			
		</div>
	</nav>
	<div id="">
		<div class="container">
			<div class="row top-line animate-box">
				<div class="col-md-6 col-md-offset-3 col-md-push-2 text-left fh5co-heading">
					<h2 style="color: #2196f3;">Welcome</h2>
					<h3> <a href="http://freehtml5.co/" target="_blank"></a></h3>
					<p></p>
				</div>
			</div>
	<div class="row top-line animate-box">
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="validation.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="registration.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="user" id="user" tabindex="1" class="form-control" placeholder="Username" value="" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="" required>
									</div>
									<div class="form-group">
										<input type="no" name="m_no" id="m_no" tabindex="3" class="form-control" placeholder="Mobile-no" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="4" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="rpassword" tabindex="5" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="6" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	</div>
</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2 style="color: #2196f3;">Get Started</h2>
					<p>We create beautiful, responsive and secure websites.<br> If you're ready to launch your eCommerce site, <br>We'd love to hear from you.</p>
					<p><a href="" class="btn btn-primary">Business With Us</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Copyrights&copy; ZeepZoop 2019 . All Rights Reserved.</small> 
						</p>
					
					<ul class="fh5co-social-icons">
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-github"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						<li><a href=""><i class="fab fa-facebook"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href="harshit.pandey1798@gmail.com"><i class="fab fa-mail"></i></a></li>
					</ul>
					
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

