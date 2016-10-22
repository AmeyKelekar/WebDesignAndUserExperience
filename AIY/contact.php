<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="" />
		<meta name="Gestured" content="" />
		<meta name="generator" content="WordPress 4.0" />
		<meta name="viewport" content="width=device-width">
		
		<title>Auction it yourself</title>
		
		<link rel="shortcut icon" href="http://learn.jquery.com/jquery-wp-content/themes/learn.jquery.com/i/favicon.ico">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jquery/css/base.css?v=1">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<style>
			#submitButton{
				background-color: #474719;!important;
			}
		</style>
		
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/modernizr.custom.2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape('%3Cscript src="//learn.jquery.com/jquery-wp-content/themes/jquery/js/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/plugins.js"></script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/main.js"></script>
		<script src="http://use.typekit.net/wde1aof.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>	
	</head>
	<body class="jquery-learn home page page-id-17 page-template page-template-home-php page-slug-index single-author singular">
		<header>
		</header>
		<div id="container">
			<nav id="main" class="constrain clearfix">
				<div class="menu-top-container">
					<ul id="menu-top" class="menu">
						<li class="menu-item"><a href="AboutUs.php">About Us</a></li>
						<li class="menu-item"><a href="contact.php">Contact Us</a></li>
						<li class="menu-item"><a href="help.php">HELP</a></li>
						<li class="menu-item"><a href="whatorc.php">What is reverse auctioning?</a></li>
						<li class="menu-item"><a href="steps.php">Steps in reverse auctioning</a></li>
					</ul>
				<div>
			</nav>
			<div id="logo-events" class="constrain clearfix">
				<h2 class="logo"><a href="/" title="jQuery Learning Center">jQuery Learning Center</a></h2>
				<aside><div id="broadcast"></div></aside>
			</div>
			<!--<div id="logo-events" class="constrain clearfix">
				<h1 class="logo"><a href="/" title="auction it yourself">auction it yourself</a><h1>
				<p>reverse auctioning re-engineered</p>
				<aside><div id="broadcast"></div></aside>
			</div>-->
			<div id="content-wrapper" class="clearfix row">
				<div class="content-right twelve columns">
					<div id="content">
						<h1 class="entry-title">Please enter contact details below</h1>
						<hr>
						<h2>
							<font face='Comic Sans MS' size='+2'>You can enter your Name, Email and queries to us here</font>
						</h2>
						<h3 class="title"> 
							<form action="contact1.php" method="post">
								<font face='Comic Sans MS' size='+1'>
								<div class ="row">
									<div class = "col-md-3">
										<p><label for="name">Name</label></p>
									</div>
									<div class = "col-md-9">
										<input type="text" name="name" id="name" maxlength="60"/>
									</div>
								</div>
								<div class ="row">
									<div class = "col-md-3">
										<p><label for="email">Email</label></p>
									</div>
									<div class = "col-md-9">
										<input type="text" name="email" id="email" maxlength="60"/>
									</div>
								</div>
								<div class ="row">
									<div class = "col-md-3">
										<p><label for="comments" style="vertical-align: top;">Comments</label></p>
									</div>
									<div class = "col-md-9">
										<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
									</div>
								</div>
								<p>
									<input type="submit" name="submit" value="SUBMIT" id="submitButton">
								 </p>
								</font>
							</form>
						</h3>
						<font face='Comic Sans MS' size='+1'>
						You can also contact us at the following numbers <br/>
	        
						Amey Kelekar
						Number:9773483893<br/>
						
						Shubhlaxmi Kelekar									
						Number:8956126748  <br/>
						
						Abhay Kelekar									
						Number: 9821556323 <br/>
						</font>
					</div>
					<div id="sidebar" class="widget-area" role="complementary">
						<aside class="widget">
							<?php
								error_reporting(0);
								session_start();
								$connect=mysql_connect("localhost","root","root");
								mysql_select_db("phpregister");	
								if(!$connect)
								{
									die('could not connect:'.mysql_error());
								}
								$uname = $_SESSION['username'];
								$pswd = $_SESSION['password'];
								$query=mysql_query("SELECT * FROM users WHERE username='$uname' AND password='$pswd'");
								$pid = mysql_result($query, 0, "uid");
								$ptype = mysql_result($query, 0, "type");
								if($ptype==1)
									echo "<h3 class='widget-title'><a href='member.php'>Back to Home</a></h3>";
								else
									echo "<h3 class='widget-title'><a href='member1.php'>Back to Home</a></h3>";
							?> 
						</aside>
					</div>
				</div>
			</div>
		</div>
		<footer class="clearfix simple">
			<div class="constrain">
				<div id="legal">
					<p class="copyright">Copyright 2014 Designed by Amey Kelekar</p>
				</div>
			</div>
		</footer>
	</body>
</html>