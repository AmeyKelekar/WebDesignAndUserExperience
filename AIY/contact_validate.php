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

	     