<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Accordion</title>
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
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
	
	<style>
	
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
	
</head>
<body>
<br/><br/><br/>
<body>
<?php
error_reporting(0);
session_start();
$connect=mysql_connect("localhost","auction","root");
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
	<li>
		<a href="#" class="mobile">Mobile</a>
		<ul>
<?php
$type = "mobile";
for($i=0;$i<$nm;$i++) {
  $x = mysql_num_rows(mysql_query("SELECT * FROM mobile_db WHERE mbid=".mysql_result($m, $i, 0)));
  $lst = "";
  if($i == $nm-1)
    $lst = " class=\"last\"";
  echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($m, $i, 0)."'".$lst.">";
  echo mysql_result($m, $i, "mbrand")." ";
  echo mysql_result($m, $i, "model")." ";
  echo mysql_result($m, $i, "color")." ";
  echo mysql_result($m, $i, "os")." ";
  echo mysql_result($m, $i, "mbase")." ";
  echo "<br/>$x Deals Available<br>";
  echo "</a></li>";
    
}
?>
		</ul>
	</li>
	<li>
		<a href="#" class="car">Car</a>
		<ul>
			<?php
$type = "car";
for($i=0;$i<$nc;$i++) {
  $x = mysql_num_rows(mysql_query("SELECT * FROM car_db WHERE mbid=".mysql_result($c, $i, 0)));
  $lst = "";
  if($i == $nc-1)
    $lst = " class=\"last\"";
  echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($c, $i, 0)."'".$lst.">";
   echo mysql_result($c, $i, "brand")." ";
  echo mysql_result($c, $i, "model")." ";
  echo mysql_result($c, $i, "color")." ";
  echo mysql_result($c, $i, "basep")." ";
  echo "<br/>$x Deals Available<br>";
  echo "</a></li>";
    
}
?>
		</ul>
	</li>
	<li>
		<a href="#" class="comp">Computer</a>
		<ul>
<?php
$type = "comp";
for($i=0;$i<$nl;$i++) {
  $x = mysql_num_rows(mysql_query("SELECT * FROM comp_db WHERE mbid=".mysql_result($l, $i, 0)));
  $lst = "";
  if($i == $nl-1)
    $lst = " class=\"last\"";
  echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($l, $i, 0)."'".$lst.">";
  echo mysql_result($l, $i, "cbrand")." ";
  echo mysql_result($l, $i, "os")." ";
  echo mysql_result($l, $i, "color")." ";
  echo mysql_result($l, $i, "ram")." ";
  echo mysql_result($l, $i, "processor")." ";
  echo mysql_result($l, $i, "hdd")." ";
  echo mysql_result($l, $i, "graphic")." ";
  echo mysql_result($l, $i, "cbase")." ";
  echo "<br/>$x Deals Available<br>";
  echo "</a></li>";
    
}
?>
		</ul>
	</li>
	<li>
		<a href="#" class="art">Art</a>
		<ul>
<?php
$type = "art";
for($i=0;$i<$na;$i++) {
  $x = mysql_num_rows(mysql_query("SELECT * FROM art_db WHERE mbid=".mysql_result($a, $i, 0)));
  $lst = "";
  if($i == $na-1)
    $lst = " class=\"last\"";
  echo "<li><a href='getdetails.php?type=".$type."&id=".mysql_result($a, $i, 0)."'".$lst.">";
  echo mysql_result($a, $i, "type")." ";
  echo mysql_result($a, $i, "painter")." ";
  echo mysql_result($a, $i, "year")." ";
  echo mysql_result($a, $i, "abase")." ";
  echo "<br/>$x Deals Available<br>";
  echo "</a></li>";
    
}
?>
		</ul>
	</li>
</ul>

</body>
</html>