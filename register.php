<?php
error_reporting(E_ERROR | E_PARSE);
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
										<h1><a href="index.html" id="logo">F.D.G.E.</a></h1>

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
												<li><a href="leadership.html">Leadership</a></li>
												<li><a href="newsandevents.html">newsandevents</a></li>
												<li class="current_page_item"><a href="AboutUs.html">About Us</a></li>
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

									<div class="auto-style1">
									
									
										<?php
											
											if($_POST['registerbtn']){
											
												$getuser = $_POST['user'];
												$getemail = $_POST['email'];
												$getpass = $_POST['pass'];
												$getretypepass = $_POST['retypepass'];
											
											
												if($getuser)
												{
													if($getemail)
													{
														if($getpass)
														{
														
															if($getretypepass)
															{
																if($getpass === $getretypepass)
																{
																
																	if((strlen($getemail) >= 7) && (strstr($getemail, "@")) &&(strstr($getemail,".")) )
																	{
																		require("./connect.php");
																		
																		$query = mysql_query("SELECT * FROM users WHERE username = '$getuser'");
																		$numrows = mysql_num_rows($query);
																		
																		if($numrows == 0)
																		{
																				$password = md5(md5("JOhN316".$password."trUtH7"));
																				$query = mysql_query("SELECT * FROM users WHERE email = '$getemail'");
																				$numrows = mysql_num_rows($query);
																		
																				if($numrows == 0)
																				{
																				
																					$date = date("F d, Y");
																					$code =md5(rand());
																					
																					mysql_query("INSERT INTO users VALUES (
																					'', '$getuser', '$password', '$getemail', '0', '$code', '$date' 
																					
																					)");
																					
																					$query = mysql_query("SELECT * FROM users WHERE username = '$getuser'");
																					$numrows = mysql_num_rows($query);
																					
																					if($numrows == 1)
																					{
																						$site = "http://204.158.158.53/COSC445502SM15/Church/php";
							  
																						$webmaster = "Samuel Salcido <admin@samuelsalcido.com>";
																						$headers = "From: $webmaster";
																						$subject = "Activate Your Account";
																						$message = "Thank you for registering! Click the link below to activate your account";
																						$message .= "$site/actiavte.php?user=$getuser&code=$code";
																						
																						if(mail($getemail, $subject, $message, $headers))
																						{
																							$errormsg= "You have been registered. You must activate your account from the activation link sent to $email";
																							$getuser = "";
																							$getemail = "";
																						}
																						
																						else
																							$errormsg = "An error has occured. Your activation email was not sent.";
																					}
																					else
																					$errormsg = "An error has occured. Your account was not created";
																				}
																				else
																				$errormsg = "There is already a user with that email";

																		}
																		else
																		$errormsg = "There is already a user with that username";
																		
																		mysql_close();
																	}
																	else
																		$errormsg = "You must enter a valid email address to register.";
																
																}
																else
																	$errormsg = "Your passwords did not match";
															}
															
															else
															$errormsg = "You must retype your password to register";
														
														}
														else
															$errormsg = "You must enter your password to register";
													}
													
													else 
														$errormsg = "You must enter your email to register";
												
												}
												else
													$errormsg = "You must enter your username to register.";
											}
											
											else
											$form = "<form action = './register.php' method = 'post'>
											
											<table>
											<tr>
											
												<td></td>
												<td><font color = 'red'>$errormsg</td>
											
											</tr>

											
											<tr>
											
												<td>Username:</td>
												<td><input type= 'text' name = 'user' value = '$getuser' /></td>
											
											</tr>
											
											<tr>
											
												<td>Email:</td>
												<td><input type= 'text' name = 'email' value = '$getemail' /></td>
											
											</tr>
											
											
											<tr>
											
												<td>Password:</td>
												<td><input type= 'password' name = 'pass' value = '' /></td>
											
											</tr>
											
											<tr>
											
												<td>Retype Password:</td>
												<td><input type= 'password' name = 'retypepass' value = '' /></td>
											
											</tr>
											
											<tr>
											
												<td></td>
												<td><input type= 'submit' name = 'registerbtn' value = 'Register' /></td>
											
											</tr>
											</table>
											
											</form>";
											
											echo $form;
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