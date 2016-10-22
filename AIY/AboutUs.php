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

		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<script src="http://learn.jquery.com/jquery-wp-content/themes/jquery/js/modernizr.custom.2.6.2.min.js"></script>
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
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
				</div>
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
						<h1 class="entry-title">About our website</h1>
						<hr>
						<p>Auction it yourself is a an automated website that will help buyers get best deals with the click of a button.</p>
						<h2>About Us.</h2>
						<p>
						We are the leading website in reverse auctioning systems,  supporting automation to further aid the buyer with the buying process.<br>
						Auction it yourself will incorporate registration and login  facilities for the both the buyer and the seller along with the authentication  check for sellers based on the information in the dataset. The profiles  development option will enable the buyers to describe the product requirements  and the budget. The sellers with similar capabilities will be able to view the profile  and bid for it. The bids will fluctuate as time passes into the auction. This  will be followed by a unique automated decision making process based on “Real  Time Forecasting for Online Auctions using K-Nearest Neighbor” in order to help  the buyer select an apt deal for the product within the budget. A payment  option involving Credit Card payment or PayPal process will be available for  payment. This will finally be followed by an email notification to the buyer  and the corresponding seller indicating the completion of the transaction.<br>
						Developed by Amey Kelekar.
						</p>
						<div id="accordion">
							<h3>Section 1: Car</h3>
							<div>
								<p>
								Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
								ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
								amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
								odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
								</p>
							</div>
							<h3>Section 2: Computer</h3>
							<div>
								<p>
								Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
								purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
								velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
								suscipit faucibus urna.
								</p>
							</div>
							<h3>Section 3: Mobile</h3>
							<div>
								<p>
								Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
								Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
								ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
								lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
								</p>
								<ul>
									<li>Samsung Tablet</li>
									<li>Motorola Phone</li>
									<li>Nokia Lumnia Series</li>
								</ul>
							</div>
							<h3>Section 4: Art</h3>
							<div>
								<p>
								Cras dictum. Pellentesque habitant morbi tristique senectus et netus
								et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
								faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
								mauris vel est.
								</p>
								<p>
								Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
								Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
								inceptos himenaeos.
								</p>
							</div>
						</div>
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
	<script>
		$(function() {
			$("#accordion").accordion();
		});
	</script>
</html>