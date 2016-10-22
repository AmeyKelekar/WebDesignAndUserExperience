<html>
	<body>
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
		<div id="artpost">
			<?php
				$type = "art";
				for($i=0;$i<$na;$i++) 
				{
					$x = mysql_num_rows(mysql_query("SELECT * FROM art_db WHERE mbid=".mysql_result($a, $i, 0)));
 
					echo "<font face='Comic Sans MS' size='+1'>"; 
					echo mysql_result($a, $i, "type")." ";
					echo mysql_result($a, $i, "painter")." ";
					echo mysql_result($a, $i, "year")." ";
					echo mysql_result($a, $i, "abase")." ";
					echo mysql_result($a, $i, "comments")." ";

					echo "<font color='red'>";
					echo "$x Deals Available<br>";
					echo "</font>";
					echo "</font>";
					echo "<a href='getdetails.php?type=".$type."&id=".mysql_result($a, $i, 0)."'><font face='Monotype Corsiva' size='+1'>Get Details</font></a>";
				}
			?>	
		</div>
		<div id="comppost">
			<?php
				$type = "comp";
				for($i=0;$i<$nl;$i++) 
				{
					$x = mysql_num_rows(mysql_query("SELECT * FROM comp_db WHERE mbid=".mysql_result($l, $i, 0)));
					echo "<font face='Comic Sans MS' size='+1'>";   
					echo mysql_result($l, $i, "cbrand")." ";
					echo mysql_result($l, $i, "os")." ";
					echo mysql_result($l, $i, "color")." ";
					echo mysql_result($l, $i, "ram")." ";
					echo mysql_result($l, $i, "processor")." ";
					echo mysql_result($l, $i, "hdd")." ";
					echo mysql_result($l, $i, "graphic")." ";
					echo mysql_result($l, $i, "cbase")." ";
					echo mysql_result($l, $i, "comments")." ";

					echo "<font color='red'>";
					echo "$x Deals Available<br>";
					echo "</font>"; 
					echo "</font>";
					echo "<a href='getdetails.php?type=".$type."&id=".mysql_result($l, $i, 0)."'><font face='Monotype Corsiva' size='+1'>Get Details</font></a>";
					echo "<br>";
				}
			?>
		</div>
		<div id="mobpost">
			<?php
				$type = "mobile";
				for($i=0;$i<$nm;$i++) 
				{
					$x = mysql_num_rows(mysql_query("SELECT * FROM mobile_db WHERE mbid=".mysql_result($m, $i, 0)));
					echo "<font face='Comic Sans MS' size='+1'>";  
					echo mysql_result($m, $i, "mbrand")." ";
					echo mysql_result($m, $i, "model")." ";
					echo mysql_result($m, $i, "color")." ";
					echo mysql_result($m, $i, "os")." ";
					echo mysql_result($m, $i, "mbase")." ";
					echo mysql_result($m, $i, "comments")." ";
					echo "<font color='red'>"; 
					echo "$x Deals Available<br>";
					echo "</font>";
					echo "</font>";
					echo "<a href='getdetails.php?type=".$type."&id=".mysql_result($m, $i, 0)."'><font face='Monotype Corsiva' size='+1'>Get Details</font></a>";
				}
			?>
		</div>
		<div id="carpost">
			<?php
				$type = "car";
				for($i=0;$i<$nc;$i++) 
				{
					$x = mysql_num_rows(mysql_query("SELECT * FROM car_db WHERE mbid=".mysql_result($c, $i, 0)));
					echo "<font face='Comic Sans MS' size='+1'>";  
					echo mysql_result($c, $i, "brand")." ";
					echo mysql_result($c, $i, "model")." ";
					echo mysql_result($c, $i, "color")." ";
					echo mysql_result($c, $i, "basep")." ";
					echo mysql_result($c, $i, "comments")." ";
					echo "<font color='red'>";  
					echo "$x Deals Available<br>";
					echo "</font>";
					echo "</font>";
					echo "<a href='getdetails.php?type=".$type."&id=".mysql_result($c, $i, 0)."'><font face='Monotype Corsiva' size='+1'>Get Details</font></a>";
				}
			?>
		</div>
	</body>
</html>