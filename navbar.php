<?php 
session_start(); 
include("resources/connection.php");
include("php/page-info.php");
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
			  <title><?= $_SESSION['current_page']; ?></title>
			  <?php $_SERVER['REQUEST_URI']; ?>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name='description' content="<?= $_SESSION['Description']; ?>">            
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link href="/style/bootstrap.css" rel="stylesheet">
              <link href="/style/font-awesome.min.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
			  	<!-- Google tag (gtag.js) -->
				<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RPTZMXYWQ"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-3RPTZMXYWQ');
				</script> -->
        </head>


        
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<!-- <a class="navbar-brand" href="/"><img src="/logo.svg"></a>	 -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- Monbile Link -->
						<a href="tel:+15864745795" class="nav-number-link  d-block d-lg-none"><span style="font-size: 1.6rem;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(734)519-6702</span></a>
						<!-- Desktop Link -->
						<a href="/" class="nav-number-link d-none d-lg-block"><span style="font-size: 1.6rem;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(734)519-6702</span></a>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/">Home</a>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/learn.php">Learn</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<!-- <a class="dropdown-item">Services</a> -->
										<a class="dropdown-item" href="/pages/services/concrete-stamped.php">Stamped Concrete</a>
										<a class="dropdown-item" href="/pages/services/concrete-driveway.php">Driveways</a>
										<a class="dropdown-item" href="/pages/services/concrete-driveway-repair.php">Driveway Repair</a>
										<a class="dropdown-item" href="/pages/services/concrete-commercial.php">Commercial</a>
										<a class="dropdown-item" href="/pages/services/concrete-foundation.php">Foundation</a>
										<a class="dropdown-item" href="/pages/services/concrete-slabs.php">Slabs</a>
										<a class="dropdown-item" href="/pages/services/concrete-cutting.php">Cutting</a>
										<a class="dropdown-item" href="/pages/services/concrete-repair-and-resurfacing.php">Repair and Resurfacing</a>
										<a class="dropdown-item" href="/pages/services/concrete-sidewalks.php">Sidewalks</a>
										<a class="dropdown-item" href="/pages/services/concrete-patio.php">Patios</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/concrete-stamped.php">Stamped Concrete</a>
										<a class="dropdown-item" href="/pages/services/concrete-driveway.php">Driveways</a>
										<a class="dropdown-item" href="/pages/services/concrete-driveway-repair.php">Driveway Repair</a>
										<a class="dropdown-item" href="/pages/services/concrete-commercial.php">Commercial</a>
										<a class="dropdown-item" href="/pages/services/concrete-foundation.php">Foundation</a>
										<a class="dropdown-item" href="/pages/services/concrete-slabs.php">Slabs</a>
										<a class="dropdown-item" href="/pages/services/concrete-cutting.php">Cutting</a>
										<a class="dropdown-item" href="/pages/services/concrete-repair-and-resurfacing.php">Repair and Resurfacing</a>
										<a class="dropdown-item" href="/pages/services/concrete-sidewalks.php">Sidewalks</a>
										<a class="dropdown-item" href="/pages/services/concrete-patio.php">Patios</a>
									</div>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/about-us.php">About Us</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/articles.php">Articles</a>
								</li> -->
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/faq.php">FAQ</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/contact-us.php">Contact Us</a>
								</li>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/privacy-policy.php">Privacy</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/disclaimer.php">Disclaimer</a>
								</li> -->
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/jobs.php">Jobs</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/donate.php">Donate</a>
								</li> -->

								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/contact.php">Chat</a>
								</li> -->
								<?php
									if(!isset($_SESSION['User'])){
								?>
								<!-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/login.php">Login</a>
								</li> -->
								<?php
									}
									else{
								?>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['User']; ?></a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/account/profile.php">View Profile</a>
										<a class="dropdown-item" href="/handler/signout.php">Sign Out</a>
									</div>
								</li>
								<?php
									}
								?>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
