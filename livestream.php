<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$username = $_SESSION['userid'];
$username = $_SESSION['username'];
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>F.D.G.E.- Livestream</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
		</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			&nbsp;<!-- Header Wrapper --><div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="../index.html" id="logo">F.D.G.E.</a></h1>

									<!-- Nav -->
										<nav id="nav">
											<ul>
<li><a href="php/login.php">Log In/Sign Up</a></li>												<li>
													<a href="#">Ministries</a>
													<ul>
														<li><a href="#">Men's Ministries</a></li>
														<li><a href="#">Woman's Ministries</a></li>
														<li>
															<a href="#">Youth Ministries</a>
																													</li>
														<li><a href="#">Kid's Ministries</a></li>
													</ul>
												</li>
												<li><a href="../leadership.html">Leadership</a></li>
												<li><a href="../newsandevents.html">newsandevents</a></li>
												<li class="current_page_item"><a href="../AboutUs.html">About Us</a></li>
											</ul>
										</nav>

								</div>
							</header>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content" class="auto-style1">

									<!-- Content -->

										<article>
											<header class="major">
												<h2>watch us live</h2>
												<p>7:00p.m. on Wednesdays | 
												1:00P.M. on sundays</p>
											</header>
											
											<div>
											<?php

											if($username)
												{
	echo "Welcome <b>$username</b>";
}
else
	echo "Please login to access to access this page. <a href='./login.php'>Login here</a>";
?>
 

											</div>

											<span class="image featured"><iframe width="720" height="440" src="http://www.ustream.tv/embed/recorded/62643978?ub=85a901&amp;lc=85a901&amp;oc=ffffff&amp;uc=ffffff&amp;v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
<br /><a href="http://www.ustream.tv" style="font-size: 12px; line-height: 20px; font-weight: normal; text-align: left;" target="_blank">Broadcast live streaming video on Ustream</a></span>
									
											

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 12u(mobile)">

								<!-- Links -->
									<section>
										<h2>Our links</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare in in lectus</a></li>
											<li><a href="#">Semper mod sed tempus nisi</a></li>
											<li><a href="#">Consequat etiam phasellus</a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Other links</h2>
										<ul class="divided">
											<li><a href="#">Quam turpis feugiat dolor</a></li>
											<li><a href="#">Amet ornare hendrerit lectus</a></li>
											<li><a href="#">Semper quisturpis nisi</a></li>
											<li><a href="#">Consequat lorem phasellus</a></li>
										</ul>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- About -->
									<section>
										<h2>Fortaleza de Guerra Espiritual</h2>
										<p>&nbsp;</p>
										<a href="ContactUs.html" class="button alt icon fa-arrow-circle-right">Contact Us</a>
									</section>

								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
										<div>
											<div class="row">
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@</a>fdge</dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/</a>fdgemidland</dd>
														<dt>Email</dt>
														<dd>fdgemidland<a href="#">@</a>gmail.com</dd>
													</dl>
												</div>
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															2309 S. Ft. Worth 
															St.<br />
															Midland, TX 79701<br />
															USA
														</dd>
														<dt>Phone</dt>
														<dd>(432) 425-3161</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; F.D.G.E. All rights reserved</li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>