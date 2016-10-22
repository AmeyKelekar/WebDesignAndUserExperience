<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="jQuery, plugin, accordion, slider, slideshow, horizontal, timed, interval" />
		<meta name="Gestured" content="" />
		<meta name="generator" content="WordPress 4.0" />
		<meta name="viewport" content="width=device-width" />
		<meta name="author" content="" />
		<meta name="description" content="jQuery Easy Accordion Plugin - A highly flexible timed horizontal slider able to show any kind of content" />
		
		<title>Auction it yourself</title>
		
		<link rel="shortcut icon" href="http://learn.jquery.com/jquery-wp-content/themes/learn.jquery.com/i/favicon.ico">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jquery/css/base.css?v=1">
		<link rel="stylesheet" href="http://jqueryui.com/jquery-wp-content/themes/jqueryui.com/style.css">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		
		<style type="text/css">
			#submitButton{
				background-color: #474719 !important;
			}
			body{
				background: url(http://jqueryui.com/jquery-wp-content/themes/jquery/images/bg-footer-noise.jpg) repeat !important;
			}
			
			/* First Level UL List */
			#accordion {
				margin:0;
				padding:0;	
				list-style:none;
			}
			#accordion li {
				width:267px;
			}
	
			#accordion li a {
				display: block;
				width: 268px;
				height: 43px;	
				text-indent:-999em;
				outline:none;
			}
		
			/* Using CSS Sprite for menu item */
			#accordion li a.mobile {
				background:url(menu.jpg) no-repeat 0 0;	
			}

			#accordion li a.mobile:hover, .mobileOver {
				background:url(menu.jpg) no-repeat -268px 0 !important;	
			}
		
			#accordion li a.car {
				background:url(menu.jpg) no-repeat 0 -43px;	
			}

			#accordion li a.car:hover, .carOver {
				background:url(menu.jpg) no-repeat -268px -43px !important;	
			}
		
			#accordion li a.comp {
				background:url(menu.jpg) no-repeat 0 -86px;	
			}

			#accordion li a.comp:hover, .compOver {
				background:url(menu.jpg) no-repeat -268px -86px !important;	
			}
					
			#accordion li a.art {
				background:url(menu.jpg) no-repeat 0 -129px;	
			}

			#accordion li a.art:hover, .artOver {
				background:url(menu.jpg) no-repeat -268px -129px !important;	
			}
			
			/* Second Level UL List*/
			#accordion ul {
				background:url(bg.gif) repeat-y 0 0;
				width:268px;
				margin:0;
				padding:0;
				display:none;	
			}
		
			#accordion ul li {
				min-height:30px;
			}
			
			/* styling of submenu item */
			#accordion ul li a {
				width:240px;
				min-height:80px;
				margin-left:15px;
				padding-top:5px;
				border-bottom: 1px dotted #777;
				text-indent:0;
				color:#ccc;
				text-decoration:none;
			}

			/* remove border bottom of the last item */
			#accordion ul li a.last {
				border-bottom: none;
			}		
		</style>

		<!--<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>-->
		<!--<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>-->
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
						<?php
							error_reporting(0);
							session_start();
							if($_SESSION['username']) {
								echo "<font face='Comic Sans MS' size='+2'><b>Welcome</b></font>\n";
								echo "<font face='Comic Sans MS' size='+2' color='red'>";
								echo $_SESSION['username'];
								echo "</font>\n";
								echo "<font face='Comic Sans MS' size='+2'>to your buyer profile page</font>";
								echo "<br/><br/>";
						?>
						<script type="text/javascript">
							function getFields()
							{
								document.getElementById("sf").innerHTML = "Loading....";
								var xmlhttp;
								if (window.XMLHttpRequest)
								{
									xmlhttp=new XMLHttpRequest();
								}
								else
								{
									xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
								}
								var page = document.getElementById("type").value;
								var r = Math.random()*100000000;
								xmlhttp.open("GET",page+"1.php?r="+r,true);
								xmlhttp.send();
								xmlhttp.onreadystatechange=function()
								{
									if (xmlhttp.readyState==4 && xmlhttp.status==200)
									{
										document.getElementById("sf").innerHTML=xmlhttp.responseText;
									}
								}
							}
						</script>
						<div id="search">
							<form action="" method="post">
								<div class="row">
									<div class="three columns">
										<p><label for="type">Type of Deal:</label></p>
									</div>
									<div class="nine columns">
										<select id="type" name="type" onChange="getFields()">
											<option value="comp">COMPUTER/LAPTOP</option>
											<option value="mobile">MOBILE</option>
											<option value="art">ART</option>
											<option value="car">CAR</option>
										</select>
									</div>
								</div>
							</form>
							<div id="sf">
								<form action="computer_validate.php" method="post">
									<input type="hidden" name="mbid" value="0"/>
									<div class="row">
										<div class="three columns">
											<p><label for="brand">Brand:</label></p>
										</div>
										<div class="nine columns">
											<input type="text" name="compbrand" id="brand" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="os">OS:</label></p>
										</div>
										<div class="nine columns">
											<input type="text" name="os" id="os" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="color">Color:</label></p>
										</div>
										<div class="nine columns">
											<input type="text" name="compcolor" id="color" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="ram">RAM:</label></p>
										</div>
										<div class="nine columns">
											<input type="text" name="ram" id="ram" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="processor">Processor:</label>
										</div>
										<div class="nine columns">
											<input type="text" name="processor" id="processor" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="hdd">Hard Disk:</label>
										</div>
										<div class="nine columns">
											<input type="text" name="hdd" id="hdd" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="gc">Graphic card:</label>
										</div>
										<div class="nine columns">
											<input type="text" name="gc" id="gc" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="compbase">Base Price:</label>
										</div>
										<div class="nine columns">
											<input type="text" name="compbase" id="compbase" />
										</div>
									</div>
									<div class="row">
										<div class="three columns">
											<p><label for="comments" style="vertical-align: top;">Comments:</label></p>
										</div>
										<div class="nine columns">
											<textarea name="comments" id="comments" cols="30" rows="10"></textarea>
										</div>
									</div>
									<input type="submit" name="submit" value="submit" id="submitButton" />
								</form>
							</div>
						</div>
						<?php
							}
							else
								die ("You must be logged in");
						?>
					</div>
					<div id="sidebar" class="widget-area" role="complementary">
						<aside class="widget">
							<h3 class="widget-title"><a href="logout.php">Logout</a></h3>
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
									$c = mysql_query("SELECT * FROM car_db WHERE pid='$pid' AND mbid=0");
									$a = mysql_query("SELECT * FROM art_db WHERE pid='$pid' AND mbid=0");
									$l = mysql_query("SELECT * FROM comp_db WHERE pid='$pid' AND mbid=0");
									$m = mysql_query("SELECT * FROM mobile_db WHERE pid='$pid' AND mbid=0");
									$nc = mysql_num_rows($c);
									$na = mysql_num_rows($a);
									$nl = mysql_num_rows($l);
									$nm = mysql_num_rows($m);
								?>
								<ul id="accordion">
									<li><a href="#" class="mobile">Mobile</a>
										<ul>
											<?php
												$type = "mobile";
												for($i=0;$i<$nm;$i++) 
												{
													$x = mysql_num_rows(mysql_query("SELECT * FROM mobile_db WHERE mbid=".mysql_result($m, $i, 0)));
													$lst = "";
													if($i == $nm-1)
														$lst = " class=\"last\"";
													echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($m, $i, 0)."'".$lst.">";
													echo "<font size='-1'>"; 
													echo mysql_result($m, $i, "mbrand")." ";
													echo mysql_result($m, $i, "model")." ";
													echo mysql_result($m, $i, "color")." ";
													echo mysql_result($m, $i, "os")." ";
													echo mysql_result($m, $i, "mbase")." ";
													echo "<br/>$x Deals Available<br>";
													echo "</font>";
													echo "</a></li>";
												}
											?>
										</ul>
									</li>
									<li><a href="#" class="car">Car</a>
										<ul>
											<?php
												$type = "car";
												for($i=0;$i<$nc;$i++) 
												{
													$x = mysql_num_rows(mysql_query("SELECT * FROM car_db WHERE mbid=".mysql_result($c, $i, 0)));
													$lst = "";
													if($i == $nc-1)
														$lst = " class=\"last\"";
													echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($c, $i, 0)."'".$lst.">";
													echo "<font size='-1'>";
													echo mysql_result($c, $i, "brand")." ";
													echo mysql_result($c, $i, "model")." ";
													echo mysql_result($c, $i, "color")." ";
													echo mysql_result($c, $i, "basep")." ";
													echo "<br/>$x Deals Available<br>";
													echo "</font>";
													echo "</a></li>";
												}
											?>
										</ul>
									</li>
									<li><a href="#" class="comp">Computer</a>
										<ul>
											<?php
												$type = "comp";
												for($i=0;$i<$nl;$i++) 
												{
													$x = mysql_num_rows(mysql_query("SELECT * FROM comp_db WHERE mbid=".mysql_result($l, $i, 0)));
													$lst = "";
													if($i == $nl-1)
														$lst = " class=\"last\"";
													echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($l, $i, 0)."'".$lst.">";
													echo "<font size='-1'>";
													echo mysql_result($l, $i, "cbrand")." ";
													echo mysql_result($l, $i, "os")." ";
													echo mysql_result($l, $i, "color")." ";
													echo mysql_result($l, $i, "ram")." ";
													echo mysql_result($l, $i, "processor")." ";
													echo mysql_result($l, $i, "hdd")." ";
													echo mysql_result($l, $i, "graphic")." ";
													echo mysql_result($l, $i, "cbase")." ";
													echo "<br/>$x Deals Available<br>";
													echo "</font>";
													echo "</a></li>";
												}
											?>
										</ul>
									</li>
									<li><a href="#" class="art">Art</a>
										<ul>
											<?php
												$type = "art";
												for($i=0;$i<$na;$i++) 
												{
													$x = mysql_num_rows(mysql_query("SELECT * FROM art_db WHERE mbid=".mysql_result($a, $i, 0)));
													$lst = "";
													if($i == $na-1)
														$lst = " class=\"last\"";
													echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($a, $i, 0)."'".$lst.">";
													echo "<font size='-1'>";
													echo mysql_result($a, $i, "type")." ";
													echo mysql_result($a, $i, "painter")." ";
													echo mysql_result($a, $i, "year")." ";
													echo mysql_result($a, $i, "abase")." ";
													echo "<br/>$x Deals Available<br>";
													echo "</font>";
													echo "</a></li>";
												}
											?>
										</ul>
									</li>
								</ul>
							</p>
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
		$(document).ready(function () {
			$('#accordion li').click(function () {
				//slideup or hide all the Submenu
				$('#accordion li').children('ul').slideUp('fast');	
				//remove all the "Over" class, so that the arrow reset to default
				$('#accordion li > a').each(function () {
					if ($(this).attr('rel')!='') {
						$(this).removeClass($(this).attr('rel') + 'Over');	
					}
				});
				//show the selected submenu
				$(this).children('ul').slideDown('fast');
				//add "Over" class, so that the arrow pointing down
				$(this).children('a').addClass($(this).children('li a').attr('rel') + 'Over');			
			});	
		});	
	</script>
	<!--<script>
		$(function() {
			$("#type").selectmenu();
		});
	</script>-->
</html>