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
			body{
				background: url(http://jqueryui.com/jquery-wp-content/themes/jquery/images/bg-footer-noise.jpg) repeat !important;
			}
		</style>

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
						<li class="menu-item"><a href="member.php">Home</a></li>
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
						<?php
							session_start();
							error_reporting(0);
							$mname = strip_tags($_POST['mname']);
							$number = strip_tags($_POST['number']);
							$card=strip_tags($_POST['card']);
							$country=strip_tags($_POST['country']);
							$tel=$_POST['phone'];
							$address=$_POST['shipping'];
							$uname = strtolower(strip_tags($_POST['username']));
							$product = strip_tags($_POST['product']);
							$package = strip_tags($_POST['package']);

							$flag=0;
							if($mname && $card && $number && $tel && $country && $address && $product && $package)
							{
								if(!ctype_alnum(str_replace(array(' ',"'",'-'),'',$mname)) && (!is_numeric($mname[0])))
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";	
									echo "Member name is not accepted.<br/>";
									echo "</font>";
								}
								if(isset($_POST['card'])&&(strlen($card)<=16))
								{
									$card=$_POST['card'];
								}
								else
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";	
									echo "The card type is not selected<br/>";
									echo "/font>";
								}
								if(!(is_numeric($number) && (strlen($number)==16)))
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Enter valid credit card number <br/>"; 
									echo "</font>";
								}			
								if(!is_numeric($tel))
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Enter valid phone number <br/>"; 
									echo "</font>";
								}	
								if (!isset ($country) )
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Please select a country<br/>";
									echo "</font>";
								}
								else 
								{ // there is a value
									$category = mysql_real_escape_string ($country);
								}
								if ( strlen( $address ) == 0 )
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Shipping Address is not entered<br/>";
									echo "</font>";
								}	
								if (!isset ($product) )
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Please select an item<br/>";
									echo "</font>";
								}
								else 
								{ // there is a value
									$category = mysql_real_escape_string ($product);
								}
								if(isset($_POST['package']))
								{
									$package=$_POST['package'];
								}
								else
								{
									$flag+=1;
									echo "<font face='Courier New' size='+1' color='red'>";	
									echo "The package type is not selected<br/>";
									echo "/font>";
								}
							}
							else
							{
								$flag+=1;
								echo "<font face='Courier New' size='+1' color='red'>";
								echo "Please fill in <b> all </b> the details <br/>";
								echo "</font>";
							}
						?>
						<?php
							$connect=mysql_connect("localhost","root","root");
							mysql_select_db("phpregister");
							if(!$connect)
							{
								die('could not connect:'.mysql_error());
							}
							if($flag==0)
							{	
								echo "<h1><font face='Courier New' size='+1' color='#009900'>";
								echo "Your transaction is complete successfully";
								echo "</font></h1>";
								mysql_query("INSERT INTO `phpregister`.`credit_card` (`member`, `card_type`, `card_number`, `phone`, `country`, `ship_address`, `pro_type`,`pack_type`) VALUES ('$mname', '$card', '$number', '$tel', '$country', '$address', '$product', '$package')");
							}
							else
							{
								echo "<font face='Courier New' size='+1' color='red'>";
								echo " could not update database";
								echo "</font>";
							}
						?>
					</div>
					<div id="sidebar" class="widget-area" role="complementary">
						<aside class="widget">
							<h3 class='widget-title'><a href='logout.php'>Logout</a></h3>
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