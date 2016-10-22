<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/auction.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Auction it yourself</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="" />
<meta name="Gestured" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="login.html">Home</a></li>
			<li><a href="AboutUs.php">About Us</a></li>
			<li><a href="contact.php">Contact Us</a></li>
            <li><a href="help.php">HELP</a></li>
            <li><a href="whatorc.php">What is reverse auctioning?</a></li>
            <li><a href="steps.php">Steps in reverse auctioning</a></li>
		</ul>
	</div>
	<div id="logo">
		<h1>auction it yourself</h1>
		<p>reverse auctioning re-engineered</p>
	</div>
</div>
<!-- end header -->
	<!-- start page -->
	<div id="page"><!-- InstanceBeginEditable name="Region1" -->
	  <div id="sidebar1" class="sidebar">
	   
       
       
       
    </div>
	<!-- InstanceEndEditable -->
	  <!-- start content -->
	  <!-- InstanceBeginEditable name="Region2" -->
	  <div id="content">
	    <div class="post">
	      <h1 class="title">&nbsp;</h1>
	      <p class="byline">&nbsp;</p>
	    </div>
	    <div class="post">
	      <h2 class="title">
		  <?php
		  error_reporting(0);


 $name=isset($_POST['name']);
 $email=isset($_POST['email']);
 $comments=isset($_POST['comments']);
 $flag=0;
 
 
 if($name&&$email&&$comments)
 {
	 if(!ctype_alnum(str_replace(array(' ',"'",'-'),'',$name)) && (!is_numeric($name[0])))
	  {
		$flag+=1;
		echo "<font face='Courier New' size='+1' color='red'>";
			 echo "Please enter your name<br/>";
			 echo "</font>";
		 }
		 
		if (ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$",$email))
			{
				$flag+=1;
				echo "<font face='Courier New' size='+1' color='red'>";
				echo "Invalid email<br/>";
				echo "</font>";
			} 
			
			if ( strlen($comments)== 0 )
				{
					$flag+=1;
				echo "<font face='Courier New' size='+1' color='red'>";
				echo "Post some additional delivery details<br/>";
				echo "</font>";
				}
				
				if($flag==0)
				{
				echo "<font face='Courier New' size='+2' color='white'>";
				echo "Thank you for your comments ";
				echo "</font>";
				}
		
}
	
						
				
				
				else
				{
					$flag+=1;
				echo "<font face='Courier New' size='+1' color='red'>";
				die ("Please enter all the details");
				echo "</font>";
				}

				
?>

	      <div class="entry"> </div>
	      </div>
	    
	    </div>
	  <!-- InstanceEndEditable -->
	  <!-- end content -->
		<!-- start sidebars -->
		<!-- InstanceBeginEditable name="Region3" -->
		<div id="sidebar2" class="sidebar">
		 <p>&nbsp;</p>
		  </div>
		<!-- InstanceEndEditable -->
		<!-- end sidebars -->
		<div style="clear: both;"></div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
	<p class="copyright">Devloped by Amey Kelekar</p>
</div>
</body>
<!-- InstanceEnd --></html>
