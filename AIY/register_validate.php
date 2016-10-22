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
						<li class="menu-item"><a href="login.html">Home</a></li>
						<li class="menu-item"><a href="AboutUs1.php">About Us</a></li>
						<li class="menu-item"><a href="contact2.php">Contact Us</a></li>
						<li class="menu-item"><a href="help1.php">HELP</a></li>
						<li class="menu-item"><a href="whatorc1.php">What is reverse auctioning?</a></li>
						<li class="menu-item"><a href="steps1.php">Steps in reverse auctioning</a></li>
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
							$submit=$_POST['submit'];
							$fname = strip_tags($_POST['fname']);
							$date=$_POST['model'];
							$email = strip_tags($_POST['email']);
							$cname = strip_tags($_POST['company']);
							$category=$_POST['deal'];
							$tel=$_POST['phone'];
							$address=$_POST['address'];
							$uname = strtolower(strip_tags($_POST['username']));
							$pswd = strip_tags($_POST['password']);
							$rpswd = strip_tags($_POST['repassword']);

							if($submit)
							{

								if($fname && $date && $tel && $email && $cname && $category && $uname && $pswd && $rpswd && $address)
								{
									//fullname validate
									if(!ctype_alnum(str_replace(array(' ',"'",'-'),'',$fname)) && (!is_numeric($fname[0])))
									{
										echo "<font face='Courier New' size='+1' color='red'>";	
										echo "Fullname is not accepted<br/>";
										echo "</font>";
									}

									//date validation
									//Check the length of the entered Date value
									if((strlen($date)<10) || (strlen($date)>10))
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Enter the date in 'yyyy-mm-dd' format<br/>";
										echo "</font>";
									}
									else
									{
										//The entered value is checked for proper Date format
										if((substr_count($date,"-"))<>2)
										{
											echo "<font face='Courier New' size='+1' color='red'>";
											echo "Enter the date in 'yyyy/mm/dd' format<br/>";
											echo "</font>";
										}
										else
										{
											$pos=strpos($date,"-");
											$year=substr($date,0,($pos));
											$result=ereg("^[0-9]+$",$year);
											if(!($result))
											{
												echo "<font face='Courier New' size='+1' color='red'>";
												echo "Enter a Valid Year<br/>";
												echo "</font>";
											}
									
											else
											{
												if(($year<1900) || ($year>2200))
												{
													echo "<font face='Courier New' size='+1' color='red'>";
													echo "Enter a year between 1900-2200<br/>";
													echo "</font>";
												}
											}
										
											$month=substr($date,($pos+1),2);
											if(($month<=0) || ($month>12))
											{
												echo "<font face='Courier New' size='+1' color='red'>";
												echo "Enter a Valid Month<br/>";
												echo "</font>";
											}
											else
											{
												$result=ereg("^[0-9]+$",$month);
												if(!($result))
												{
													echo "<font face='Courier New' size='+1' color='red'>";
													echo "Enter a Valid Month<br/>";
													echo "</font>";
												}
											}
									
											$rdate=substr($date,($pos+4),strlen($date));
											$result=ereg("^[0-9]+$",$rdate);
											if(!($result))
											{
												echo "<font face='Courier New' size='+1' color='red'>";
												echo "Enter a Valid date<br/>";
												echo '</font>';
											}
											else
											{
												if(($rdate<=0) || ($rdate>31))
												{
													echo "<font face='Courier New' size='+1' color='red'>";
													echo "Enter a Valid Date<br/>";
													echo "</font>";
												}
											}
										}		
									}
									//checking for radiobuttons
									if(isset($_POST['gender']))
									{
										$gender=$_POST['gender'];
									}
									else
									{
										echo "<font face='Courier New' size='+1' color='red'>";	
										echo "The gender is not selected<br/>";
										echo "</font>";
									}

									//phone validate
									if(!is_numeric($tel))
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Enter valid phone number<br/>"; 
										echo "</font>";
									}		
										
									//email validation
									if (!ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$",$email))
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Invalid email<br/>";
										echo "</font>";
									}
										
									//account radiobuttons
									if(isset($_POST['type']))
									{
										$type=$_POST['type'];
									}
									else
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "The type is not selected<br/>";
										echo "</font>";
									}
										
									//text area validation
									if ( strlen ( trim ( $_POST['address']) ) == 0 )
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Address is not entered<br/>";
										echo "</font>";
									}
									
									//company name validate
									if(!ctype_alnum(str_replace(array(' ',"'",'-'),'',$cname)) && (!is_numeric($cname[0])))
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Company name invalid<br/>";
										echo "</font>";
									}
								
									//drop down validate
									if (!isset ($category) )
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Please select an item<br/>";
										echo "</font>";
									}
									else 
									{ // there is a value
										$category = mysql_real_escape_string ($category);
									}

									//check password and repeat password
									if($pswd==$rpswd)
									{
										if(strlen($uname)<6&&!ereg("^[a-z0-9]+$",$uname))
										{
											echo "<font face='Courier New' size='+1' color='red'>";
											echo "The username is not valid<br/>";
											echo "</font>";
										}
										else
										{
											if(strlen($pswd)<6||strlen($pswd)>25)
											{	
												echo "<font face='Courier New' size='+1' color='red'>";
												echo "Password length not in range<br/>";
												echo "</font>";
											}
											else
											{
												//encrypt password
												/*
												$pswd=md5($pswd);
												$rpswd=md5($rpswd);
												*/
												
												//register the user
											
												//open database
												$connect=mysql_connect("localhost","root","root");
												mysql_select_db("phpregister");	//selects database name is phplog					
											
												//check available username
												$namecheck=mysql_query("SELECT username FROM users WHERE username='$uname'");
												$count=mysql_num_rows($namecheck);
								
												if($count!=0)
												{
													die("The username already exists");	
												}
												else
												{		
													if(mysql_query("INSERT INTO users (`fullname`, `dateofbirth`, `gender`, `phone`, `email`, `type`, `address`, `companyname`, `dealer`, `username`, `password`) VALUES ('$fname', '$date', '$gender', '$tel', '$email', '$type', '$address', '$cname','$category', '$uname', '$pswd')")) {
														$_SESSION['username'] = $uname;
														$_SESSION['password'] = $pswd;
														
														if($type == 2)
															echo "<a href='member1.php'>Goto Seller Member Page</a>";
														else
															echo "<a href='member.php'>Goto Buyer Member Page</a>";
													}
												}
											}	
										}
									}
									else
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Your passwords do not match<br/>";
										echo "</font>";
									}

									//checkbox validation
									if(!isset($_POST['acceptq1']))
									{
										echo "<font face='Courier New' size='+1' color='red'>";
										echo "Checkbox isn't checked<br/>";
										echo "</font>";
									} 
								}	
								else
								{
									echo "<font face='Courier New' size='+1' color='red'>";
									echo "Please fill in <b> all </b> the details<br/>";
									echo "</font>";
								}
							}
						?>
					</div>
					<div id="sidebar" class="widget-area" role="complementary">
						<aside class="widget">
							<h3 class='widget-title'><a href='regfinal.html'>Back</a></h3>
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