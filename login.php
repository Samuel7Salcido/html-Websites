<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$username = $_SESSION['userid'];
$username = $_SESSION['username'];
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>F.D.G.E.- login </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
<li><a href="login.php">Log In/Sign Up</a></li>												<li>
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
								<div id="content">

									<!-- Content -->

										<article>
											<header class="major">
												<h2>Login</h2>
												<p>log in in order to view our 
												services live</p>
											</header>

									<div>
									
									
<?php

	if(username && $userid)
	{
		echo "You are already logged in as <b>$username</b>.";
	}
	else {
	$form = "<form action='./login.php' method = 'post'> 
	<table>
	<tr>
		<td>Username:</td>
		<td><input type = 'text' name = 'user' /></td>
	</tr>
	
	<tr>
		<td>Password:</td>
		<td><input type = 'password' name = 'password' /></td>
	</tr>

<tr>
		<td></td>
		<td><input type = 'submit' name = 'loginbtn' value = 'Login' /></td>
	</tr>
	
	<tr>
		<td></td>
		<td><a href = './register.php'>Register</a> <a href = './forgotpass.php'>Forgot your password?</a></td>
	</tr>

	
	</table>
	</form>";
	
	if($_POST['loginbtn'])
	{
		$user = $_POST['user'];
		$password = $_POST['password'];
	
		if($user)
		{
			if($password)
			{
				require("connect.php");
				
				$password = md5(md5("JOhN316".$password."trUtH7"));
				//Make sure login info correct
				$query = mysql_query("SELECT * FROM  users WHERE username = '$user'");
				$numrows= mysql_num_rows($query);
			
				if($numrows == 1)
				{
					$row = mysql_fetch_assoc($query);
					$dbid = $row['id'];
					$dbuser = $row['username'];
					$dbpass = $row['password'];
					$dbactive = $row['active'];
					
					if($password == $dbpass)
					{
						if($dbactive == 1)
						{
						$_SESSION['username'] = $dbuser;
						$_SESSION['userid'] = $dbid;
						
						echo "You have been logged in as <b>$dbuser</b> <a href='./livestream.php'>Click here</a> to continue";
						}
					else
						echo "You must active your acount to login. $form";
					}
				else
					echo "You did not enter the correct password. $form";
				}
			
			else
				echo "You must enter your password. $form";
			
			}
		else
			echo "You must enter your username. $form";
		
		}
	}
	else
		echo $form;
	}
?>
									
									</div>
											

											

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
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
										</ul>
									</section>

								<!-- Links -->
									<section>
										<h2>Other links</h2>
										<ul class="divided">
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
											<li><a href="#"></a></li>
										</ul>
									</section>

							</div>
							<div class="6u 12u(mobile)">

								<!-- About -->
									<section>
										<h2>Fortaleza de Guerra Espiritual</h2>
										<p>&nbsp;</p>
										<a href="../ContactUs.html" class="button alt icon fa-arrow-circle-right">Contact Us</a>
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