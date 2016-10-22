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
						<h1 class="entry-title"></h1>
						<p>
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
								
								$deal = $_GET['type']."_db";
								$id = $_GET['id'];
								$typ = $_GET['type'];
	
								$f=0;
								$idid = "";
								if($deal == "art_db") {
									$f = 4;
									$idid = "artid";
								}
								if($deal == "comp_db") {
									$f = 8;
									$idid = "cid";
								}
								if($deal == "mobile_db") {
									$f = 5;
									$idid = "mid";
								}
								if($deal == "car_db") {
									$f = 4;
									$idid = "carid";
								}
	
								$m = mysql_query("SELECT * FROM $deal where $idid='$id'");
								echo "<br/><br/><font face='Monotype Corsiva' size='+2'>The Product details are:</font>";
								echo "<br/>";
	
								$pname=mysql_result($m,0,"pid");
								$ppname=mysql_query("SELECT * FROM users WHERE uid=$pname");
								$pppname=mysql_result($ppname,0,"fullname");
								echo "<font face='Comic Sans MS' size='+1'>";
								echo "The name of the buyer is: ";
								echo "<font color='red'>";
								echo $pppname;
								echo "</font>";
								echo "<br/>";
								echo "</font>";
	
								for($j=1;$j<=$f;$j++) {
									echo "<font face='Comic Sans MS' size='+1'>";
									echo mysql_result($m, $i, $j)."<br/> ";
								}
								echo "<br/>";
								echo "<font face='Comic Sans MS' size='+1' color='red'>";
								echo "Comments: ";
								echo "</font>";
								echo mysql_result($m, $i, $f+3)." ";
								echo "</font>";
								
								echo "<br/><br/><font face='Monotype Corsiva' size='+2'>Deals Available:</font>";
								$m = mysql_query("SELECT * FROM $deal where mbid='$id'");
								echo "<br/>";
								$nm = mysql_num_rows($m);

								for($i=0;$i<$nm;$i++) {
									$per = mysql_result($m, $i, $f+2);
									$pdata = mysql_query("SELECT * FROM users where uid=$per"); 
									$pname = mysql_result($pdata,0,"fullname");
									echo "<font face='Comic Sans MS' size='+1'>";
								
									echo "The name of the Seller is: ";
								 
									echo "<font face='Comic Sans MS' size='+1' color='red'>";
									echo $pname." ";
									echo "</font>";
									if($ptype==1)
									{
										echo "<a href='creditcard.html'>(Payment)</a>";
									}
									echo "</font>";
									echo "<br/>";
									echo "<font face='Comic Sans MS' size='+1' color='red'>";
									echo "Bid is: ";
									echo "</font>";
									for($j=1;$j<=$f;$j++) {
										echo "<font face='Comic Sans MS' size='+1'>";
										echo mysql_result($m, $i, $j)." ";
									}
									echo "<br/>";
									echo "<font face='Comic Sans MS' size='+1' color='red'>";
									echo "Comments: ";
									echo "</font>";
									echo mysql_result($m, $i, $f+3)." ";
									echo "</font>";
									echo "<br/>";
								}
								$pg = $typ."1.php";
								if($ptype==2)
								include_once($pg);
							?>
						</p>
					</div>
					<div id="sidebar" class="widget-area" role="complementary">
						<aside class="widget">
							<?php
								if($ptype==1)
									echo "<h3 class='widget-title'><a href='member.php'>Back</a></h3>";
								else
									echo "<h3 class='widget-title'><a href='member1.php'>Back</a></h3>";

								if($ptype==1)
								{
									if($typ=="mobile")
										echo "<h3 class='widget-title'><a href='mobile_automate.php?type=".$typ."&id=".$id."'>Mobile Automate</a></h3>";
									if($typ=="car")
										echo "<h3 class='widget-title'><a href='car_automate.php?type=".$typ."&id=".$id."'>Car Automate</a></h3>";
									if($typ=="comp")
										echo "<h3 class='widget-title'><a href='comp_automate.php?type=".$typ."&id=".$id."'>Computer Automate</a></h3>";
									if($typ=="art")
										echo "<h3 class='widget-title'><a href='art_automate.php?type=".$typ."&id=".$id."'>Art Automate</a></h3>";
								}
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